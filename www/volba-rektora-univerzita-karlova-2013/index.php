<?php
/**
* VAA
* reads questions from json
*/

include("../setup.php");
include("texts.php");

$qfile = 'questions.json';
/*$rfile = 'region.json';*/

if (!isset($_SESSION['started'])) {
  session_start();
  $_SESSION['started'] = true;
}

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

//read questions
$questions = json_decode(file_get_contents($qfile));
$number_questions = count((array)$questions);

//partners
/*if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'ihned': 
		$partner = array('name'=>'ihned','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'denik':
		$partner = array('name'=>'denik','swatch_bar' => 'h', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'idnes':
		$partner = array('name'=>'idnes','swatch_bar' => 'i', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'i');
		break;
	  default:
		$partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');
	} 
} else*/ 
$partner = array('name'=>'default','swatch_bar' => 'q', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'q');

$smarty->assign('text',$text);
$smarty->assign('partner',$partner);
$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->display('psp2013vk-page.tpl');


?>
