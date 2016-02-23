<?php

session_start();

//error_reporting(E_ALL);

$relative_path = "../";

include($relative_path . "cache.php");

include($relative_path . "common.php");

include('data.php');

if (isset($_GET['ref']))
    $ref = $_GET['ref'];
else
    $ref = '';

$smarty->assign('t',$texts);
$smarty->assign('ref',$ref);
$smarty->assign('questions',$questions);

$smarty->display('research.tpl');
