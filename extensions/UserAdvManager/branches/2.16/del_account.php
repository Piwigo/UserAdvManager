<?php
//----------------------------------------------------------- include
define('PHPWG_ROOT_PATH','./../../');

include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );
include_once( PHPWG_ROOT_PATH.'include/functions_mail.inc.php' );

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

$title= l10n('Deleted_Account_Redirection_Page');
$page['body_id'] = 'theAboutPage';
include(PHPWG_ROOT_PATH.'include/page_header.php');

@include(PHPWG_ROOT_PATH.'template/'.$user['template'].
  '/theme/'.$user['theme'].'/themeconf.inc.php');


  global $user, $lang, $conf, $errors;
  

  $conf_UAM = unserialize($conf['UserAdvManager']);

  if (function_exists('get_user_language_desc'))
  {
    $custom_text = get_user_language_desc($conf_UAM[25]);
  }
  else $custom_text = l10n($conf_UAM[25]);
    
  $template->assign(
    array(
      'GALLERY_URL'          => make_index_url(),
			'CUSTOM_REDIR_MSG'     => $custom_text,
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
  	'UAM_RedirPage'=>dirname(__FILE__).'/template/del_account.tpl',
	)
);

$template->pparse('UAM_RedirPage');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>