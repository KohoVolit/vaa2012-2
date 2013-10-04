<?php

//questions from google


//questions complete
//cs + en
$file = file("https://docs.google.com/spreadsheet/pub?key=0Ah0TJXObccZydDJHSlBPX2dBOGdMeVFhRzVfaFZLZ3c&output=txt");

//directory
//cs
$directory = 'poslanecka-snemovna-2013-iinfo/';
//en
//$directory = 'czech-elections-2013-inventory-of-votes/';

//path to generate (relative)
$path = '../www/';

$out = array();
$i = 0;
//read questions
$row0 = str_getcsv($file[0],"\t");
$row1 = str_getcsv($file[1],"\t");
for ($i = 1; $i <= 10; $i++) {

  //print_r($row_ar);die();
  /*echo $row_ar[1] .'::' . print_r(str_getcsv($row));
  die();*/
  //$region_code = 'prezident'; //trim($row_ar[0]);
  $id = $i+200;
  $question = trim($row1[$i]);
  //$description = trim($row_ar[3]);
  $name = trim($row0[$i]);
  $order = $i;
  //$id_division = trim($row_ar[7]);
  //$id_document = trim($row_ar[6]);
  
  if ($order != '') {
	  $out[] = array(
		'id' => $id,
		'name' => $name,
		//'description' => $description,
		'question' => $question,
		'order' => $order,
		//'id_division' => $id_division,
		//'id_document' => $id_document,
	  );
  }
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
  $fout = fopen ($dir . 'questions_podnikatel.json', "w+");
  $json = json_encode($out);
  fwrite($fout,$json);
  fclose($fout);




?>
