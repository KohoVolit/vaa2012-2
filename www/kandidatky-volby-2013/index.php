<?php

include("texts.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

$data = (array) json_decode(file_get_contents("data.json"));
$parties_maybe = (array) json_decode(file_get_contents("maybe.json"));
$parties_0 = (array) json_decode(file_get_contents("no.json"));

//print_r($data);die();


$smarty->assign('parties_maybe',$parties_maybe);
$smarty->assign('parties_0',$parties_0);
$smarty->assign('data',$data);
$smarty->assign('text',$text);
$smarty->display('psp2013-candidates.tpl');



?>
