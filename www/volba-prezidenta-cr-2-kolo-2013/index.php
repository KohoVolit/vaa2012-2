<?php
/**
* VAA
* reads questions from json
*/

include("../setup.php");

$qfile = 'questions.json';
$rfile = 'region.json';
//$constitfile = '../backend/obvody.json';

if (!isset($_SESSION['started'])) {
  session_start();
  $_SESSION['started'] = true;
}

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

//read questions
$questions = json_decode(file_get_contents($qfile));
$number_questions = count((array)$questions);
//$constits = json_decode(file_get_contents($constitfile));

//read regional info
$region = json_decode(file_get_contents($rfile));

//partners
if (isset($_GET['partner'])) {
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
} else $partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');

$smarty->assign('partner',$partner);
$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->assign('region',$region);
//$smarty->assignByRef('constits', $constits);
$smarty->display('page-region.tpl');


?>
