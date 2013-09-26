<?php
/**
* VAA
* reads questions from json
*/

include("../setup.php");


if (isset($_GET['partner'])) {
  $qfile = 'questions_'.$_GET['partner'].'.json';
} else {
  $qfile = 'questions_lupa.json';
} 
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
if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'mesec': 
		$partner = array('name'=>'mesec','swatch_bar' => 'v', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'v');
		break;
	  case 'podnikatel':
		$partner = array('name'=>'podnikatel','swatch_bar' => 'w', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'w');
		break;
	  case 'vitalia':
		$partner = array('name'=>'vitalia','swatch_bar' => 'x', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'x');
		break;
	  default:
		$partner = array('name'=>'lupa','swatch_bar' => 'u', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'u');
	} 
} else 
$partner = array('name'=>'lupa','swatch_bar' => 'u', 'swatch_footer' => 'r', 'swatch_question_body' => 'q', 'swatch_progressbar' => 'u');

include("texts.php");

//print_r($questions);die();

$smarty->assign('text',$text);
$smarty->assign('partner',$partner);
$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->display('psp2013iinfo-page.tpl');


?>
