<?php

//generates answers for podnikatel.cz

$file = file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudHNkcnRFLXJrbzFUREFsZlJ2Sk5IMEE&output=txt");

$directory = 'poslanecka-snemovna-2013-iinfo/';

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

$ns = array(
  3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,22
);

$parties = array(
  2 => array('HLAVU VZHŮRU','HLAVU VZHŮRU - volební blok'),
  3 => array('SPOZ','Strana práv občanů - Zemanovci'),
  //4 => array('SZ','Strana zelených'),
  5 => array('DSSS','Dělnická strana sociální spravedlnosti'),
  6 => array('Pravý blok','Volte Pravý Blok www.cibulka.net'),
  7 => array('KSČM','Komunistická strana Čech a Moravy'),
  8 => array('KDU-ČSL','Křesťanská a demokratická unie - Československá strana lidová'),
  9 => array('Svobodní','Strana svobodných občanů'),
  10 => array('SZ','Strana zelených'),
  11 => array('KAN','Klub angažovaných nestraníků'),
  12 => array('Piráti','Česká pirátská strana'),
  13 => array('TOP 09','TOP 09'),
  
);

//print_r($parties);die();

$data = array();
$details = array();
foreach ($parties as $k => $cand) {
	$i = 0;
	$vote = array();
	foreach ($ns as $i) {
	  //if ($i >= 1) {
		//$row_ar = str_getcsv($row,"\t");
		//print_r($row_ar);die();
		//$party = get_party($row_ar[0],$parties);
		//print_r($party);die();
		//for($j=1;$j<=27;$j++) {
		$row_ar = str_getcsv($file[$k],"\t");
		  $vote[$i+298] = vote2vote($row_ar[$i]);
		  /*if (trim($row_ar[$k+3]) != '') {
			$details[friendly_url(implode(' ',$cand))][$i] = trim($row_ar[$k+3]);
		  }*/
		//}
		
		//print_r( $row_ar); die();
	 }
	 $party['vote'] = $vote;
		//unset($noreplies[$party['id']]);
		//print_r($data);die();
	  //}
	  //$i++;
	  
	//}
	$party['party'] = $cand[1];
	$party['party_short_name'] = $cand[0];
	$party['friendly_name'] = friendly_url($cand[0]);
	$party['id'] = 100+$k-1;
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


$dir = $path . 'poslanecka-snemovna-2013-iinfo/';
if(!file_exists($dir)) 
 mkdir($dir);


$fout = fopen ($dir . 'answers_osops.json', "w+");
$json = json_encode($data);
fwrite($fout,$json);
fclose($fout);

  //no replies
/*$fout = fopen ($dir . 'noreply_podnikatel.json', "w+");
$json = json_encode($norep);
fwrite($fout,$json);
fclose($fout);*/

  //details
/*$fout = fopen ($dir . 'details_ser.txt', "w+");
$json = serialize($details);
fwrite($fout,$json);
fclose($fout);*/


function vote2vote($str) {
  if (trim($str) == 'Ano') return 1;
  if (trim($str) == 'Ne') return -1;
  return 0;
}

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
