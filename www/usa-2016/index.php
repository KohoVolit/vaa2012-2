<?php
/**
* VAA
* reads questions from json
*/
session_start();

include ("cache.php");

$relative_path = "";

include("common.php");

//read questions
$qfile = 'questions_' . $lang . '.json';
$questions = json_decode(file_get_contents($qfile));

//get prefilled user's values, if exist
$user = json_encode(get_user_values());

$smarty->assign('user', $user);
$smarty->assignByRef('questions', $questions);
$smarty->display('page.tpl');


?>
