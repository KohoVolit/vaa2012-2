<?php
  //generates answers for regions from google files
  
//path to generate (relative)
$path = '../www/';

//answers
$fanswers = array(
  'psp2013' => file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudFVRVHlEZUJ2UjJYemFIVDlPN19FdVE&output=txt"),
); 
//print_r($fanswers);die();
$answers0 = array();
foreach ($fanswers as $key=>$file) {
  foreach ($file as $row) {
    //$answers0[$key][] = str_getcsv($row);
    $answers0[$key][] = explode("\t",$row);
  }
}


//clean duplicates, leave the last one
$a_senat = array_reverse($answers0['psp2013']);
foreach ($a_senat as $rkey=>$r) {

    if (isset($r[2]) and isset($codes[trim($r[2])]))
      unset($a_senat[$rkey]);
    else $codes[trim($r[2])] = true;

}
$answers0['psp2013'] = array_reverse($a_senat);
//print_r($answers0);die();

//questions complete
$file = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dDhxT3FFUE1KM3FVSHo2RHBDLVJiZnc&output=txt");

//read questions
foreach ($file as $row) {
  $row_ar = str_getcsv($row,"\t");
  
  $region_code = 'psp2013'; //$row_ar[0];
  $id = $row_ar[0];
  $question = trim($row_ar[2]); //mind it! (different from question generation)
  //$description = $row_ar[3];
  $name = trim($row_ar[1]);
   
  $questions[$region_code][] = array(
    'id' => $id,
    'name' => '',
    //'description' => $description,
    'question' => $question,
  );
  
}

array_shift($questions['psp2013']);
//print_r($questions);die();

//parties = candidates
$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFBSUEFReF9jU0NBYzhnN1M3VG84Tmc&output=txt");
foreach ($fparties as $row) {
  $row_ar = str_getcsv($row,"\t");
  if ($row_ar[3] == '1') {
	  $unique_code = $row_ar[2];
	  //$constituency_code = '';//$row_ar[0];
	  //$name = $row_ar[1];
	  //$last_name = $row_ar[0];
	  //$first_name = $row_ar[1];
	  //$name = $first_name . " " . $last_name;
	  $party = $row_ar[0];
	  $party_short_name = $row_ar[1];
	  $parties[$unique_code] = array(
		'unique_code' => $unique_code,
		//'constituency_code' => $constituency_code,
		'region_code' => 'psp2013',
		//'name' => $name,
		'party' => $party,
		//'first_name' => $first_name,
		//'last_name' => $last_name,
		//'short_name' => $last_name,
		'party_short_name' => $party_short_name,
		'everywhere' => $row_ar[4],
	  ); 
  }
}

//array_shift($parties);
//print_r($parties);die();

foreach ($answers0 as $key=>$region) {
  $keys = array();
  $i = 0;
  foreach ($region[0] as $fkey => $first_row) {
    //if ($i>=64) $bit = '...'; else $bit = ''; //quick hack, dealing with same questions
    //$keys[trim($first_row) . $bit] = $fkey;
    //unique code
    if (trim($first_row) == 'Bezpečnostní kód')
      $unique_code_column[$key] = trim($fkey);
    $i++;
  }
  //print_r($questions[$key]);die();
   //print_r($keys);die();
  $ids = array();
  foreach ($questions[$key] as $k => $q) {
    $ids[$k+3] = $q['id'];		//***************************************
  
  
    /*if (isset($keys[trim($q['question'])])) {
      $ids[$keys[trim($q['question'])]] = $q['id'];
    } else {
      $ids[$keys[trim($q['question'])]] = null;
    }*/
  }
  $answers_id[$key] = $ids;

}
//print_r($keys);die();
  
foreach ($answers0 as $key=>$region) {
  //print_r($region);die();
  array_shift($region);
  array_shift($region);
  $i = 1;
  foreach ($region as $row) {
   //print_r($row);die();
    $vote = array();
    //print_r($answers_id[$key]);die();
    foreach ($answers_id[$key] as $ikey => $id) {
      $vote[$id] = answer2value($row[$ikey]);
    }
    if (isset($parties[$row[$unique_code_column[$key]]])) {
      $party = $parties[$row[$unique_code_column[$key]]];
      $data[$key][] = array(
        'vote' => $vote,
        //'last_name' => $party['last_name'],
        //'first_name' => $party['first_name'],
        //'short_name' => $party['short_name'],
        //'name' => $party['name'],
        'party' => $party['party'],
        'party_short_name' => $party['party_short_name'],
        //'constituency_code' => $party['constituency_code'],
        'friendly_name' => friendly_url($party['party_short_name']),
        'id' => $i,
      );
      $i++;
    } else {
      //report wrong unique key
      echo $key . "::'" . $row[$unique_code_column[$key]] . "'<br/>\n";
    }
   //print_r($data);die();
  }
  //print_r($data);die();
  
  //if direcotry not existing, create it
   $dir = $path . 'poslanecka-snemovna-2013/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
 
  $fout = fopen ($dir . 'answers.json', "w+");
  $json = json_encode($data[$key]);
  fwrite($fout,$json);
  fclose($fout);
  
  //once more	*************************************
  $dir = $path . 'poslanecka-snemovna-2013-iinfo/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
 
  $fout = fopen ($dir . 'answers.json', "w+");
  $json = json_encode($data[$key]);
  fwrite($fout,$json);
  fclose($fout);
}  
  
  print_r($data);
  



function answer2value($a) {
  if ($a == 'Ano') return 1;
  if ($a == 'Ne') return -1;
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
