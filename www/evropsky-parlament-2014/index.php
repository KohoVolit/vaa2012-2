<?php
/**
* VAA
* reads questions from json
*/
session_start();

include("../setup.php");
include("texts.php");
include("common.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates/' . $text['election_code']);
$smarty->setCompileDir('../../smarty/templates_c');

//read questions
$qfile = 'questions.json';
$questions = json_decode(file_get_contents($qfile));

//partners
if (isset($_GET['partner'])) {
  $partner = sanitize($_GET['partner']);
} else {
  $partner = 'default';
}
if (file_exists('css/'.$partner.'.css')) $partnercss = 'css/'.$partner.'.css';


//custom background and header color:
if (isset($_GET['background'])) {
  $background = 'http://' . str_replace('_','/',sanitize($_GET['background']));
  $background_orig = sanitize($_GET['background']);
} else {
  $background = false;
  $background_orig = false;
}

if (isset($_GET['navbar'])) {
  $navbar = '#' . sanitize($_GET['navbar']);
} else {
  $navbar = false;
}

//get prefilled user's values, if exist
$user = json_encode(get_user_values());

$smarty->assign('text',$text);
$smarty->assign('background',$background);
$smarty->assign('background_orig',$background_orig);
$smarty->assign('navbar',$navbar);
$smarty->assign('partnercss',$partnercss);
$smarty->assign('user', $user);
$smarty->assignByRef('questions', $questions);
$smarty->assign('session_id',session_id());
$smarty->display('page.tpl');


?>
