<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Piwigo.
#
# Copyright (c) 2003-2008 Olivier Meunier and contributors
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

// +-----------------------------------------------------------------------+
// |                              Configuration                            |
// +-----------------------------------------------------------------------+

define('DC_LOADER_SERVICE','http://piwigo.org/download/netinstall/');
define('DC_LOADER_ARCHIVE','http://piwigo.org/download/dlcounter.php?code=latest');

$available_languages = array(
  'en_UK' => 'English [UK]',
  'fr_FR' => 'Français [FR]',
  'es_ES' => 'Español [ES]',
  'it_IT' => 'Italiano [IT]',
  'de_DE' => 'Deutch [DE]',
  'pl_PL' => 'Polski [PL]',
//  'nl_NL' => 'Dutch [NL]'      /* Not translated yet */
);

// +-----------------------------------------------------------------------+

error_reporting(E_ALL & ~E_NOTICE);

getLanguage();

$step = !empty($_REQUEST['step']) ? (integer)$_REQUEST['step'] : 1;
$got_php5	= version_compare(PHP_VERSION, '5', '>=');
if (!$got_php5 && $step != 2)
{
	$step = 1;
}

function l10n($str)
{
	global $lang;

	return isset($lang[$str]) ? $lang[$str] : $str;
}

function fetchRemote($src,&$dest,$step=0)
{
	if ($step > 3)
	{
		return false;
	}

	// Try curl to read remote file
	if (function_exists('curl_init'))
	{
		$ch = @curl_init(); 
		@curl_setopt($ch, CURLOPT_URL, $src); 
		@curl_setopt($ch, CURLOPT_HEADER, 0); 
		@curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		@curl_setopt($ch, CURLOPT_USERAGENT, 'Piwigo Net Install'); 
		$content = @curl_exec($ch);
		@curl_close($ch);
		if ($content !== false)
		{
			write_dest($content, $dest);
			return true;
		}
	}

	// Try file_get_contents to read remote file
	if ((boolean)ini_get('allow_url_fopen'))
	{
		$content = @file_get_contents($src);
		if ($content !== false)
		{
			write_dest($content, $dest);
			return true;
		}
	}

	// Try fsockopen to read remote file
	$src = parse_url($src);
	$host = $src['host'];
	$path = $src['path'];
	
	if (($s = @fsockopen($host,80,$errno,$errstr,5)) === false)
	{
		return false;
	}

	fwrite($s,
		'GET '.$path." HTTP/1.0\r\n"
		.'Host: '.$host."\r\n"
		."User-Agent: Piwigo Net Install\r\n"
		."Accept: text/xml,application/xml,application/xhtml+xml,text/html,text/plain,image/png,image/jpeg,image/gif,*/*\r\n"
		."\r\n"
	);

	$i = 0;
	$in_content = false;
	while (!feof($s))
	{
		$line = fgets($s,4096);

		if (rtrim($line,"\r\n") == '' && !$in_content)
		{
			$in_content = true;
			$i++;
			continue;
		}
		if ($i == 0)
		{
			if (!preg_match('/HTTP\/(\\d\\.\\d)\\s*(\\d+)\\s*(.*)/',rtrim($line,"\r\n"), $m))
			{
				fclose($s);
				return false;
			}
			$status = (integer) $m[2];
			if ($status < 200 || $status >= 400)
			{
				fclose($s);
				return false;
			}
		}
		if (!$in_content)
		{
			if (preg_match('/Location:\s+?(.+)$/',rtrim($line,"\r\n"),$m))
			{
				fclose($s);
				return fetchRemote(trim($m[1]),$dest,$step+1);
			}
			$i++;
			continue;
		}
		write_dest($line, $dest);
		$i++;
	}
	fclose($s);
	return true;
}

function write_dest($str, &$dest)
{
  if (is_resource($dest))
	{
		fwrite($dest, $str);
	}
	else
	{
		$dest .= $str;
	}
}

function getLanguage()
{
	global $lang, $available_languages;

	if (isset($_GET['language']) and isset($available_languages[$_GET['language']]))
	{
		$language = $_GET['language'];
	}
	else
	{
		$language = 'en_UK';
		// Try to get browser language
		foreach ($available_languages as $language_code => $language_name)
		{
			if (substr($language_code,0,2) == @substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2))
			{
				$language = $language_code;
				break;
			}
		}
	}
	// Retrieve traductions
	$lang = array();
	if (fetchRemote(DC_LOADER_SERVICE.'language/'.$language.'/loader.lang.txt', $code))
	{
		@eval($code);
		define('DC_LOADER_LANG', $language);
	}
}

function getLocation()
{
	$server_name = explode(':',$_SERVER['HTTP_HOST']);
	$server_name = $server_name[0];
	if ($_SERVER['SERVER_PORT'] == '443')
	{
		$scheme = 'https';
		$port = '';
	}
	elseif (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
	{
		$scheme = 'https';
		$port = ($_SERVER['SERVER_PORT'] != '443') ? ':'.$_SERVER['SERVER_PORT'] : '';
	}
	else
	{
		$scheme = 'http';
		$port = ($_SERVER['SERVER_PORT'] != '80') ? ':'.$_SERVER['SERVER_PORT'] : '';
	}
	$loc = preg_replace('#/$#','',str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])));

	return $scheme.'://'.$server_name.$port.$loc.'/';
}

function openPage()
{
	header('Content-Type: text/html; charset=UTF-8');
	echo
	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" '.
	' "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n".
	'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.substr(DC_LOADER_LANG,0,2).'" lang="'.substr(DC_LOADER_LANG,0,2).'">'."\n".
	"<head>\n".
	' <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'."\n".
	' <title>'.l10n('Piwigo NetInstall').'</title>'."\n".
	' <meta name="ROBOTS" content="NOARCHIVE,NOINDEX,NOFOLLOW" />'."\n".
	' <link rel="stylesheet" type="text/css" media="screen" href="'.DC_LOADER_SERVICE.'loader.css" />'."\n".
	'</head>'."\n".
	'<body>'."\n".
	'<div id="headbranch"></div>'."\n".
	'<div id="theHeader"></div>'."\n".
	'<div id="content">'."\n".
	'<h2>'.l10n('Piwigo NetInstall').'</h2>'."\n";
}

function closePage()
{
	echo
	'</div>'."\n".
	'<div id="footer">'."\n".
	l10n('This loader was initialy coded for <a href="http://www.dotclear.net" title="Dotclear">Dotclear</a>. Thanks!')."\n".
	'</div>'."\n".
	'</body>'."\n".
	'</html>';
}

function initPHP5()
{
	$htaccess = dirname(__FILE__).'/.htaccess';
	if (file_exists($htaccess)) {
		if (!is_readable($htaccess) || !is_writable($htaccess))
		{
			return false;
		}
	}
	$rawdatas = '';
	if (!fetchRemote(DC_LOADER_SERVICE.'hosting.txt',$rawdatas))
	{
		return false;
	}
	$rawdatas = explode("\n",$rawdatas);
	if (!($my_hostname = @gethostbyaddr($_SERVER['SERVER_ADDR'])))
	{
		return false;
	}
	$found = false;
	foreach ($rawdatas as $line) {
		list($name,$hostname,$rule) = explode('|',trim($line));
		if (preg_match('!'.preg_quote($hostname).'$!',$my_hostname))
		{
			$found = $rule;
			break;
		}
	}
	if ($found) {
		if (false !== ($fh = @fopen($htaccess,"ab")))
		{
			fwrite($fh,"\n".$found);
			fclose($fh);
			return true;
		}
	}
	return false;
}

function cleanFiles()
{
	@unlink(dirname(__FILE__).'/pwg_files.php');
	@unlink(dirname(__FILE__).'/pwg_unzip.php');
	@unlink(dirname(__FILE__).'/piwigo-install.zip');
}

function grabFiles()
{
	$failed = true;
	$lib_files = @fopen(dirname(__FILE__).'/pwg_files.php','wb');
	$lib_unzip = @fopen(dirname(__FILE__).'/pwg_unzip.php','wb');
	$dc_zip    = @fopen(dirname(__FILE__).'/piwigo-install.zip','wb');

	if (!$lib_files || !$lib_unzip || !$dc_zip)
	{
		return false;
	}

	if (fetchRemote(DC_LOADER_SERVICE.'lib.files.txt',$lib_files))
	{
		if (fetchRemote(DC_LOADER_SERVICE.'class.unzip.txt',$lib_unzip))
		{
			if (fetchRemote(DC_LOADER_ARCHIVE.'',$dc_zip))
			{
				$failed = false;
			}
		}
	}

	fclose($lib_files);
	fclose($lib_unzip);
	fclose($dc_zip);

	if ($failed)
	{
		cleanFiles();
		return false;
	}
	return true;
}

function writeMessage($level,$title,$lines)
{
	if (empty($lines))
	{
		return;
	}

	echo
	'<div class="msg '.$level.'">'."\n".
	'<h3>'.$title.'</h3>'."\n".
	'<p>'."\n";
	foreach ($lines as $line)
	{
		echo $line.'<br />'."\n";
	}
	echo '</p></div>'."\n";
}

function nextAction($label,$step,$more='')
{
	echo
	'<form action="'.$_SERVER['SCRIPT_NAME'].'?language='.DC_LOADER_LANG.'" method="post">'."\n".
	$more."\n".
	'<p class="button"><input type="hidden" name="step" value="'.$step.'" />'."\n".
	'<input type="hidden" name="lang" value="'.DC_LOADER_LANG.'" />'."\n".
	'<input type="submit" name="submit" value="'.$label.'"/>'."\n".
	'</p></form>'."\n";
}


if (!defined('DC_LOADER_LANG'))
{
	// No traduction for this part because can't fetch!
	openPage();
	echo
	'<h2>Piwigo NetInstall</h2>'."\n";
	writeMessage('warning','Damnit!', array(
		'Due to restrictions in your PHP configuration, NetInstall cannot get its job done.',
		'Please see Piwigo documentation to perform a normal installation.',
		'Really sorry for the inconvenience.'
	));
	closePage();
	exit;
}

switch ($step)
{
	case 1 :
	{
		openPage();
		echo '<h3>'.l10n('Welcome to NetInstall!').'</h3>'."\n";

		// Show available languages
		asort($available_languages);
		echo
		'<p class="language">'.l10n('Language').' &nbsp;'."\n".
		'<select name="language" onchange="document.location = \''.basename(__FILE__).'?language=\'+this.options[this.selectedIndex].value;">'."\n";
		foreach ($available_languages as $language_code => $language_name)
		{
			echo '<option label="'.$language_name.'" value="'.$language_code.'" '.($language_code == DC_LOADER_LANG ? 'selected="selected"' : '').'>'.$language_name.'</option>'."\n";
		}
		echo '</select>'."\n".'</p>'."\n";

		echo
		'<p>'.l10n('This tool is meant to retrieve the latest Piwigo archive and unzip it in your webspace.').'<br />'."\n".
		l10n('Right after then, you will be redirect to the Piwigo Setup Wizard.').'</p>'."\n";

		if (!is_writable(dirname(__FILE__)))
		{
			writeMessage('warning',l10n('Write access is needed'), array(
				l10n('It looks like NetInstall wont be able to write in the current directory, and this is required to follow on.'),
				l10n('Please try to change the permissions to allow write access, then reload this page by hitting the Refresh button.')
			));
			nextAction(l10n('Refresh'),1);
		}
		elseif (!$got_php5)
		{
			writeMessage('notice',l10n('PHP 5 is required'), array(
				sprintf(l10n('It appears your webhost is currently running PHP %s.'), PHP_VERSION),
				l10n('NetInstall may try to switch your configuration to PHP 5 by creating or modifying a .htaccess file.'),
				l10n('Note you can change your configuration by yourself and restart NetInstall after that.')
			));
			nextAction(l10n('Try to configure PHP 5'),2);
		}
		else
		{
			nextAction(l10n('Retrieve and unzip Piwigo'),3,
				'<p class="destination"><label for="destination">'.l10n('Destination:').'</label> '.
				getLocation().
				' <input type="text" id="destination" name="destination" '.
				'value="piwigo" size="15" maxlength="100" /></p>'
			);
		}
		closePage();
		break;
	}

	case 2 :
	{
		if (!empty($_POST['submit']) && !$got_php5)
		{
			$got_php5 = initPHP5();
		}
		if ($got_php5)
		{
			header('Location: '.$_SERVER['SCRIPT_NAME'].'?step=1&language='.DC_LOADER_LANG);
		}
		else
		{
			openPage();
			writeMessage('warning',l10n('Sorry!'),array(
				l10n('NetInstall was not able to configure PHP 5.'),
				l10n("You may referer to your hosting provider's support and see how you could switch to PHP 5 by yourself."),
				l10n('Hope to see you back soon.')
			));
			closePage();
		}
		break;
	}

	case 3 :
	{
		$msg = array(l10n('What are you doing here that way ?!'));
		$text = '';
		if (!empty($_POST['submit']) && isset($_POST['destination']))
		{
			$msg = array();
			$dest = preg_replace('/[^A-Za-z0-9_\/-]/','',$_POST['destination']);
			$dest = preg_replace('#/+#','/',$dest);
			
			if (file_exists(dirname(__FILE__).'/./'.$dest.'/include/mysql.inc.php') || file_exists(dirname(__FILE__).'/./'.$dest.'/include/default_config.inc.php'))
			{
				$msg[] = l10n('It seems like a previous Piwigo installation is still sitting in that space.');
				$msg[] = l10n('You need to rename or remove it before we can go further...');
			}
			elseif (grabFiles())
			{
				$lib_files = dirname(__FILE__).'/pwg_files.php';
				$lib_unzip = dirname(__FILE__).'/pwg_unzip.php';
				$dc_zip		= dirname(__FILE__).'/piwigo-install.zip';
				if (!file_exists($lib_files) || !file_exists($lib_unzip) || !file_exists($dc_zip))
				{
					$msg[] = l10n('Needed files are not present.');
				}

				require $lib_files;
				require $lib_unzip;
				$uz = new fileUnzip($dc_zip);
				$files = $uz->getList();
				if (count($files) == 0)
				{
					$msg[] = l10n('Invalid zip file.');
				}

				foreach ($files as $k => $v)
				{
					if ($v['is_dir'])
					{
						continue;
					}
					$t = preg_replace('#^[^/]*/#','./'.$dest.'/',$k);
					$uz->unzip($k,$t);
				}
				$uz->close;
				unset($uz);

				if (!is_dir(dirname(__FILE__).'/'.$dest))
				{
					$msg[] = l10n('It seems that the zip file was not extracted.');
				}
				else
				{
					# Remove files and self-destruction
					cleanFiles();
					unlink(__FILE__);

					$redir = preg_replace('#/+#','/',str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])).'/'.$dest.'/install.php');

					$text = '<h3>'.l10n('Congratulations!').'</h3>'
					.'<p>'.l10n('Everything went fine. You are now ready to start the installation procedure.').'</p>'
					.'<form action="'.$redir.'" method="get"><p class="button">'
					. '<input type="hidden" name="language" value="'.DC_LOADER_LANG.'">'
					. '<input type="submit" value="'.l10n('Install Piwigo now').'" />'
					. '</p></form>';
				}
			}
			else
			{
				$msg[] = l10n('An error occurred while grabbing the necessary files to go on.');
			}
		}
		openPage();
		writeMessage('warning',l10n('Something went wrong...'),$msg);
		echo $text;
		closePage();
		break;
	}
}
?>
