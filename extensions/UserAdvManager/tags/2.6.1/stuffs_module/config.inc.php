<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if (!isset($datas)) $datas = '';

// set configuration
// -----------------
if (isset($_POST['submit'])) {
  $datas = stripslashes($_POST['personal_content']);
}

// Template init
// -------------
$template->assign('cat_style', array());
$template->assign(array('PERSONAL_CONTENT' => $datas));

$template->set_filenames(array('module_options' => dirname(__FILE__) . '/config.tpl'));
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');

?>