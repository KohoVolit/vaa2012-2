<?php
/**
* Data for questionaire
* Variables:
* data  options
* type  type of question
*/

$questions = [
    'attend', 'candidates', 'candidates_more', 'candidates_never', 'previously', 'previously_impact', 'future_impact', 'looking_for_info', 'info_from', 'gender', 'occupation', 'education', 'age', 'region', 'place'
];

$texts = [
    "questions" => [
        'attend' => 'V marci sa konajú voľby do Národnej rady SR. Pôjdete voliť?',
        'candidates' => 'Ak sa zúčastníte týchto volieb, ktorú stranu budete nejspíš voliť?',
        'candidates_more' => 'Ktoré ďalšie strany ešte zvažujete? Môžete uviesť 1-3 strany:',
        'candidates_never' => 'Ktorú stranu by ste naopak nikdy nevolil/a?',
        'previously' => 'Vyplňoval/a ste už volebnú kalkulačku niekedy v minulosti? (Napr. pri prezidentských voľbách)',
        'previously_impact' => 'Ak áno, ovplyvnila nejakým spôsobom volebná kalkulačka vašu voľbu? (Utvrdenie vo voľbe, zmena preferencie, zvažovaní iného kandidáta, apod.)',
        'future_impact' => 'Do akej miery podľa Vás volebná kalkulačka ovplyvní výsledky volieb?' ,
        'looking_for_info' => 'Ako často aktívne vyhľadávate informácie o politike?',
        'info_from' => 'Odkiaľ čerpáte informácie o politike?',
        'gender' => 'Ste:',
        'education' => 'Aké je Vaše najvyššie dosiahnuté vzdelanie?',
        'age' => 'Koľko máte rokov?',
        'occupation' => 'Aká je Vaša hlavná pracovná činnosť?',
        'region' => 'V akom kraji bývate? (Miesto, kde sa zdržujete prevažnú časť roka)',
        'place' => 'Koľko obyvateľov má obec, v ktorej bývate? (Miesto, kde sa zdržujete prevažnú časť roka)'
    ],
    "values" => [
        'attend' => [
            'yes' => 'Určite áno',
            'probably_yes' => 'Skôr áno',
            'probably_no' => 'Skôr nie',
            'no' => 'Určite nie',
            'no_right' => 'Nemám volebné právo',
            'dont_know' => 'Nieviem'
        ], 
        'candidates' => [
            'ds' => 'Demokrati Slovenska - Ľudo Kaník',
            'kdh' => 'Kresťanskodemokratické hnutie',
            'kss' => 'Komunistická strana Slovenska',
            'ls-ns' => 'Kotleba - Ľudová strana Naše Slovensko',
            'mkda-mkdsz' => 'Maďarská kresťanskodemokratická aliancia - Magyar Kereszténydemokrata Szövetség',
            'most-hid' => 'MOST - HÍD',
            'odvaha' => 'Odvaha - Veľká národná a proruská koalícia',
            'olano-nova' => 'OBYČAJNÍ ĽUDIA a nezávislé osobnosti (OĽANO - NOVA)',
            'pd' => 'PRIAMA DEMOKRACIA',
            'sanca' => 'ŠANCA',
            'sas' => 'Sloboda a Solidarita',
            'sdku-ds' => 'Slovenská demokratická a kresťanská únia - Demokratická strana',
            'siet' => '#SIEŤ',
            'sme-rodina' => 'SME RODINA - Boris Kollár',
            'smer-sd' => 'SMER - sociálna demokracia',
            'smk-mkp' => 'Strana maďarskej komunity - Magyar Közösség Pártja',
            'sms' => 'Strana moderného Slovenska (SMS)',
            'sns' => 'Slovenská národná strana',
            'sok' => 'Slovenská občianska koalícia',
            'spolocne' => 'KOALÍCIA SPOLOČNE ZA SLOVENSKO',
            'szs' => 'Strana zelených Slovenska',
            'tip' => 'Strana TIP',
            'vzdor' => 'VZDOR - strana práce'
        ],
        'candidates_more' => [
            'not_selected' => 'Vyberte:',
            'ds' => 'Demokrati Slovenska - Ľudo Kaník',
            'kdh' => 'Kresťanskodemokratické hnutie',
            'kss' => 'Komunistická strana Slovenska',
            'ls-ns' => 'Kotleba - Ľudová strana Naše Slovensko',
            'mkda-mkdsz' => 'Maďarská kresťanskodemokratická aliancia - Magyar Kereszténydemokrata Szövetség',
            'most-hid' => 'MOST - HÍD',
            'odvaha' => 'Odvaha - Veľká národná a proruská koalícia',
            'olano-nova' => 'OBYČAJNÍ ĽUDIA a nezávislé osobnosti (OĽANO - NOVA)',
            'pd' => 'PRIAMA DEMOKRACIA',
            'sanca' => 'ŠANCA',
            'sas' => 'Sloboda a Solidarita',
            'sdku-ds' => 'Slovenská demokratická a kresťanská únia - Demokratická strana',
            'siet' => '#SIEŤ',
            'sme-rodina' => 'SME RODINA - Boris Kollár',
            'smer-sd' => 'SMER - sociálna demokracia',
            'smk-mkp' => 'Strana maďarskej komunity - Magyar Közösség Pártja',
            'sms' => 'Strana moderného Slovenska (SMS)',
            'sns' => 'Slovenská národná strana',
            'sok' => 'Slovenská občianska koalícia',
            'spolocne' => 'KOALÍCIA SPOLOČNE ZA SLOVENSKO',
            'szs' => 'Strana zelených Slovenska',
            'tip' => 'Strana TIP',
            'vzdor' => 'VZDOR - strana práce'
        ],
        'candidates_never' => [
            'not_selected' => '-',
            'ds' => 'Demokrati Slovenska - Ľudo Kaník',
            'kdh' => 'Kresťanskodemokratické hnutie',
            'kss' => 'Komunistická strana Slovenska',
            'ls-ns' => 'Kotleba - Ľudová strana Naše Slovensko',
            'mkda-mkdsz' => 'Maďarská kresťanskodemokratická aliancia - Magyar Kereszténydemokrata Szövetség',
            'most-hid' => 'MOST - HÍD',
            'odvaha' => 'Odvaha - Veľká národná a proruská koalícia',
            'olano-nova' => 'OBYČAJNÍ ĽUDIA a nezávislé osobnosti (OĽANO - NOVA)',
            'pd' => 'PRIAMA DEMOKRACIA',
            'sanca' => 'ŠANCA',
            'sas' => 'Sloboda a Solidarita',
            'sdku-ds' => 'Slovenská demokratická a kresťanská únia - Demokratická strana',
            'siet' => '#SIEŤ',
            'sme-rodina' => 'SME RODINA - Boris Kollár',
            'smer-sd' => 'SMER - sociálna demokracia',
            'smk-mkp' => 'Strana maďarskej komunity - Magyar Közösség Pártja',
            'sms' => 'Strana moderného Slovenska (SMS)',
            'sns' => 'Slovenská národná strana',
            'sok' => 'Slovenská občianska koalícia',
            'spolocne' => 'KOALÍCIA SPOLOČNE ZA SLOVENSKO',
            'szs' => 'Strana zelených Slovenska',
            'tip' => 'Strana TIP',
            'vzdor' => 'VZDOR - strana práce'
        ],
        'previously' => [
            'yes' => 'Áno',
            'no' => 'Nie'
        ],
        'previously_impact' => ['neovplyvnila','ovplyvnila'],
        'future_impact' => ['neovplivní', 'ovplyvní'],
        'looking_for_info' => ['nikdy', 'často'],
        'info_from' => [
            'press' => 'Tlač',
            'tv' => 'Televízia',
            'radio' => 'Rádio',
            'internet' => 'Internetové spravodajstvo',
            'social_network' => 'Sociálne siete (Fb, ...)',
            'friends' => 'Priatelia, kolegovia',
            'family' => 'Rodina',
            'others' => 'Iné'
        ],
        'gender' => [
            'male' => 'Muž',
            'female' => 'Žena',
            'others' => 'Iné'
        ],
        'education' => [
            'one' => 'Základné, vyučený/á',
            'two' => 'Stredné',
            'three' => 'Vysoká škola'
        ],
        'age' => [
            '_18' => 'Menej ako 18',
            '18_29' => '18-29',
            '30_39' => '30-39',
            '40_49' => '40-49',
            '50_59' => '50-59',
            '60_69' => '60-69',
            '70_' => '70 a viac'
        ],
        'occupation' => [
            'student' => 'Študent',
            'employee' => 'Zamestnanec',
            'enterpreneur' => 'Podnikateľ, živnostník',
            'not_employed' => 'Nezamestnaný',
            'other' => 'Iné (rodič. dovolenka, atď.)'
        ],
        'region' => [
            'not_selected' => 'Vyberte:',
            'sk_bc' => 'Banskobystrický',
            'sk_bl' => 'Bratislavský',
            'sk_ki' => 'Košický',
            'sk_ni' => 'Nitrianský',
            'sk_pv' => 'Prešovský',
            'sk_ta' => 'Trnavský',
            'sk_tc' => 'Trenčianský',
            'sk_zi' => 'Žilinský'
        ],
        'place' => [
            '_3000' => 'Menej ako 3000',
            '3000-10000' => '3 000 - 9 999',
            '10000_50000' => '10 000 - 50 000',
            '50000_100000' => '50 000 - 100 000',
            '100000' => '100 000'
        ]
    ],
    'types' => [
        'attend'=> 'radio_horizontal',
        'candidates'=> 'radio',
        'candidates_more'=> 'dropdown3',
        'candidates_never'=> 'dropdown',
        'previously'=> 'radio_horizontal',
        'previously_impact'=> 'slider',
        'future_impact'=> 'slider',
        'looking_for_info'=> 'slider',
        'info_from'=> 'checkbox_horizontal',
        'gender'=> 'radio_horizontal',
        'occupation'=> 'radio_horizontal',
        'education'=> 'radio_horizontal',
        'age'=> 'radio_horizontal',
        'region'=> 'dropdown',
        'place' => 'radio_horizontal'
    ],
    'text' => [
        'title' => 'Dotazník | volebná kalkulačka',
        'header' => 'Výskum pre MU a UHK',
        'teaser' => 'Dovoľte, aby sme Vás najprv pozvali k <b>anonymnému výskumu</b> realizovanom v spolupráci <b>autorov Volebnej kalkulačky</b> a katedier politológie <b>Masarykovej univerzity v Brne</b> a <b>Univerzity Hradec Králové</b>. Dotazník Vám zaberie zhruba <b>2 minúty</b>.',
        'jump_1' => 'Účasť na výskume nie je povinná, môžete ho',
        'jump_2' => 'preskočiť rovno na Volebnú kalkulačku',
        'email' => 'Ak si želáte byť informovaný/á o výsledkoch výskumu a o ďalších novinkách o volebnej kalkulačke, nechajte nám na seba kontakt:',
        'spam' => 'Ani my nemáme radi spam. Vaše údaje nikomu nedáme.',
        'continue' => 'Ďakujeme za spoluprácu na výskume. Pokračovať na Volebnú kalkulačku.'
    ]
];
?>
