<?php

//questions from google + info about region

//regions
include ('regions.php');

//questions complete
$file = file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdDQ3R3Q4cTVmNVFMRkQ5d1dENFkxbUE&output=csv");

//path to generate (relative)
$path = '../www/';

//read questions
foreach ($file as $row) {
  $row_ar = str_getcsv($row);
  $region_code = $row_ar[0];
  $id = $row_ar[1];
  $question = (($row_ar[4] != '') ? $row_ar[4] : $row_ar[2]);
  $description = $row_ar[3];
  $name = $row_ar[5];
  
  //order and select the questions - to be done **********************
   
  $out[$region_code][] = array(
    'id' => $id,
    'name' => $name,
    'description' => $description,
    'question' => $question,
  );
  
  //print_r($out);die();

}

//print_r($out);die();

//for each region
foreach ($out as $key => $region) {
 print_r($key); 
   //if direcotry not existing, create it
   $dir = $path . friendly_url($regions[$key]['name']) . '-2012/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
  //questions
  $fout = fopen ($dir . 'questions.json', "w+");
  $json = json_encode($region);
  fwrite($fout,$json);
  fclose($fout);
  
  //info about region
  $rout = $regions[$key];
  $rout['friendly_calc_url'] = friendly_url($regions[$key]['name']) . '-2012';
  $rout['calc'] = $regions[$key]['name'] . ' 2012';
  $fout = fopen ($dir . 'region.json', "w+");
  $json = json_encode($rout);
  fwrite($fout,$json);
  fclose($fout);
}


/**
* creates "friendly url" version of text, translits string (gets rid of diacritics) and substitutes ' ' for '-', etc.
* @return friendly url version of text
* example:
* friendly_url('klub ČSSD')
*     returns 'klub-cssd'
*/
function friendly_url($text,$locale = 'cs_CZ.utf-8') {
    $old_locale = setlocale(LC_ALL, "0");
setlocale(LC_ALL,$locale);
$url = $text;
$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
$url = trim($url, "-");
$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
$url = strtolower($url);
$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
setlocale(LC_ALL,$old_locale);
return $url;
}

?>
