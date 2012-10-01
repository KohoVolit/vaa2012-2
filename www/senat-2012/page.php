<?php
/**
* VAA
* reads questions from json
*/

$qfile = 'questions.json';
$rfile = 'region.json';
//$constitfile = '../backend/obvody.json';

if (!isset($_SESSION['started'])) {
  session_start();
  $_SESSION['started'] = true;
}

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

//read regional info
if (isset($_GET['constituency_code'])) $cc=$_GET['constituency_code'];
else $cc=8;
$region_additional = code2constituency($cc);

//read questions
$questions = json_decode(file_get_contents($qfile));
$number_questions = count((array)$questions);
//$constits = json_decode(file_get_contents($constitfile));

//read regional info
$region = json_decode(file_get_contents($rfile));
$region->calc = $region->calc . ': ' . $region_additional;

$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->assign('region',$region);
$smarty->assign('constituency_code',$cc);
//$smarty->assignByRef('constits', $constits);
$smarty->display('page-senate.tpl');

/**
*
*/
function code2constituency($code) {
  $constit = array(
	'2'=>'Sokolov',
	'5'=>'Chomutov)',
	'8'=>'Rokycany',
	'11'=>'Domažlice',
	'14'=>'České Budějovice',
	'17'=>'Praha 12',
	'20'=>'Praha 4',
	'23'=>'Praha 8',
	'26'=>'Praha 2',
	'29'=>'Litoměřice',
	'32'=>'Teplice',
	'35'=>'Jablonec nad Nisou',
	'38'=>'Mladá Boleslav',
	'41'=>'Benešov',
	'44'=>'Chrudim',
	'47'=>'Náchod',
	'50'=>'Svitavy',
	'53'=>'Třebíč',
	'56'=>'Břeclav',
	'59'=>'Brno-město',
	'62'=>'Prostějov',
	'65'=>'Šumperk',
	'68'=>'Opava',
	'71'=>'Ostrava-město',
	'74'=>'Karviná)',
	'77'=>'Vsetín',
	'80'=>'Zlín'
	);
  if (isset($constit[$code])) return $constit[$code];
  else return 'Rokycany';
}
?>
