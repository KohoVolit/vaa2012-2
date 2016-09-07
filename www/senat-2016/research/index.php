<?php

session_start();

//error_reporting(E_ALL);

$relative_path = "../";

//include($relative_path . "cache.php");

include($relative_path . "common.php");

include('data.php');

//parameters to be passed:
$parameters = ['ref','hr'];
$pparameters = [];
foreach ($parameters as $p) {
    if (isset($_GET[$p]))
        $pparameters[$p] = $_GET[$p];
    else
        $pparameters[$p] = '';   
}

$smarty->assign('t',$texts);
$smarty->assign('pparameters',$pparameters);
$smarty->assign('questions',$questions);

$smarty->display('research.tpl');
