<?php
//----------------------------------------------------------- include
define('PHPWG_ROOT_PATH','./../../');
include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );
include_once (NBC_UAM_PATH.'include/constants.php');
include_once (NBC_UAM_PATH.'include/functions.inc.php');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
//check_status(ACCESS_NONE);
load_language('plugin.lang', NBC_UAM_PATH);

if (isset($_GET['key']))
{

  if (VerifyConfirmMail($_GET['key']))
    $template->assign(
			array(
				'CONFIRM_MAIL_MESSAGE' => l10n('confirm_mail_ok'),
			)
		);
  else  
    $template->assign(
			array(
				'CONFIRM_MAIL_MESSAGE' => l10n('confirm_mail_bad'),
			)
		);        
//    redirect(make_index_url());
}

/**
 * set in ./language/en_UK.iso-8859-1/local.lang.php (maybe to create)
 * for example for clear theme:
  $lang['Theme: clear'] = 'This is the clear theme based on yoga template. '.
  ' A standard template/theme of PhpWebgallery.';
 *
 * Don't forget php tags !!!
 *
 * Another way is to code it thru the theme itself in ./themeconf.inc.php
 */

$title= l10n('confirm_mail_page_title');
$page['body_id'] = 'theAboutPage';
include(PHPWG_ROOT_PATH.'include/page_header.php');

@include(PHPWG_ROOT_PATH.'template/'.$user['template'].
  '/theme/'.$user['theme'].'/themeconf.inc.php');

$template->set_filenames(
  array(
  	'confirm_mail'=>NBC_UAM_PATH.'ConfirmMail.tpl',
	)
);
if (isset($lang['Theme: '.$user['theme']]))
{
  $template->assign(
  	'THEME_ABOUT',l10n('Theme: '.$user['theme'])
  );
}

if ( isset($conf['gallery_url']) )
	{
	$template->assign(
		array(
    	'GALLERY_URL' =>
      		isset($page['gallery_url']) ?
          		$page['gallery_url'] : $conf['gallery_url'],
		)
	);
}


$template->pparse('confirm_mail');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>