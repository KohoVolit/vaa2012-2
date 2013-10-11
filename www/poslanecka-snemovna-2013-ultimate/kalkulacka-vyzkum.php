<?php


// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

$data['attend'] = array(
  array('yes', 'Určitě ano'),
  array('probably_yes', 'Spíše ano'),
  array('probably_no', 'Spíše ne'),
  array('no', 'Určitě ne'),
  array('no_right', 'Nemám volební právo'),
  array('dont_know', 'Nevím', true),
);

$data['candidates'] = array(
  array('ano','ANO 2011 (ANO 2011, Andrej Babiš)'),
  array('pirati','Piráti (Česká pirátská strana, Ivan Bartoš)'),
  array('cssd','ČSSD (Česká strana sociální demokratická, Bohuslav Sobotka)'),
  array('dss','DSSS (Dělnická strana sociální spravedlnosti, Tomáš Vandas)'),
  array('kscm','KSČM (Komunistická strana Čech a Moravy, Vojtěch Filip)'),
  array('kdu-csl','KDU-ČSL (Křesťanská a demokratická unie - Československá strana lidová, Pavel Bělobrádek)'),
  array('les','LES (Liberální ekologická strana, Martin Bursík)'),
  array('lev','NS-LEV 21 (Národní socialisté - levice 21. století, Jiří Paroubek)'),
  array('ods','ODS (Občanská demokratická strana, Miroslava Němcová)'),
  array('spoz','SPOZ (Strana práv občanů Zemanovci, Zdeněk Štengl)'),
  array('svobodni','Svobodní (Strana svobodných občanů, Petr Mach)'),
  array('sz','SZ (Strana zelených, Ondřej Liška)'),
  array('suverenita','Suverenita/Hlavu vzhůru (Suverenita, Jana Bobošíková)'),
  array('top09','TOP 09 (TOP 09 a Starostové a nezávislí, Karel Schwarzenberg)'),
  array('usvit','Úsvit (Úsvit přímé demokracie, Tomio Okamura)'),
  array('pravy_blok','Pravý blok (Volte Pravý Blok…, Petr Cibulka)'),
  array('zmena','Změna (Změna, Jan Korytář)'),
  array('other','Jinou'),
  array('none','Žádnou', true),
);

$data['previously'] = array(
  array('yes', 'Ano'),
  array('no', 'Ne'),
); 

$data['change_mind'] = array(
  'Neovlivnila','Ovlivnila'
);

$data['change_result'] = array(
  'Neovlivní','Ovlivní',
);

$data['looking_for_info'] = array(
  'Nikdy','Velmi často',
);

$data['info_from'] = array(
  array('press','Tisk'),
  array('tv','Televize'),
  array('radio','Rádio'),
  array('internet','Internetové zpravodajství'),
  array('social_network','Sociální sítě (Fb, ...)'),
  array('friends','Přátelé, kolegové'),
  array('family','Rodina'),
  array('other','Jiné'),
  array('no_answer','Bez odpovědi',true),
);

$data['sex'] = array(
  array('woman', 'Žena'),
  array('man', ' Muž'),
  array('other', ' Jiné', true),
);

$data['education'] = array(
  array('one','Základní, vyučen/a'),
  array('two','Střední škola s maturitou'),
  array('three','Vysoká škola'),
  array('no_answer','Bez odpovědi',true),    
);

$data['age'] = array(
  array('_18','Méně než 18'),
  array('18_29','18 - 29'),
  array('30_39','30 - 39'),
  array('40_49','40 - 49'),
  array('50_59','50 - 59'),
  array('60_69','60 - 69'),
  array('70_','70 a více'),
  array('no_answer','Bez odpovědi',true),
);

$data['occupation'] = array(
  array('student','Student'),
  array('employee','Zaměstnanec'),
  array('enterpreneur', 'Podnikatel, živnostník'),
  array('not_employed', 'Nezaměstnaný'),
  array('retired', 'Důchodce'),
  array('other', 'Jiné (rodič. dovolená, atd.)'),
  array('no_answer','Bez odpovědi',true),
);

$data['place'] = array(
  array('_3000','Méně než 3 000'),
  array('3000_10000', '3 000 - 9 999'),
  array('10000_50000','10 000 - 49 999'),
  array('50000_120000','50 000 - 119 999'),
  array('120000_','Více než 120 000'),
  array('no_answer','Bez odpovědi',true),
);

$smarty->assign('data',$data);
$smarty->assign('count_candidates',count($data['candidates']));
$smarty->display('psp2013vk-kalkulacka-vyzkum.tpl');
