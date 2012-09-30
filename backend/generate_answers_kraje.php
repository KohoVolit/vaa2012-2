<?php
  //generates answers for regions from google files
  
//path to generate (relative)
$path = '../www/';

//regions
include ('regions.php');
  
//questions complete
$fqc = file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdDQ3R3Q4cTVmNVFMRkQ5d1dENFkxbUE&output=csv");

//answers
$fanswers = array(
  'jc' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdFQtbkxjdGRxaV9xUzg3MmdXMU5HV1E&output=csv"),
  //'jm' => array('code'=>'jm', 'name'=>'Jihomoravský kraj', 'special' => true),
  'ka' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdEw2RHo3ZFZ1SU54VVFBSEcxWktBYlE&output=csv"),
  'kr' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdHkzUHZXcFFNOXl6SlhGNzZzNEY2OVE&output=csv"),
  'li' => file('https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdFE2cWpkSWVJdXZNVGcwMzE4bkU1NEE&output=csv'),
  'mo' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdGJCNlk0WE5jUng2SktoUVVnU1BxN2c&output=csv"),
  'ol' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdE5USm0tcDN3MTFCRWpmWkhLTEFmcFE&output=csv"),
  'pa' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdDVyQTZxMUVNVDd0eFdmUEx6SGJPWUE&output=csv"),
  'pl' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdE1iR0o3b0tUY3Q2QlVkdzQ0TE51TkE&output=csv"),
  'st' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdEJLb0hoYzJEM2tsd2pUVVVkbTVPbHc&output=csv"),
  'us' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdENJdEVUN0paQUhuQzRDN2lCVXNHQ1E&output=csv"),
  'vy' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdDJnRHNvaEZTRzhuSFJFb0Z4UXJrM3c&output=csv"),
  'zl' => file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdEdIbkJ2YjhBUC0zazN3bmh0Zkx5Y3c&output=csv"),
);
//column of code
$ccode = array(
  'jc' => 21,
  //'jm' => array('code'=>'jm', 'name'=>'Jihomoravský kraj', 'special' => true),
  'ka' => 22,
  'kr' => 23,
  'li' => 10,
  'mo' => 24,
  'ol' => 10,
  'pa' => 10,
  'pl' => 23,
  'st' => 10,
  'us' => 22,
  'vy' => 14,
  'zl' => 10,
);

$answers0 = array();
foreach ($fanswers as $key=>$file) {
  foreach ($file as $row) {
    $answers0[$key][] = str_getcsv($row);
  }
}
//trim everything
foreach ($answers0 as $key=>$region) {
  foreach ($region as $rkey=>$row) {
    foreach ($row as $ikey=>$item) {
      $answers0[$key][$rkey][$ikey] = trim($answers0[$key][$rkey][$ikey]);
    }
  }
}
//print_r($answers0);die();
//clean duplicates, leave the last one
foreach ($answers0 as $key=>$region) {
    $codes = array();
	$a_region = array_reverse($region);
	foreach ($a_region as $rkey=>$r) {
		if (isset($codes[trim($r[$ccode[$key]])])) 
		  unset($a_region[$rkey]);
		else $codes[trim($r[$ccode[$key]])] = true;
	}
	$answers0[$key] = array_reverse($a_region);
}
//print_r($answers0);die();

//questions complete
$file = file("https://docs.google.com/spreadsheet/pub?key=0Ah0pQ2bgP0nkdDQ3R3Q4cTVmNVFMRkQ5d1dENFkxbUE&output=csv");

//read questions
foreach ($file as $row) {
  $row_ar = str_getcsv($row);
  
  $region_code = trim($row_ar[0]);
  $id = trim($row_ar[1]);
  $question = trim($row_ar[2]); //mind it! (different from question generation)
  $description = trim($row_ar[3]);
   
  $questions[$region_code][] = array(
    'id' => $id,
    'name' => '',
    'description' => $description,
    'question' => $question,
  );
  
}


//parties
$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dGhCX2JaYkYzREtjQWFubVlmWXluSkE&output=csv");

foreach ($fparties as $row) {
  $row_ar = str_getcsv($row);
  $unique_code = trim($row_ar[3]);
  $region_code = trim($row_ar[0]);
  $name = trim($row_ar[1]);
  $short_name = trim($row_ar[4]);
  $parties[$unique_code] = array(
    'unique_code' => $unique_code,
    'region_code' => $region_code,
    'name' => $name,
    'short_name' => $short_name,
  ); 
}



foreach ($answers0 as $key=>$region) {
  $keys = array();
  foreach ($region[0] as $fkey => $first_row) {
    $keys[trim($first_row)] = $fkey;
    //unique code
    if (trim($first_row) == 'Vložte bezpečnostní kód, který jste obdržel/a v kontaktním e-mailu.')
      $unique_code_column[$key] = trim($fkey);
  }
  //print_r($questions[$key]);die();
   //print_r($keys);die();
  $ids = array();
  foreach ($questions[$key] as $q) {
    if (isset($keys[trim($q['question'])])) {
      $ids[$keys[trim($q['question'])]] = $q['id'];
    } else {
      $ids[$keys[trim($q['question'])]] = null;
    }
  }
  $answers_id[$key] = $ids;

}

  
foreach ($answers0 as $key=>$region) {
  array_shift($region);
  $i = 1;
  foreach ($region as $row) {
    $vote = array();
    foreach ($answers_id[$key] as $ikey => $id) {
      $vote[$id] = answer2value($row[$ikey]);
    }
    if (isset($parties[$row[$unique_code_column[$key]]])) {
      $party = $parties[$row[$unique_code_column[$key]]];
      $data[$key][] = array(
        'vote' => $vote,
        'name' => $party['name'],
        'short_name' => $party['short_name'],
        'friendly_name' => friendly_url($party['short_name']),
        'id' => $i,
        
      );
      $i++;
    } else {
      //report wrong unique key
      echo $key . "::" . $row[$unique_code_column[$key]] . "<br/>\n";
    }
  }
  
  //if direcotry not existing, create it
   $dir = $path . friendly_url($regions[$key]['name']) . '-2012/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
 
  $fout = fopen ($dir . 'answers.json', "w+");
  $json = json_encode($data[$key]);
  fwrite($fout,$json);
  fclose($fout);
}  
  
  print_r($data);
  
die();


function answer2value($a) {
  if ($a == 'Souhlasím.') return 1;
  if ($a == 'Nesouhlasím.') return -1;
  else return 0;
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
