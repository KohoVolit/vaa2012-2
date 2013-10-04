<?php

//


session_start();



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');


//partners
if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'mesec': 
		$partner = array('name'=>'mesec','swatch_bar' => 'v', 'swatch_footer' => 'r', 'swatch_question_body' => 'v', 'swatch_progressbar' => 'v', 'answers' => '');
		break;
	  case 'podnikatel':
		$partner = array('name'=>'podnikatel','swatch_bar' => 'w', 'swatch_footer' => 'r', 'swatch_question_body' => 'w', 'swatch_progressbar' => 'w', 'answers' => '_podnikatel');
		break;
	  case 'vitalia':
		$partner = array('name'=>'vitalia','swatch_bar' => 'x', 'swatch_footer' => 'r', 'swatch_question_body' => 'x', 'swatch_progressbar' => 'x', 'answers' => '');
		break;
	  default:
		$partner = array('name'=>'lupa','swatch_bar' => 'u', 'swatch_footer' => 'r', 'swatch_question_body' => 'u', 'swatch_progressbar' => 'u', 'answers' => '');
	} 
} else 
$partner = array('name'=>'lupa','swatch_bar' => 'u', 'swatch_footer' => 'r', 'swatch_question_body' => 'u', 'swatch_progressbar' => 'u', 'answers' => '');

$parties_file = './answers'.$partner['answers'].'.json';
//read parties = candidates = mps
$candidates = json_decode(file_get_contents($parties_file));

include("texts.php");

$details = unserialize(file_get_contents("details".$partner['answers']."_ser.txt"));
  //print_r($details);die();

//extract user values
$user = get_user_values();

//read questions
if (isset($_GET['partner'])) {
  $qfile = 'questions_'.$_GET['partner'].'.json';
} else {
  $qfile = 'questions_lupa.json';
} 
$questions = json_decode(file_get_contents($qfile));

//compare up to 2
$mps = array();
if (isset($_SESSION['last_id'])) {
  $candidate = get_mp($_SESSION['last_id'],$candidates);
  if (isset($candidate->id)) {
    $candidate->match = (isset($_SESSION['last_match']) ? $_SESSION['last_match'] : '');
    $mps[] = $candidate;
  } 
}


if(isset($_REQUEST['id']) and 
  ( (!isset($_SESSION['last_id'])) or 
    ( (isset($_SESSION['last_id']) and ($_REQUEST['id'] != $_SESSION['last_id']) ) ) ) ) {
  $candidate = get_mp($_REQUEST['id'],$candidates);
  $candidate->match = (isset($_REQUEST['match']) ? $_REQUEST['match'] : '');
  if (isset($candidate->id)) {
    $mps[] = $candidate;
    $_SESSION['last_id'] = $_REQUEST['id'];
    $_SESSION['last_match'] = $candidate->match;
  } 
}
$mps = array_reverse($mps);

$smarty->assign('details',$details);
$smarty->assign('text',$text);
$smarty->assign('user',$user);
$smarty->assign('mps',$mps);
$smarty->assign('questions',$questions);
$smarty->display('psp2013vk-compare.tpl');


/**
* finds mp by id
*/
function get_mp($id,$candidates) {
  $candidate = new StdClass();
  foreach ($candidates as $c) {
    if ($id == $c->id) {
      $candidate = $c;
      break;
    }
  }
  return $candidate;
}


/**
* extracts user's answers
*/
function get_user_values() {
  $user = array();
  if (count($_GET) > 0) {
    foreach ($_GET as $key => $param) {
      //votes
      if (substr($key,0,2) == 'q-') 
        {if ($param != 0)
          $user['vote'][substr($key,2)] = $param;}
      else if (substr($key,0,2) == 'c-')
        $user['weight'][substr($key,2)] = true;

    }
  } else
    return false;
  
  return $user;

}

?>
