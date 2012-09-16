<?php
/**
* VAA
* reads questions from json
*/

$qfile = '../data/questions_jm.json';
$constitfile = '../backend/obvody.json';

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../smarty/templates');
$smarty->setCompileDir('../smarty/templates_c');
$smarty->setCacheDir('../smarty/cache');
$smarty->setConfigDir('../smarty/configs');

//read questions
$questions = json_decode(file_get_contents($qfile));
$number_questions = count((array)$questions);
$constits = json_decode(file_get_contents($constitfile));

$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->assignByRef('constits', $constits);
$smarty->display('page.tpl');


?>
