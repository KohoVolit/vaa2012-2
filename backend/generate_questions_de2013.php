<?php

//questions from google


//questions complete
//cs + en
$file = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dEZNd0xsV0xfeS1VdTNiNHljYWl3UlE&output=txt");

//directory
//cs
$directory = 'nemecko-2013/';
//en
//$directory = 'czech-elections-2013-inventory-of-votes/';

//path to generate (relative)
$path = '../www/';


$i = 0;
//read questions
foreach ($file as $row) {
 if ($i > 1) {
  $row_ar = str_getcsv($row,"\t");
  //print_r($row_ar);
  /*echo $row_ar[1] .'::' . print_r(str_getcsv($row));
  die();*/
  //$region_code = 'prezident'; //trim($row_ar[0]);
  $id = $row_ar[0];
  $question = ((trim($row_ar[4]) != '') ? trim($row_ar[4]) : trim($row_ar[1]));
  //$description = trim($row_ar[3]);
  //$name = trim($row_ar[1]);
  $order = trim($row_ar[0]);
  //$id_division = trim($row_ar[7]);
  //$id_document = trim($row_ar[6]);
  
  if ($order != '') {
	  $out[] = array(
		'id' => $id,
		'name' => $question,
		//'description' => $description,
		'question' => $question,
		'order' => $order,
		//'id_division' => $id_division,
		//'id_document' => $id_document,
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
