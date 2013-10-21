<?php

//generates answers for podnikatel.cz

$file = file("https://docs.google.com/spreadsheet/pub?key=0Ah0TJXObccZydDJOTHBrNWxhTW5tRWd4eXU3LWxPWkE&single=true&gid=0&output=txt");

$directory = 'volba-rektora-univerzita-karlova-2013/';

$path = '../www/';

/*$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFBSUEFReF9jU0NBYzhnN1M3VG84Tmc&output=txt");
$noreplies = array();
$i = 0;
foreach ($fparties as $row) {
  //print_r($row);die();
  $row_ar = str_getcsv($row,"\t");
  if ($row_ar[3] == '1') {
	  $unique_code = $row_ar[2];
	  $party = $row_ar[0];
	  $party_short_name = $row_ar[1];
	  $parties[$unique_code] = array(
		'unique_code' => $unique_code,
		'party' => $party,
		'party_short_name' => $party_short_name,
		'everywhere' => $row_ar[4],
	  );
	  $noreplies[$i] = $parties[$unique_code];
  }
  $i++;
}*/

$parties = array(
  4 => array('Stanislav','Štech'),
  5 => array('Tomáš','Zima'),
  6 => array('Michal','Stehlík'),
);

//print_r($parties);die();

	$data = array();
	$details = array();
foreach ($parties as $k => $cand) {
	$i = 0;
	$vote = array();
	foreach ($file as $row) {
	  if ($i >= 1) {
		$row_ar = str_getcsv($row,"\t");
		//print_r($row_ar);die();
		//$party = get_party($row_ar[0],$parties);
		//print_r($party);die();
		//for($j=1;$j<=27;$j++) {
		  $vote[$i] = $row_ar[$k];
		  if (trim($row_ar[$k+3]) != '') {
			$details[friendly_url(implode(' ',$cand))][$i] = trim($row_ar[$k+3]);
		  }
		//}
		$party['vote'] = $vote;
		//unset($noreplies[$party['id']]);
		//print_r($data);die();
	  }
	  $i++;
	  
	}
	$party['name'] = $cand[1];
	$party['first_name'] = $cand[0];
	$party['friendly_name'] = friendly_url(implode(' ',$cand));
	$party['id'] = $k-3;
	$data[] = $party;
	
}
	//print_r($data);die();

//print_r($details);die();
/*$norep = array();
foreach($noreplies as $key => $row) {
  $norep[] = array(
    'party' => $row['party'],
    'party_short_name' => $row['party_short_name'],
    'friendly_name' => friendly_url($row['party_short_name']),
    'id' => $key,
  );
}*/


$dir = $path . 'volba-rektora-univerzita-karlova-2013/';
if(!file_exists($dir)) 
 mkdir($dir);


$fout = fopen ($dir . 'answers.json', "w+");
$json = json_encode($data);
fwrite($fout,$json);
fclose($fout);

  //no replies
/*$fout = fopen ($dir . 'noreply_podnikatel.json', "w+");
$json = json_encode($norep);
fwrite($fout,$json);
fclose($fout);*/

  //details
$fout = fopen ($dir . 'details_ser.txt', "w+");
$json = serialize($details);
fwrite($fout,$json);
fclose($fout);



function get_party($short_name, $parties) {
 $k=1;
 foreach ($parties as $party) {
   if ($party['party_short_name'] == $short_name) {
     return array(
       'party' => $party['party'],
       'party_short_name' => $party['party_short_name'],
       'id' => $k,
       'friendly_name' => friendly_url($party['party_short_name']),
     );
   }
   $k++;
 }
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
