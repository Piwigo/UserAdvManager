<?php
//----------------------------------------------------------- include
define('PHPWG_ROOT_PATH','./../../');

include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

$title= l10n('UAM_Rejected_Loggin_Page');
$page['body_id'] = 'theAboutPage';
include(PHPWG_ROOT_PATH.'include/page_header.php');

@include(PHPWG_ROOT_PATH.'template/'.$user['template'].
  '/theme/'.$user['theme'].'/themeconf.inc.php');


global $user, $lang, $conf, $errors;
  

$conf_UAM = unserialize($conf['UserAdvManager']);

if (isset($conf_UAM[40]) and $conf_UAM[40] <> '')
{
  // Management of Extension flags ([mygallery], [myurl])
  // ---------------------------------------------------
  $patterns[] = '#\[mygallery\]#i';
  $replacements[] = $conf['gallery_title'];
  $patterns[] = '#\[myurl\]#i';
  $replacements[] = get_gallery_home_url();

  if (function_exists('get_user_language_desc'))
  {
    $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM[40]));
  }
  else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM[40]));
}

$Path_UAM = UAM_PATH; // Path to be used in template to reach the icons

$template->assign(
  array(
    'UAM_PATH'             => $Path_UAM,
    'CUSTOM_REJECT_MSG'    => $custom_text,
  )
);

if (isset($lang['Theme: '.$user['theme']]))
{
  $template->assign(
  	'THEME_ABOUT',l10n('Theme: '.$user['theme'])
  );
}

$template->set_filenames(
  array(
  	'UAM_RejectPage'=>dirname(__FILE__).'/template/rejected.tpl',
	)
);

$template->pparse('UAM_RejectPage');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>