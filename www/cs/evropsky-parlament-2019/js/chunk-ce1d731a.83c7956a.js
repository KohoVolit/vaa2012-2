(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-ce1d731a","chunk-3cfbc0f6","chunk-37fc7c54"],{"0418":function(e,o,n){"use strict";n.r(o);var a=n("6e5f"),t=n("ad21");for(var i in t)"default"!==i&&function(e){n.d(o,e,function(){return t[e]})}(i);var r=n("2877"),s=Object(r["a"])(t["default"],a["a"],a["b"],!1,null,null,null);o["default"]=s.exports},"2e93":function(e,o){},"445a":function(e,o,n){"use strict";var a=function(){var e=this,o=e.$createElement;e._self._c;return e._m(0)},t=[function(){var e=this,o=e.$createElement,n=e._self._c||o;return n("footer",{staticClass:"text-muted mt-4 md-4"},[n("div",{staticClass:"container"},[n("div",{staticClass:"row justify-center"},[n("div",{staticClass:"col-md-3"}),n("div",{staticClass:"col-md-6 text-center"},[n("a",{attrs:{href:"http://kohovolit.eu",title:"KohoVolit.eu",id:"footer-kohovolit-logo",target:"_blank"}},[n("img",{attrs:{src:"https://volebnikalkulacka.cz/image/logo.png",alt:"logo kohovolit.eu"}})]),n("p",{staticClass:"lead black"},[e._v("Volební kalkulačky pro Vás už od roku 2006 vytváří sdružení "),n("a",{attrs:{href:"http://kohovolit.eu",target:"_blank"}},[e._v("KohoVolit.eu")])]),n("hr"),n("p",{staticClass:"black"},[e._v("Creative Commons BY 4.0 | "),n("a",{attrs:{href:"http://kohovolit.eu",id:"footer-kohovolit-licence"}},[e._v("KohoVolit.eu")]),e._v(" 2019")])])])])])}];n.d(o,"a",function(){return a}),n.d(o,"b",function(){return t})},"54c5":function(e,o,n){"use strict";n.r(o);var a=function(){var e=this,o=e.$createElement,n=e._self._c||o;return n("div",[n("component-header"),n("div",{staticClass:"selection"},[n("h4",{staticClass:"p-2"},[e._v("\n            "+e._s(e.$t("select_extra_important_questions"))+"\n        ")]),n("button",{staticClass:"btn btn-outline-secondary btn-lg btn-block mb-3",on:{click:function(o){return e.goResults()}}},[e.spinning?n("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):n("span",[e._v(">")]),e._v("\n                "+e._s(e.$t("skip"))+"\n            "),e.spinning?n("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):n("span",[e._v(">")])],1),e._l(e.questions,function(o){return e.answered[o.id]?n("div",{staticClass:"list-group"},[n("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[n("label",{staticClass:"custom-control custom-checkbox"},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.checked[o.id],expression:"checked[question.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(e.checked[o.id])?e._i(e.checked[o.id],null)>-1:e.checked[o.id]},on:{change:[function(n){var a=e.checked[o.id],t=n.target,i=!!t.checked;if(Array.isArray(a)){var r=null,s=e._i(a,r);t.checked?s<0&&e.$set(e.checked,o.id,a.concat([r])):s>-1&&e.$set(e.checked,o.id,a.slice(0,s).concat(a.slice(s+1)))}else e.$set(e.checked,o.id,i)},function(o){return e.storeWeights()}]}}),n("span",{staticClass:"custom-control-indicator"}),n("div",{staticClass:"custom-control-description"},[n("div",{staticClass:"d-flex w-100 justify-content-between"},[n("h5",{staticClass:"mb-1"},[e._v(e._s(o.name)+" ("+e._s(e.answers[o.id])+")")])]),n("small",{staticClass:"mb-1 text-muted"},[e._v("\n                            "+e._s(o.question)+"\n                        ")])])])])]):e._e()}),n("button",{staticClass:"btn btn-success btn-lg btn-block mt-3",on:{click:function(o){return e.goResults()}}},[e.spinning?n("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):n("span",[e._v(">")]),e._v("\n                "+e._s(e.$t("result"))+"\n            "),e.spinning?n("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):n("span",[e._v(">")])],1)],2),n("component-footer")],1)},t=[],i=n("7842"),r=n("0418"),s=n("fd2d"),d=n("ecee"),l=n("c074"),c=n("ad3d");d["c"].add(l["b"]);var m={data:function(){for(var e={},o=0;o<i.length;o++)e[i[o].id]=!1;var n={},a={},t=JSON.parse(this.$route.query.q);for(var r in i){var s=i[r];Math.abs(t[parseInt(s.id)])>0?(n[s.id]=!0,this.$store.state.answers[parseInt(s.id)]=t[parseInt(s.id)]):n[s.id]=!1,-1===t[parseInt(s.id)]&&(a[s.id]=this.$t("no")),1===t[parseInt(s.id)]&&(a[s.id]=this.$t("yes"))}return{questions:i,answered:n,answers:a,checked:e,spinning:!1}},methods:{addChecked:function(){this.checked.push({question_id:!1})},storeWeights:function(){this.$store.commit("storeWeights",this.checked)},goResults:function(){this.spinning=!0,this.$router.push({path:"/results",query:{q:JSON.stringify(this.$store.state.answers),w:JSON.stringify(this.$store.state.weights)}})}},components:{"component-header":r["default"],"component-footer":s["default"],"font-awesome-icon":c["a"]}},p=m,v=(n("c985"),n("2877")),u=Object(v["a"])(p,a,t,!1,null,"86268d50",null);o["default"]=u.exports},"6e5f":function(e,o,n){"use strict";var a=function(){var e=this,o=e.$createElement,n=e._self._c||o;return n("nav",{staticClass:"navbar navbar-expand-lg navbar-dark bg-primary"},[n("a",{staticClass:"navbar-brand",attrs:{href:"#"}},[e._v(e._s(e.$t("header_name")))])])},t=[];n.d(o,"a",function(){return a}),n.d(o,"b",function(){return t})},7842:function(e){e.exports=[{id:"18",name:"Euro",question:"V České republice by se mělo zavést Euro co nejdříve.",description:"Eurem se platí v 19 zemích EU a několika dalších mimo EU. Ze sousedních zemí se Euro používá v Německu, Rakousku, na Slovensku, ale v Polsku ne. Členské státy se vstupem do EU zavázaly k přijetí Eura. Podle zastánců by přijetí Eura bylo ekonomicky výhodné, podle odpůrců tomu tak není.",order:1},{id:"1",name:"Trest za porušování pravidel o schodku rozpočtu",question:"Členské státy EU by měly být výrazně postiženy, pokud poruší pravidla EU o rozpočtových schodcích.",description:"Státy EU by měly mj. dodržovat pravidla, že schodek rozpočtu nebude větší než 3 % HDP a zadlužení větší než 60 % HDP. Např. ČR tato pravidla dodržuje, ale některé země EU nikoliv (např. Francie, Itálie nebo Maďarsko).",order:2},{id:"2",name:"Geneticky upravené plodiny",question:"Mělo by být povoleno pěstovat geneticky upravené plodiny v celé EU.",description:"Zastánci pěstování geneticky upravených plodin argumentují, že tyto plodiny zvyšují výnos a jsou odolnější vůči škůdcům, není nutné je tolik chemicky ošetřovat. Odpůrci se obávají zdravotních rizik, dopadu na životní prostředí a závislosti na producentech takových plodin.",order:3},{id:"3",name:"Emise CO2",question:"EU by měla prosazovat výrazné snížení produkce CO2.",description:"V EU jsou zavedeny emisní povolenky pro energetické firmy, pomocí nichž se limitují emise skleníkového plynu CO2 (oxidu uhličitého), což má zmírnit klimatické problémy. Někteří je kritizují jako nedostatečné, kritici naopak upozorňují, že takové regulace vedou ke zvýšení cen energií.",order:4},{id:"4",name:"Nižší finanční pomoc regionům",question:"Měla by se snížit finanční pomoc ekonomicky slabším regionům EU.",description:"Zhruba 1/3 rozpočtu EU jde na regionální politiku. Hlavním cílem je podpora ekonomicky slabších regionů v EU, mezi něž se řadí celá ČR mimo Prahu.",order:5},{id:"5",name:"Daň z finančních transakcí",question:"Měla by být zavedena daň z finančních transakcí.",description:"Existuje návrh na zdanění některých finančních transakcí jako je prodej akcií, dluhopisů nebo finančních derivátů. Navrhovaná sazba je mezi 0.01 % a 0.1 %.",order:6},{id:"6",name:"Evropské referendum",question:"Měla by být možnost celoevropského referenda.",description:"Český občan může vyvolat referendum na místní a krajské úrovni, nikoli na celostátní nebo celoevropské. Podle zastánců by zavedení evropského referenda zvýšilo možnost občanů rozhodovat, podle odpůrců by bylo nákladné a mohlo by vést k přijímání populistických opatření.",order:7},{id:"7",name:"Trest za porušování svobody tisku",question:"EU by měla omezit finanční dotace pro členskou zemi za porušování svobody tisku (médií).",description:"EU může potrestat členskou zemi v případě, že nedodržuje základní hodnoty EU, mezi které patří svoboda médií. Jde o relativně složitý proces, Evropský parlament v roce 2018 spustil tento proces u Maďarska.",order:8},{id:"8",name:"Evropská armáda",question:"EU by měla mít vlastní armádu.",description:"V současné době EU nemá, krom výjimek jako bitevní skupiny, vlastní armádu. Podle zastánců by existence společné armády zvýšilo postavení EU na mezinárodní scéně a přispělo k řešení konfliktů. Podle kritiků by obrana měla zůstat pouze v rukou členských států.",order:9},{id:"9",name:"Rozvojová pomoc EU",question:"EU by měla zvýšit prostředky na zahraniční pomoc.",description:"EU je největším světovým poskytovatelem rozvojové pomoci. Podle zastánců rozvojová pomoc pomáhá v cílových zemích a zabraňuje tak mj. populační explozi a snižuje emigraci do bohatších zemí, např. zemí EU. Podle odpůrců podstatná část je rozkradena vládními vrstvami a zločineckými strukturami a nedostane se tak k těm, kterým je určena.",order:10},{id:"10",name:"Rozmístění žadatelů o azyl",question:"Žadatelé o azyl by měli být rozmístěni proporcionálně po celé EU.",description:"V reakci na zvýšený počet žadatelů o azyl padl návrh, aby tito lidé byli rozmístěni po celé EU. Cílem bylo pomoci hraničním zemím EU jako Řecko nebo Itálie, kde byl počet žadatelů o azyl nejvyšší.",order:11},{id:"11",name:"Snížení sankcí proti Rusku",question:"EU by měla snížit své sankce proti Rusku.",description:"EU zavedla sankce proti Rusku v roce 2014 poté, co Rusko připojilo Krym do své federace. Jedná se např. o ekonomické sankce nebo sankce namířené proti konkrétním lidem ruského režimu.",order:12},{id:"12",name:"Odmítnutí všech žadatelů o azyl",question:"Všichni žadatelé o azyl, kteří se snaží překonat Středozemní moře, by měli být vrácení zpět.",description:"Za posledních 10 let požádalo o azyl v EU zhruba 5 milionů lidí, nejvíce v roce 2015. Nejvíce žadatelů o azyl je ze zemí Blízkého východu (Sýrie, Afghánistán, Irák), Evropy (Kosovo, Albánie) a Afriky (Eritrea, Nigérie). Z Asie a Afriky často přicestují do EU tak, že přeplavou Středozemní moře na lodích či člunech do Řecka, Itálie nebo Španělska.",order:13},{id:"13",name:"Sňatky osob stejného pohlaví",question:"EU by měla podporovat členské státy v legalizaci manželství gayů a leseb.",description:"Evropský soud pro lidská práva v roce 2010 rozhodl, že registrované partnerství není lidským právem a smluvní státy nemají povinnost jej umožňovat uzavřít a uznávat. Zastánci požadují stejná práva pro homosexuální dvojice v celé EU. Odpůrci odmítají uznávat registrované partnerství např. z náboženských důvodů.",order:14},{id:"14",name:"Minimální příjem",question:"EU by měla podporovat zavedení minimálního příjmu, který by mohl být různý pro různé země.",description:"Minimální mzda je v EU v průměru zhruba 40 % průměrné mzdy v dané zemi (nejméně 32 % v ČR, nejvíce 50 % ve Slovinsku a Řecku). V některých zemích (např. Švédsko) je minimální mzda stanovena spíše sektorově a ne celostátně.",order:15},{id:"15",name:"Těžší sociální podpora",question:"Mělo by být těžší pro občany jiných států EU získat sociální podporu.",description:"Občan jedné země EU pracující nebo žijící v jiné zemi EU má nárok na stejnou podporu jako občan země, v které pracuje nebo žije.",order:16},{id:"16",name:"Celoevropské volby",question:"Občané EU by měli mít možnost ve volbách do Evropského parlamentu volit i celoevropské listiny nadnárodních politických stran.",description:"Zatímco lidé v evropských volbách volí lokální strany, tyto se potom v Evropském parlamentu sdružují do nadnárodních politických skupin a poslanci většinou hlasují shodně s danou skupinou.\n",order:17},{id:"19",name:"Legislativní iniciativa",question:"Evropský parlament by měl mít pravomoc iniciovat zákon bez nutnosti oslovení Evropské komise.",description:"Evropský parlament, na rozdíl od národního parlamentu, nemůže předkládat sám nové zákony, pouze je schvaluje. Dle zastánců posilování pravomocí Evropský parlament přispívá k posilování evropské demokracie a měl by mít větší pravomoci. Kritici se ale obávají, že národní parlamenty ztratí část svých pravomocí.",order:18},{id:"20",name:"Zákaz dotací jaderné energetiky",question:"Státy EU by měly mít zakázáno dotovat jadernou energetiku.",description:"Zastánci jaderné energetiky poukazují na vysokou efektivitu při spalování paliva a na velice nízké emise CO2 oproti jiné, např. uhelné či plynové energii. Kritici upozorňují, že jaderná energie není finančně konkurenceschopná a představuje bezpečnostní riziko.",order:19},{id:"21",name:"Dovozní cla",question:"Dovozní cla na zemědělské produkty z rozvojových zemí by měla být snížena.",description:"Zastánci dovozních cel argumentují ochranou a podporou ekonomik členských států vůči ostatním, aby nedošlo k zaplavení evropského trhu levnými zemědělskými produkty z rozvojových zemí. Kritici upozorňují, že cla limitují rozvoj zemí, jejichž důležitým obchodním artiklem jsou právě zemědělské produkty, a také, že zdražují potraviny pro zákazníky v EU.",order:20},{id:"22",name:"Přímá volba předsedy Evropské komise",question:"Předseda Evropské komise by měl být volen v přímých volbách občany EU",description:"Přímá volba předsedy komise by podle zastánců měla zvýšit úroveň demokracie v EU a zvýšit zájem občanů o EU. Její kritici argumentují, že přímá volba nepřináší žádné řešení současných problémů, ani nezvyšuje důvěryhodnost EU.",order:21},{id:"23",name:"Společná zahraniční a bezpečnostní politika",question:"Státy EU by měly více spolupracovat v rámci Společné zahraniční a bezpečnostní politiky.",description:"Společná zahraniční a bezpečnostní politika Evropské unie (SZBP) byla založena Maastrichtskou smlouvou v roce 1992 jako tzv. druhý pilíř EU. Má za úkol koordinovat zahraniční a bezpečnostní politiky členských zemí Evropské unie.",order:22},{id:"24",name:"Zastavení rozšiřování EU",question:"EU by měla zastavit přijímání dalších zemí.",description:"V současné době jsou oficiálními kandidáty na členství Černá Hora, Island, Severní Makedonie, Srbsko a Turecko. ",order:23},{id:"25",name:"Minimální sazba korporátní daně",question:"Měla by být zavedena jednotná minimální sazba pro daně z příjmů u firem v celé EU.",description:"Daně z příjmů je v EU mezi 10 % a 35 %. Zastánci minimální sazby kritizují existenci daňových rájů uvnitř EU (např. Kypr), kde mohou firmy platit daně namísto v zemi, kde zisk reálně vytvořili. Odpůrci upozorňují na zdravou soupeřivost mezi jednotlivými zeměmi.\n",order:24},{id:"26",name:"Azylové zákony",question:"Podmínky pro udělení azylu by měly být stejné ve všech členských státech EU",description:'Podle zastánců by sjednocení podmínek pro udělení azylu zamezilo "přelévání" lidí, hledajících azyl, z jedné země EU do jiné. Odpůrci naopak argumentují, že situace se liší v jednotlivých státech, proto by regulace udělování azylu měla zůstat na národní úrovni.',order:25},{id:"27",name:"Evropské daně",question:"EU by měla vybírat evropské daně, které by nahradily existující příspěvky členských států.",description:"V současné době většina příjmů EU pochází z příspěvků jednotlivých zemí na základě výše jejich hrubého národního produktu. Zavedením evropské daně by se zvýšila nezávislost rozpočtu EU na členských zemích.",order:26},{id:"28",name:"Federalizace EU",question:"EU by se měla stát federací.",description:"Státní moc je ve federaci rozložena mezi federální orgány a orgány členských zemí, což je zajištěno ústavou. Federací jsou např. USA, Rusko, Brazílie nebo Indie. Naopak ale arabské nebo latinsko-americké země jsou samostatné, i přesto že se tam mluví jedním jazykem.\n",order:27},{id:"29",name:"Komise dle voleb",question:"Složení Evropské komise by mělo odpovídat výsledkům eurovoleb.",description:'Do Evropské komise ("evropské vlády") její komisaře nyní nominují vlády členských zemí EU. Komise tedy neodpovídá výsledkům eurovoleb, např. je v ní jeden nutně jeden komisař z každé země (z největšího Německa i z nejmenší Malty).\n',order:28},{id:"30",name:"Vyšší podpora programu Erasmus",question:"Na program Erasmus by mělo jít více peněz než dnes.",description:"Program Erasmus podporuje mj. studenty vysokých a středních škol, aby část studia proběhla v jiné zemi EU. Náklady Erasmu z rozpočtu EU jsou nyní zhruba 2 miliardy eur ročně. Evropský parlament např. nyní navrhl tento objem zvýšit zhruba trojnásobně, Evropská komise zhruba dvojnásobně.",order:29},{id:"31",name:"Stejné sazby DPH",question:"Sazby DPH by měly být sjednocené v celé EU.",description:"Výše daně z přidané hodnoty je v pravomoci členských zemí a je různá v celé EU, základní sazba od 15 do 27 %, např. u potravin potom mezi 0 a 27 %. Tyto rozdíly některé obchodníky zvýhodňují a jiné znevýhodňují.",order:30},{id:"32",name:"Tuzemský rum a pomazánkové máslo",question:"EU by měla přestat určovat podrobné normy pro potraviny.",description:"V EU existují normy, které mj. vyhrazují prodejní označení 'máslo' pro produkty obsahující alespoň 80 % mléčného tuku, odtud povinnost stáhnout název 'pomazánkové máslo', které obsahuje tuku výrazně méně. Podobně 'rum' musí obsahovat alkohol z cukrové třtiny, čemuž tak není v případě 'tuzemského rumu'.\n",order:31},{id:"33",name:"Délka copyrightu",question:"Doba ochrany autorských děl by se měla v EU zkrátit.",description:"Autorská díla jako knihy nebo filmy jsou v EU chráněna po dobu 70 let od úmrtí autora, hudba po dobu 50 let. Obhájci argumentují tím, že bez takové ochrany by některá díla ani nevznikla. Kritici upozorňují, že takto dlouhá ochrana omezuje tvorbu odvozených děl a že tato ochrana původně fungovala jen jako ochrana autora před vydavatelem, nikoliv pro nekomerční využití.\n",order:32},{id:"34",name:"Omezení volného pohybu pracovníků",question:"Země EU by měly mít možnost omezit zaměstnávání občanů z jiných zemí EU.",description:"Volný pohyb zaměstnanců (možnost být zaměstnán v jakékoliv zemi EU) je jednou ze základních svobod v EU. Kritici argumentují např. zneužíváním sociálního systému cílové země. Obhájci ukazují, že země, kde lidé z jiných zemí pracují, na tom celkově ekonomicky vydělává.",order:33},{id:"35",name:"Nižší dotace pro zemědělství",question:"Dotování zemědělců z peněz EU by se mělo snížit.",description:"Více jak 1/3 rozpočtu EU jde na podporu zemědělství, z největší části na přímé dotace zemědělcům. Podle zastánců podpora zemědělství zvyšuje soběstačnost EU oproti dovozu potravin ze zemí mimo EU a zvyšuje životní úroveň na venkově. Podle odpůrců je příliš nákladná a zvyšuje ceny pro zákazníky.",order:34},{id:"36",name:"Zdanění letecké dopravy",question:"Letecká doprava by měla být zdaněna stejně jako jiné druhy dopravy.",description:"V současné době se neplatí daň z leteckého paliva ani DPH z prodeje mezinárodních letenek. Existuje např. návrh belgické vlády, aby se letecká doprava v EU zdanila s ohledem na její dopad na životní prostředí.",order:35},{id:"37",name:"Daň z příjmu v zemi původu",question:"Mezinárodní firmy by měly platit daně z příjmu v zemi, kde příjem skutečně vznikl.",description:'Některé velké mezinárodní firmy (mj. Apple, Facebook, Google, Amazon, Fiat) dnes platí daně z příjmu většinově dle sídla své pobočky v EU. To vedlo k vzniku "daňových rájů uvnitř EU" - např. Irsko, Lucembursko, Nizozemí nebo Kypr, kde některé firmy mají vyjednanou speciální velmi nízkou sazbu daně.',order:36},{id:"38",name:"Omezení dotací pro velké agrofirmy",question:"Dotace pro velké agrární firmy by měly být omezeny.",description:"Existuje např. návrh, aby zemědělské podniky mohly dostávat na přímých platbách v rámci zemědělské politiky max. 100 000 € ročně. To by dopadlo na velké zemědělské firmy, které jsou dnes podporovány více.",order:37},{id:"39",name:"Zákaz dvojí kvality potravin",question:"Dvojí kvalita potravin by měla být zakázána.",description:"Dnes je možné, aby potraviny ve stejném obalu měly jiné složení v různých zemích EU. To vedlo ke stížnostem převážně z východních zemí EU, že se tak prodávají horší potraviny než např. v Německu. Výrobci argumentovali tím, že spotřebitelé v různých zemích mají různé chutě. Nyní je v procesu schvalování návrh, který by tuto praxi omezil.",order:38},{id:"40",name:"GDPR - zrušení",question:"Nařízení o ochraně osobních dat GDPR by se mělo zrušit.",description:'Nařízení GDPR určuje pravidla, jak zacházet s osobními údaji. Zákazníci firem musejí např. dát jasný souhlas se zpracováním osobních dat, jejich data jim musejí být přístupné na vyžádání. Lidé mají právo na "zapomnění". Kritici namítají, že jde o další nadbytečnou regulaci přidávající firmám práci a že její efekt tak nevyváží náklady.',order:39},{id:"17",name:"Vystoupení z EU",question:"Česká republika by měla vystoupit z EU.",description:"Evropskou unii tvoří 28 zemí, mj. všechny sousední země. Mimo EU je v Evropě např. Ukrajina, Bělorusko, Švýcarsko nebo Norsko. Británie právě (ne)odchází. Podle zastánců je členství v EU ekonomicky výhodné, podle odpůrců tomu tak není.",order:40}]},"94d4":function(e,o,n){"use strict";n.r(o);var a=n("2e93"),t=n.n(a);for(var i in a)"default"!==i&&function(e){n.d(o,e,function(){return a[e]})}(i);o["default"]=t.a},a90a:function(e,o,n){},ad21:function(e,o,n){"use strict";n.r(o);var a=n("e504"),t=n.n(a);for(var i in a)"default"!==i&&function(e){n.d(o,e,function(){return a[e]})}(i);o["default"]=t.a},c985:function(e,o,n){"use strict";var a=n("a90a"),t=n.n(a);t.a},e504:function(e,o){},fd2d:function(e,o,n){"use strict";n.r(o);var a=n("445a"),t=n("94d4");for(var i in t)"default"!==i&&function(e){n.d(o,e,function(){return t[e]})}(i);var r=n("2877"),s=Object(r["a"])(t["default"],a["a"],a["b"],!1,null,null,null);o["default"]=s.exports}}]);
//# sourceMappingURL=chunk-ce1d731a.83c7956a.js.map