<?php

// generates one candidates' list

include("texts.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

if (isset($_GET['region_code']) and isset($_GET['party'])) {
  $data = json_decode(file_get_contents('data.json'));
  $regdata = find_value($data,$_GET['region_code'],'key');
  $outdata = find_value($regdata->candidate,$_GET['party'],'name');
  //print_r($outdata);die();
  $outdata->region = $regdata->name;
}

//print_r($outdata);die();
$smarty->assign('data',$outdata);
$smarty->assign('text',$text);
$smarty->display('psp2013-candidates-list.tpl');





function find_value($data,$value,$key_name) {
  foreach ($data as $key => $row) {

    if ($key_name == 'key') {
      if ($key == $value) {
        return $row;
      }
    } else {
      if (isset($row->$key_name) and ($row->$key_name == $value))
        return $row;
    }
  }
}

?>
