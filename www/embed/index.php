<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');


//regions
include ('../regions.php');

//add friendly url
foreach ($regions as $key=>$r) {
  $regions[$key]['friendly_url'] = friendly_url($r['name'] . '-2012') . '/?';
}

$constit = array(
	'0' => 'Celá ČR',
	'2'=>'Sokolov (2)',
	'5'=>'Chomutov (5)',
	'8'=>'Rokycany (8)',
	'11'=>'Domažlice (11)',
	'14'=>'České Budějovice (14)',
	'17'=>'Praha 12 (17)',
	'20'=>'Praha 4 (20)',
	'23'=>'Praha 8 (23)',
	'26'=>'Praha 2 (26)',
	'29'=>'Litoměřice (29)',
	'32'=>'Teplice (32)',
	'35'=>'Jablonec nad Nisou (35)',
	'38'=>'Mladá Boleslav (38)',
	'41'=>'Benešov (41)',
	'44'=>'Chrudim (44)',
	'47'=>'Náchod (47)',
	'50'=>'Svitavy (50)',
	'53'=>'Třebíč (53)',
	'56'=>'Břeclav (56)',
	'59'=>'Brno-město (59)',
	'62'=>'Prostějov (62)',
	'65'=>'Šumperk (65)',
	'68'=>'Opava (68)',
	'71'=>'Ostrava-město (71)',
	'74'=>'Karviná (74)',
	'77'=>'Vsetín (77)',
	'80'=>'Zlín (80)'
);

foreach ($constit as $ckey=>$c) {
  $constit[$ckey] = array(
    'name' => $c,
    'friendly_url' => (($ckey==0) ? 'senat-2012/?' : 'senat-2012/page.php?constituency_code='.$ckey.'&'),
    'selected' => (($ckey==0) ? 'true' : 'false'),
  );
}

$calc2013 = array(
  array(
    'name' => 'Volební kalkulačka 2013',
    'friendly_url' => 'poslanecka-snemovna-2013/',
    'selected' => true,
  ),
);

$inventory2013 = array(
  array(
    'name' => 'Inventura hlasování 2010-2013',
    'friendly_url' => 'poslanecka-snemovna-2013-inventura-hlasovani/',
    'selected' => false,
  ),
);

$president2 = array(
  array(
    'name' => 'Prezidentská kalkulačka 2. kolo',
    'friendly_url' => 'volba-prezidenta-cr-2-kolo-2013/',
    'selected' => 'false',
  ),
);

$president = array(
  array(
    'name' => 'Prezidentská kalkulačka 1. kolo',
    'friendly_url' => 'volba-prezidenta-cr-2013/',
    'selected' => 'false',
  ),
);

$sizes = array(
  array('name' => 'Největší 850x600', 'width' => '850', 'height' => '600'),
  array('name' => 'Standardní 650x550', 'width' => '650', 'height' => '550', 'selected' => true),
  array('name' => 'Mobilní 480x320', 'width' => '480', 'height' => '320'),
  array('name' => 'Mobilní na výšku 320x480', 'width' => '320', 'height' => '480'),
);

$calcs = array(
  'all' => array(
    'name' => 'Celá VolebníKalkulačka.cz',
    'calc' => array(array('name'=>'VolebníKalkulačka.cz','friendly_url'=>'?')),
  ),
  
  'calc2013' => array(
    'name' => 'Názorový test volby 2013',
    'calc' => $calc2013,
  ),
  
  'inventory2013' => array(
    'name' => 'Inventura hlasování 2010-2013',
	'calc' => $inventory2013,
  ),

  'president2' => array(
    'name' => 'Prezidentská kalkulačka 2013 2.kolo',
    'calc' => $president2,
  ),
  
  'president' => array(
    'name' => 'Prezidentská kalkulačka 2013 1.kolo',
    'calc' => $president,
  ),

  'region' => array(
    'name' => 'Krajské volební kalkulačky 2012',
    'calc' => $regions,

  ),
  'senate' => array(
    'name' => 'Senátní volební kalkulačka 2012',
    'calc' => $constit,
  ),

);

//random key
$key = randomAlphaNum(8);

$smarty->assign('calcs', $calcs);
$smarty->assign('key', $key);
$smarty->assign('sizes', $sizes);

$smarty->display('embed.tpl'); 

/**
* generates random key
*/
function randomAlphaNum($length){

    $rangeMin = pow(36, $length-1); //smallest number to give length digits in base 36
    $rangeMax = pow(36, $length)-1; //largest number to give length digits in base 36
    $base10Rand = mt_rand($rangeMin, $rangeMax); //get the random number
    $newRand = base_convert($base10Rand, 10, 36); //convert it
   
    return $newRand; //spit it out
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
