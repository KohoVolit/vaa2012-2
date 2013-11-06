<?php


// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

if (isset($_GET['thanks']))
  $thanks = true;
else
  $thanks = false;

if (isset($_GET['id']))
  $id = htmlentities($_GET['id']);
else 
  $id = 'undefined';

$data['attend'] = array(
  array('yes', 'Ano'),
  array('no', 'Ne'),
  array('dont_know', 'Nevím', true),
);

$data['candidates'] = array(
  array('aneo','ANEO (Aktiv nezávislých občanů, Karol Schneider)'),
  array('ano','ANO 2011 (ANO 2011, Andrej Babiš)'),
  array('cssd','ČSSD (Česká strana sociální demokratická, Bohuslav Sobotka)'),
  array('dss','DSSS (Dělnická strana sociální spravedlnosti, Tomáš Vandas)'),
  array('suverenita','Hlavu vzhůru (Jana Bobošíková)'),
  array('kan','Hlavu vzhůru (Jana Bobošíková)'),
  array('kc','Koruna Česká (Václav Srb)'),
  array('kdu-csl','KDU-ČSL (Křesťanská a demokratická unie - Československá strana lidová, Pavel Bělobrádek)'),
  array('kscm','KSČM (Komunistická strana Čech a Moravy, Vojtěch Filip)'),
  array('lev','NS-LEV 21 (Národní socialisté - levice 21. století, Jiří Paroubek)'),
  array('obcane','Občané 2011 (Ludvík Adámek)'),
  array('ods','ODS (Občanská demokratická strana, Miroslava Němcová)'),
  array('pirati','Piráti (Česká pirátská strana, Ivan Bartoš)'),
  array('pravy_blok','Pravý blok (Volte Pravý Blok…, Petr Cibulka)'),
  array('rds','RDS (Romská demokratická strana, Miroslav Tancoš)'),
  array('spoz','SPOZ (Strana práv občanů Zemanovci, Zdeněk Štengl)'),
  array('sscr','SsČR (Strana soukromníků České republiky, Rudolf Baránek)'),
  array('suverenita-szr','Suverenita (Petr Hannig)'),
  array('svobodni','Svobodní (Strana svobodných občanů, Petr Mach)'),
  array('sz','SZ (Strana zelených, Ondřej Liška)'),
  array('top09','TOP 09 (TOP 09 a Starostové a nezávislí, Karel Schwarzenberg)'),
  array('usvit','Úsvit (Úsvit přímé demokracie, Tomio Okamura)'),
  array('zmena','Změna (Jan Korytář)'),
  array('dont_know','Nevím', true),
);

$data['preferential'] = array(
  array('more', 'Ano, více než jeden'),
  array('one', 'Ano, jeden'),
  array('no', 'Ne'),
  array('dont_know','Nevím', true),
); 

$data['sure_before'] = array(
  array('yes', 'Určitě ano'),
  array('probably_yes', 'Spíše ano'),
  array('probably_no', 'Spíše ne'),
  array('no', 'Určitě ne'),
  array('dont_know', 'Nevím', true),
);

$data['surprise'] = array(
  array('yes', 'Určitě ano'),
  array('probably_yes', 'Spíše ano'),
  array('probably_no', 'Spíše ne'),
  array('no', 'Určitě ne'),
  array('dont_know', 'Nevím', true),
);

$data['change'] = array(
  array('agreed_me', 'Potvrdila mi, koho volit'),
  array('helped_me', 'Pomohla mi vybrat, koho volit'),
  array('changed_me', 'Změnila můj názor, koho volit'),
  array('not_changed_me', 'Neovlivnila moji volbu'),
  array('dont_know', 'Nevím', true),
);

$data['influence'] = array(
  array('friends','Přátelé, kolegové'),
  array('family','Rodina'),
  array('nobody','Nikdo'),
  array('dont_know', 'Nevím', true),
);

$data['about_politics'] = array(
  array('often','Často'),
  array('sometimes','Občas'),
  array('occasionaly','Výjimečně'),
  array('never', 'Nikdy'),
  array('dont_know', 'Nevím', true),
);

$data['candidates_family'] = array(
  array('aneo','ANEO (Aktiv nezávislých občanů, Karol Schneider)'),
  array('ano','ANO 2011 (ANO 2011, Andrej Babiš)'),
  array('cssd','ČSSD (Česká strana sociální demokratická, Bohuslav Sobotka)'),
  array('dss','DSSS (Dělnická strana sociální spravedlnosti, Tomáš Vandas)'),
  array('suverenita','Hlavu vzhůru (Jana Bobošíková)'),
  array('kan','Hlavu vzhůru (Jana Bobošíková)'),
  array('kc','Koruna Česká (Václav Srb)'),
  array('kdu-csl','KDU-ČSL (Křesťanská a demokratická unie - Československá strana lidová, Pavel Bělobrádek)'),
  array('kscm','KSČM (Komunistická strana Čech a Moravy, Vojtěch Filip)'),
  array('lev','NS-LEV 21 (Národní socialisté - levice 21. století, Jiří Paroubek)'),
  array('obcane','Občané 2011 (Ludvík Adámek)'),
  array('ods','ODS (Občanská demokratická strana, Miroslava Němcová)'),
  array('pirati','Piráti (Česká pirátská strana, Ivan Bartoš)'),
  array('pravy_blok','Pravý blok (Volte Pravý Blok…, Petr Cibulka)'),
  array('rds','RDS (Romská demokratická strana, Miroslav Tancoš)'),
  array('spoz','SPOZ (Strana práv občanů Zemanovci, Zdeněk Štengl)'),
  array('sscr','SsČR (Strana soukromníků České republiky, Rudolf Baránek)'),
  array('suverenita-szr','Suverenita (Petr Hannig)'),
  array('svobodni','Svobodní (Strana svobodných občanů, Petr Mach)'),
  array('sz','SZ (Strana zelených, Ondřej Liška)'),
  array('top09','TOP 09 (TOP 09 a Starostové a nezávislí, Karel Schwarzenberg)'),
  array('usvit','Úsvit (Úsvit přímé demokracie, Tomio Okamura)'),
  array('zmena','Změna (Jan Korytář)'),
  array('dont_know','Nevím', true),
);

$data['media'] = array(
  array('novinky','Novinky.cz / Právo'),
  array('idnes','iDnes.cz / MF Dnes'),
  array('lidovky','Lidovky.cz / Lidové noviny'),
  array('ihned','iHned.cz / Hospodářské noviny'),
  array('halonoviny','Halonoviny.cz / Haló noviny'),
  array('aktualne','Aktuálně.cz'),
  array('ct','ct24.cz, ceskatelevize.cz'),
  array('nove','tn.nova.cz'),
  array('blesk','Blesk.cz / Blesk'),
  array('aha','Ahaonline.cz / Aha'),
  array('super','Super.cz / Super'),
  array('blisty','Blisty.cz / Britské listy'),
  array('other','Jiné'),
  array('no_answer','Bez odpovědi',true),
);

$data['info'] = array(
  array('one', 'Ano', true),
  array('no', 'Ne'),
); 

$smarty->assign('thanks',$thanks);
$smarty->assign('id',$id);
$smarty->assign('data',$data);
$smarty->display('psp2013vk-kalkulacka-vyzkum-2.tpl');
