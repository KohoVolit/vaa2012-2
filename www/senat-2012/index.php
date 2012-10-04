<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

//partner
if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'ihned': 
		$partner = array('name'=>'ihned','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'h');
		break;
	  case 'denik':
		$partner = array('name'=>'denik','swatch_bar' => 'h', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  default:
		$partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');
	} 
} else $partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');

$smarty->assign('partner', $partner);
$smarty->assign('query_string', $_SERVER['QUERY_STRING']);
$smarty->display('select_constituency.tpl');

?>
