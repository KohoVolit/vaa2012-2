<?php

//questions from google


//questions complete
$file = file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudG9qcC02S25DSVgtTGFIalpMbUVzalE&output=csv");

//path to generate (relative)
$path = '../www/';


$i = 0;
//read questions
foreach ($file as $row) {
 if ($i > 0) {
  $row_ar = str_getcsv($row);
  //echo $row_ar[1] . print_r(str_getcsv($row));
  $region_code = 'prezident'; //trim($row_ar[0]);
  $id = $row_ar[0];
  $question = (($row_ar[2] != '') ? trim($row_ar[2]) : trim($row_ar[1]));
  $description = trim($row_ar[3]);
  $name = trim($row_ar[6]);
  $order = trim($row_ar[4]);
  
  if ($order != '') {
	  $out[$region_code][] = array(
		'id' => $id,
		'name' => $name,
		'description' => $description,
		'question' => $question,
		'order' => $order
	  );
  }
 }
   $i++;
}

//order questions
foreach ($out as $rkey=>$region) {
  $order_ar = array();
  foreach ($region as $key => $row) {
    $order_ar[$key]  = $row['order'];
  }
  array_multisort($order_ar, SORT_ASC, $out[$rkey]);

}

//print_r($out);die();

$regions = array(
  'prezident' => array('code'=>'prezident', 'name'=>'Volba prezidenta ČR', 'inflection' => 'kandidátů na prezidenta ČR', 'inflection_short' => 'kandidátů'));

//for each region
foreach ($out as $key => $region) {
 print_r($key); 
   //if direcotry not existing, create it
   $dir = $path . friendly_url($regions[$key]['name']) . '-2013/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
  //questions
  $fout = fopen ($dir . 'questions.json', "w+");
  $json = json_encode($region);
  fwrite($fout,$json);
  fclose($fout);
  
  //info about region
  /*$rout = $regions[$key];
  $rout['friendly_calc_url'] = friendly_url($regions[$key]['name']) . '-2013';
  $rout['calc'] = $regions[$key]['name'] . ' 2013';
  $fout = fopen ($dir . 'region.json', "w+");
  $json = json_encode($rout);
  fwrite($fout,$json);
  fclose($fout);*/
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
