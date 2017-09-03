<?php
/**
* VAA
* select region in senate
*/
session_start();

//include ("cache.php");

$relative_path = "";

include("common.php");

// //partners
// if (isset($_GET['partner'])) {
//   $partner = sanitize($_GET['partner']);
// } else {
//   $partner = 'default';
// }
// if (file_exists('css/'.$partner.'.css')) $partnercss = 'css/'.$partner.'.css';
//
// //custom background and header color:
// if (isset($_GET['background'])) {
//   $background = 'http://' . str_replace('_','/',sanitize($_GET['background']));
//   $background_orig = sanitize($_GET['background']);
// } else {
//   $background = false;
//   $background_orig = false;
// }
//
// if (isset($_GET['navbar'])) {
//   $navbar = '#' . sanitize($_GET['navbar']);
// } else {
//   $navbar = false;
// }
$smarty->assign('session_id',session_id());
$smarty->display('select.tpl');
