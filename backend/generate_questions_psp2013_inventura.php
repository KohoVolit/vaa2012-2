<?php

//questions from google


//questions complete
//cs
//$file = file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudDFIZDY0eF9fSFRuTDBrdVAzQ3FZTXc&output=csv");
//en
$file = file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudHdtbnFjT01sV1BjSlNwLTI4S3pVTFE&output=csv");

//directory
//cs
$directory = 'poslanecka-snemovna-2013-inventura-hlasovani/';
//en
$directory = 'czech-elections-2013-inventory-of-votes/';

//path to generate (relative)
$path = '../www/';


$i = 0;
//read questions
foreach ($file as $row) {
 if ($i > 0) {
  $row_ar = str_getcsv($row);
  //print_r($row_ar);
  /*echo $row_ar[1] .'::' . print_r(str_getcsv($row));
  die();*/
  //$region_code = 'prezident'; //trim($row_ar[0]);
  $id = $row_ar[0];
  $question = ((trim($row_ar[2]) != '') ? trim($row_ar[2]) : trim($row_ar[1]));
  $description = trim($row_ar[3]);
  $name = trim($row_ar[1]);
  $order = trim($row_ar[4]);
  $id_division = trim($row_ar[7]);
  $id_document = trim($row_ar[6]);
  
  if ($order != '') {
	  $out[] = array(
		'id' => $id,
		'name' => $name,
		'description' => $description,
		'question' => $question,
		'order' => $order,
		'id_division' => $id_division,
		'id_document' => $id_document,
	  );
  }
 }
   $i++;
}

//order questions
$order_ar = array();
foreach ($out as $key => $row) {
  $order_ar[$key]  = $row['order'];
}
array_multisort($order_ar, SORT_ASC, $out);


//print_r($out);die();

   //if direcotry not existing, create it
   $dir = $path . $directory;
   if(!file_exists($dir)) 
     mkdir($dir);
 
  //questions
  $fout = fopen ($dir . 'questions.json', "w+");
  $json = json_encode($out);
  fwrite($fout,$json);
  fclose($fout);
  


?>
