(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-08ab81d1","chunk-65009c35","chunk-43e78ef8","chunk-37fc7c54","chunk-0459a331"],{"0418":function(o,t,a){"use strict";a.r(t);var e=a("6e5f"),n=a("ad21");for(var s in n)"default"!==s&&function(o){a.d(t,o,function(){return n[o]})}(s);var i=a("2877"),r=Object(i["a"])(n["default"],e["a"],e["b"],!1,null,null,null);t["default"]=r.exports},"1a3f":function(o,t,a){"use strict";a.r(t);var e=function(){var o=this,t=o.$createElement,a=o._self._c||t;return a("div",[a("div",{staticClass:"page"},[a("component-header"),a("component-progress",{attrs:{progress:o.progress}}),a("b-carousel",{ref:"carousel",attrs:{id:"carousel",controls:"",indicators:"",interval:0,wrap:!1},on:{"sliding-start":o.onSlideStart},model:{value:o.slide,callback:function(t){o.slide=t},expression:"slide"}},o._l(o.questions,function(t,e){return a("div",{key:e},[a("b-carousel-slide",{staticClass:"carousel-item",attrs:{question:t}},[a("div",{staticClass:"row d-flex align-items-stretch item-inner item-inner-upper"},[a("div",{staticClass:"col-md-2 col-sm-1"}),a("div",{staticClass:"col-sm-10 col-md-8 align-self-center"},[a("div",{staticClass:"d-flex justify-content-center text-dark"},[a("h2",{staticClass:"h2 vaa-width"},[o._v(o._s(t.question))])]),a("div",{staticClass:"d-flex justify-content-center text-dark"},[a("p",{staticClass:"p-2 vaa-width vaa-description"},[o._v(o._s(t.description))])])])]),a("div",{staticClass:"row d-flex align-items-stretch item-inner item-inner-lower"},[a("div",{staticClass:"col-sm-1 col-md-2"}),a("div",{staticClass:"col-sm-10 col-md-8"},[a("div",{staticClass:"vaa-width",staticStyle:{margin:"auto"}},[a("div",{staticClass:"row p-2",attrs:{"data-toggle":"buttons"}},[a("div",{staticClass:"col-4"},[a("label",{staticClass:"btn btn-outline-primary btn-lg btn-block",class:o.checked(t.id,1),on:{click:function(a){return o.addAnswer(t.id,1)}}},[a("input",{staticClass:"vaa-btn",attrs:{type:"radio",name:o.radioName(e),id:o.radionId(t.id,1)}}),o._v(o._s(o.$t("YES"))+"\n                                        ")])]),a("div",{staticClass:"col-4"},[a("label",{staticClass:"btn btn-outline-primary btn-lg btn-block",class:o.checked(t.id,-1),on:{click:function(a){return o.addAnswer(t.id,-1)}}},[a("input",{staticClass:"vaa-btn",attrs:{type:"radio",name:o.radioName(e),id:o.radionId(t.id,-1),checked:"checked"}}),o._v(o._s(o.$t("NO"))+"\n                                        ")])]),a("div",{staticClass:"col-4"},[a("label",{staticClass:"btn btn-outline-secondary btn-lg btn-block",class:o.checked(t.id,0),on:{click:function(a){return o.addAnswer(t.id,0)}}},[a("input",{staticClass:"vaa-btn",attrs:{type:"radio",name:o.radioName(e),id:o.radionId(t.id,0)},on:{click:function(a){return o.addAnswer(t.id,0)}}}),a("small",[o._v(o._s(o.$t("dont_know")))])])])])])])])])],1)}),0),a("component-footer"),a("Analytics")],1)])},n=[],s=a("7842"),i=a("0418"),r=a("fd2d"),l=a("ad18"),c=a("f8b4"),d={data:function(){return{questions:s,progress:1,slide:0,sliding:null}},mounted:function(){this.$action("calc_started"),this.$getSetCookie(this.$settings["cookie"]),this.$route.query.s>0?this.slide=this.$route.query.s-1:this.slide=0},methods:{onSlideStart:function(o){this.progress=o/this.questions.length*100,this.$router.push({path:"/",query:{s:o+1}})},radioName:function(o){return"q-"+o},radionId:function(o,t){return"q-"+o+"-"+t},addAnswer:function(o,t){var a=this,e={key:o,value:t};this.$store.commit("addAnswer",e),setTimeout(function(){a.slide+1===a.questions.length?a.$router.push({path:"/selection",query:{q:JSON.stringify(a.$store.state.answers)}}):a.slide++},250)},checked:function(o,t){return this.$store.state.answers[o]===t?"active":""}},computed:{},components:{"component-header":i["default"],"component-footer":r["default"],"component-progress":l["default"],Analytics:c["default"]}},u=d,v=(a("b2a5"),a("2877")),p=Object(v["a"])(u,e,n,!1,null,null,null);t["default"]=p.exports},"2e93":function(o,t){},4029:function(o,t,a){},"54c0":function(o,t,a){},"54d2":function(o,t,a){"use strict";a.r(t);var e=a("5f0a"),n=a.n(e);for(var s in e)"default"!==s&&function(o){a.d(t,o,function(){return e[o]})}(s);t["default"]=n.a},5661:function(o,t,a){"use strict";var e=function(){var o=this,t=o.$createElement;o._self._c;return o._m(0)},n=[function(){var o=this,t=o.$createElement,a=o._self._c||t;return a("div",[a("iframe",{attrs:{src:"https://volebnikalkulacka.cz/session/",width:"0",height:"0",frameborder:"0"}}),a("noscript",[a("div",[a("img",{staticStyle:{position:"absolute",left:"-9999px"},attrs:{src:"https://mc.yandex.ru/watch/35615280",alt:""}})])]),a("noscript",[a("p",[a("img",{staticStyle:{border:"0"},attrs:{src:"//piwik.kohovolit.eu/piwik.php?idsite=1&rec=1",alt:""}})])])])}];a.d(t,"a",function(){return e}),a.d(t,"b",function(){return n})},"5f0a":function(o,t){(function(o,t,a,e,n,s,i){o["GoogleAnalyticsObject"]=n,o[n]=o[n]||function(){(o[n].q=o[n].q||[]).push(arguments)},o[n].l=1*new Date,s=t.createElement(a),i=t.getElementsByTagName(a)[0],s.async=1,s.src=e,i.parentNode.insertBefore(s,i)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-8592359-7","auto"),ga("send","pageview");var a=a||[];a.push(["trackPageView"]),a.push(["enableLinkTracking"]),function(){var o="//piwik.kohovolit.eu/";a.push(["setTrackerUrl",o+"piwik.php"]),a.push(["setSiteId","1"]);var t=document,e=t.createElement("script"),n=t.getElementsByTagName("script")[0];e.type="text/javascript",e.async=!0,e.defer=!0,e.src=o+"piwik.js",n.parentNode.insertBefore(e,n)}(),function(o,t,a){(t[a]=t[a]||[]).push(function(){try{t.yaCounter35615280=new Ya.Metrika({id:35615280,clickmap:!0,trackLinks:!0,accurateTrackBounce:!0,webvisor:!0})}catch(o){}});var e=o.getElementsByTagName("script")[0],n=o.createElement("script"),s=function(){e.parentNode.insertBefore(n,e)};n.type="text/javascript",n.async=!0,n.src="https://mc.yandex.ru/metrika/watch.js","[object Opera]"==t.opera?o.addEventListener("DOMContentLoaded",s,!1):s()}(document,window,"yandex_metrika_callbacks")},"61ed":function(o,t,a){"use strict";var e=a("54c0"),n=a.n(e);n.a},"6e5f":function(o,t,a){"use strict";var e=function(){var o=this,t=o.$createElement,a=o._self._c||t;return a("nav",{staticClass:"navbar navbar-expand-lg navbar-dark bg-primary"},[a("a",{staticClass:"navbar-brand",attrs:{href:"#"}},[o._v(o._s(o.$t("header_name")))])])},n=[];a.d(t,"a",function(){return e}),a.d(t,"b",function(){return n})},7842:function(o){o.exports=[{id:"1",name:"Dvojí kvalita potravin",question:"Hlasovali byste pro směrnici, která částečně zpřísňuje dvojí kvalitu potravin?",order:1,description:"Stejně označované potraviny mohou dnes mít jinou kvalitu v různých zemích EU. Nová směrnice zakazuje dvojí kvalitu,pokud k tomu ale nejsou dobré důvody. Zastánci této podoby směrnice argumentovali, že jde o velký posun, kritici říkali, že je to nedostatečné a dvojí kvalitu to nadále umožňuje."},{id:"22",name:"Ochrana hranic - nařízení o posílení kontrol na vnějších hranicích",question:"Souhlasíte se zavedením větších kontrol osob v databázích na vnějších hranicích EU?",order:2,description:"Návrh zavádí kontrolu cestovních dokladů v různých příslušných databázích (SLTD, SIS a další) občanů EU i státních příslušníků třetích zemí při vstupu do EU nebo při jejím opuštění."},{id:"3",name:"Potrestání Maďarska",question:"Hlasovali byste pro spuštění procedury proti Maďarsku kvůli porušování základních hodnot EU?",order:3,description:"Parlament hlasoval zda spustit disciplinární akci proti Maďarsku. Vinil maďarskou vládu z útoků na média, menšiny a vládu práva. Maďarská vláda tato obvinění odmítala. Pokud by souhlasily i členské státy, Maďarsko by mohlo v extrémním případě např. dočasně přijít o hlasovací práva."},{id:"4",name:"Zákaz plastových výrobků na jedno použití",question:"Podpořili byste zákaz některých plastových výrobků na jedno použití?",order:4,description:"Parlament hlasoval o návrhu Komise na zákaz plastových výrobků na jedno použití, jako jsou kelímky, jídelní krabice, tenké sáčky nebo brčka. Také zaváděl povinnosti pro výrobce, jejichž výrobky znečišťují pláže nebo přístavy, jako jsou rybářské potřeby nebo cigarety."},{id:"5",name:"Přísnější kontrola střelných zbraní",question:"Hlasovali byste pro zpřísnění držení střelných zbraní?",order:5,description:"Parlament hlasoval o návrhu směrnice, která zakazuje některé zbraně - např. různé typy poloautomatických zbraní. U některých, jako jsou poplašné pistole, vyžaduje registraci. "},{id:"6",name:"Reforma vlastnických práv",question:"Souhlasíte s reformou autorských práv, která omezuje sdílení obsahu chráněného autorskými právy na online platformách?",order:6,description:"Reforma autorských práv obsahuje také „článek 11“ a „článek 13“ (nově označený jako článek 15 a 17). Článek 13 říká, že každý nahraný obsah musí být zkontrolován, zda neporušuje autorská práva. Článek 11 má v úmyslu přinutit stránky s agregátory zpráv, jako jsou například Zprávy Google, aby zaplatily vydavatelům za použití úryvků z jejich článků."},{id:"7",name:"Emisní normy pro nové osobní automobily",question:"Souhlasíte s přísnějšími limity emisí u nových osobních automobilů?",order:7,description:"Návrh legislativy stanovil emisní limity pro všechny nové osobní a lehká užitková vozidla. Cílem je do roku 2030 snížit emise osobních automobilů o 37,5% (a dodávek o 31%)."},{id:"9",name:"Směrnice o rovnováze mezi pracovním a soukromým životem",question:"Podpořili byste směrnici o rovnováze mezi pracovním a soukromým životem, která mj. zvyšuje normy pro rodičovskou dovolenou?",order:9,description:"Směrnice o rovnováze mezi pracovním a soukromým životem zavádí minimálně 10 pracovních dnů otcovské dovolené, 4 měsíce rodičovské dovolené (z čehož 2 měsíce jsou nepřenosné a placené), 5 dní dovolenou pro pečovatele ročně pro pracovníky pečující o vážně nemocné nebo závislé příbuzné a zvyšuje práva požadovat flexibilní pracovní podmínky."},{id:"10",name:"Právní stát - platby z EU",question:"Měla by EU mít možnost pozastavit platby EU do určité země na základě nedostatků v oblasti právního státu?",order:10,description:"Pokud Komise EU zjistí, že „všeobecné nedostatky v oblasti právního státu“ v zemi EU ohrožují schopnost státu spravovat fondy EU, Komise by mohla navrhnout opatření od snížení předběžného financování až po pozastavení plateb z rozpočtu EU. Aby to platilo, Evropský parlament a ministři EU by museli s takovým rozhodnutím souhlasit."},{id:"11",name:"Bezvízový styk pro občany Kosova",question:"Souhlasíte s tím, že občanům Kosova by mělo být umožněno cestovat do EU bez víz?",order:11,description:"Občané Kosova jsou v tuto chvíli jediní z Balkánu, kteří potřebují víza pro vstup do EU. Evropská komise posoudila Kosovo jako připravené na bezvízový režim a doporučila Evropskému parlamentu a Radě EU, aby hlasovaly ve prospěch zrušení vízového režimu poté, co Kosovo splnilo všechny podmínky stanovené v plánu liberalizace vízového režimu."},{id:"12",name:"Společná zahraniční a bezpečnostní politika",question:"Myslíte si, že by EU měla více spolupracovat v oblastech zahraniční a bezpečnostní politiky?",order:12,description:"V usnesení o zahraniční a bezpečnostní politice se doporučovalo, že by členské státy EU měly upřednostňovat jednotná stanoviska EU. Bylo doporučeno, aby se změnil rozhodovací proces nahrazením požadavku jednomyslnosti v Radě EU na hlasování kvalifikovanou většinou (systém vážených hlasů) o záležitostech týkajících se zahraniční a bezpečnostní politiky."},{id:"13",name:"Obchod s USA",question:"Souhlasíte s tím, aby EU vedla jednání o dohodě o volném obchodu se současnou administrativou USA?",order:13,description:"Europarlament schvaloval zahájení jednání s USA o omezené dohodě o volném obchodu: dohoda měla být zaměřena pouze na tarify na průmyslové zboží, včetně automobilů, nezahrnovala zemědělství a závisela na zrušení současných amerických tarifů na hliník a ocel a na nevydávání nových tarifů. Vzhledem k tomu, že usnesení EP je nezávazné a členské státy schválily mandát k vyjednávání, mohou tato obchodní jednání mezi EU a USA pokračovat."},{id:"14",name:"Vyslaní zaměstnanci",question:'Hlasovali byste pro to, aby se pravidla pro zaměstnance vyslané do jiné země EU musely více řídit "cílovou" zemí?',order:14,description:'Návrh úprav směrnice pro vysílání pracovníků do zahraničí mj. omezoval dobu, kdy zaměstnanec má sociální pojištění nebo mzdu dle původní země na max. 1 rok s možností prodloužení o 6 měsíců. Poté již vyslaný zaměstnanec musí např. dostávat minimální mzdu dle "cílové" země a také tam platit sociální pojištění.'},{id:"15",name:"Program Práva a hodnoty",question:'Souhlasíte s dohodou Evropského parlamentu o zavedení programu "Práva a hodnoty" na podporu a posílení některých evropských hodnot?',order:15,description:"Záměrem návrhu bylo posílit podporu dodržování lidské důstojnosti, svobody, demokracie, rovnosti, právního státu a dodržování lidských práv, včetně práv příslušníků menšin."},{id:"16",name:"Fond pro azyl, migraci a integraci",question:"Souhlasíte, že stávající Fond pro azyl, migraci a integraci by měl pokračovat v příštím víceletém finančním období?",order:16,description:"Fond Evropské komise pro azyl, migraci a integraci je program financování, který podporuje účinné řízení migračních toků a provádění, posilování a rozvoj společného přístupu k azylu a přistěhovalectví v Evropské unii. Většina prostředků je poskytována členským státům EU na činnosti, které se zabývaly dříve dohodnutými tématy. Část finančních prostředků je také např. vyhrazena na pomoc při mimořádných událostech."},{id:"17",name:"Big Data",question:'Hlasovali byste pro usnesení, že EU se má aktivně starat o pravidla ohledně vytváření a používání "velkých dat" (Big Data).',order:17,description:"Zpráva “o dopadech dat velkého objemu na základní práva: soukromí, ochrana údajů, zákaz diskriminace, bezpečnost a prosazování práva” zdůrazňuje, že EU má mít proaktivní úlohu při “zkrocení” velkých dat (Big Data) a technologických gigantů, kteří je shromažďují (jako je Facebook, Google)."},{id:"18",name:"Humanitární víza",question:"Souhlasíte, že by se měla zavést pravidla udělování humanitárních víz na úrovni EU?",order:18,description:"V právu EU aktuálně neexistuje žádné ustanovení o tom, jak mohou uprchlíci skutečně dorazit do zemí EU a požádat o azyl."},{id:"19",name:"Strategie rozvoje EU-Afrika",question:"Hlasovali byste pro usnesení, že EU má více rozvíjet svoji Strategii rozvoje EU-Afrika?",order:19,description:"Posílení strategie rozvoje mezi EU a Afrikou se zaměřuje na oblasti jako je hospodářský rozvoj, řádná správa věcí veřejných, bezpečnost, migrace, mobilita, životní prostředí a lidský rozvoj."},{id:"20",name:"Vztahy EU - Čína",question:"Hlasovali byste pro usnesení, které cílí na rovnocenné podmínky pro evropský průmysl vůči Číně a ochranu pracovních míst v EU?",order:20,description:"Velká výrobní kapacita Číny a následný vývoz za velmi nízké ceny mohou mít negativní dopad na trh v EU. Čína musí splnit pět kritérií od EU, aby získala status tržního hospodářství, poté by čínský vývoz nebyl průběžně kontrolován v rámci antidumpingových a antisubvenčních šetření."},{id:"21",name:"Řidiči kamionů",question:"Hlasovali byste pro to, aby kamiónová doprava měla speciální pravidla zaměstnávání v jiných zemích EU než jiná zaměstnání?",order:21,description:"Bylo navrženo, aby se obecná pravidla o vysílání pracovníků do zahraničí netýkala kamionové dopravy. Mj. by tedy řidiči nemuseli dostávat plat v minimální výši dle země, kde řídí. Omezená bude možnost nocování v kabině."},{id:"2",name:"Usnesení - Babiš, Agrofert",question:"Hlasovali byste pro usnesení o střetu zájmu A. Babiše?",order:22,description:"Parlament hlasoval o usnesení, které kritizuje střet zájmů A. Babiše kvůli své vazbě na Agrofert. Usnesení mj. vyzývá Komisi, aby zastavila veškeré dotace pro Agrofert, žádá o zpětné prošetření všech dotací od doby, kdy se stal ministrem v roce 2014."}]},"94d4":function(o,t,a){"use strict";a.r(t);var e=a("2e93"),n=a.n(e);for(var s in e)"default"!==s&&function(o){a.d(t,o,function(){return e[o]})}(s);t["default"]=n.a},ad18:function(o,t,a){"use strict";a.r(t);var e=function(){var o=this,t=o.$createElement,a=o._self._c||t;return a("div",[a("div",{staticClass:"progress"},[a("div",{staticClass:"progress-bar bg-danger",style:o.progressStyle,attrs:{role:"progressbar","aria-valuenow":o.progress,"aria-valuemin":"0","aria-valuemax":"100"}})])])},n=[],s={props:["progress"],computed:{progressStyle:function(){return{width:this.progress+"%"}}}},i=s,r=(a("61ed"),a("2877")),l=Object(r["a"])(i,e,n,!1,null,"7b65995d",null);t["default"]=l.exports},ad21:function(o,t,a){"use strict";a.r(t);var e=a("e504"),n=a.n(e);for(var s in e)"default"!==s&&function(o){a.d(t,o,function(){return e[o]})}(s);t["default"]=n.a},b2a5:function(o,t,a){"use strict";var e=a("4029"),n=a.n(e);n.a},beca:function(o,t,a){"use strict";var e=function(){var o=this,t=o.$createElement;o._self._c;return o._m(0)},n=[function(){var o=this,t=o.$createElement,e=o._self._c||t;return e("footer",{staticClass:"text-muted mt-4 md-4"},[e("div",{staticClass:"container"},[e("div",{staticClass:"row justify-center"},[e("div",{staticClass:"col-md-3"}),e("div",{staticClass:"col-md-6 text-center"},[e("a",{attrs:{href:"http://kohovolit.eu",title:"KohoVolit.eu",id:"footer-kohovolit-logo",target:"_blank"}},[e("img",{attrs:{src:"https://volebnikalkulacka.cz/image/logo.png",alt:"logo kohovolit.eu"}})]),e("p",{staticClass:"lead black"},[o._v("Volební kalkulačky pro Vás už od roku 2006 vytváří sdružení "),e("a",{attrs:{href:"http://kohovolit.eu",target:"_blank"}},[o._v("KohoVolit.eu")])]),e("a",{attrs:{href:"https://europeum.org",target:"_blank",alt:"Europeum"}},[e("img",{attrs:{src:a("d8bb")}})]),e("p",{staticClass:"lead black"},[o._v("\n                        Tato kalkulačka vznikla ve spolupráci s organizací "),e("a",{attrs:{href:"https://europeum.org",target:"_blank"}},[o._v("Europeum")]),o._v(".\n                    ")]),e("hr"),e("p",{staticClass:"black"},[o._v("Creative Commons BY 4.0 | "),e("a",{attrs:{href:"http://kohovolit.eu",id:"footer-kohovolit-licence"}},[o._v("KohoVolit.eu")]),o._v(" 2019")])])])])])}];a.d(t,"a",function(){return e}),a.d(t,"b",function(){return n})},d8bb:function(o,t,a){o.exports=a.p+"img/europeum.81787b66.png"},e504:function(o,t){},f8b4:function(o,t,a){"use strict";a.r(t);var e=a("5661"),n=a("54d2");for(var s in n)"default"!==s&&function(o){a.d(t,o,function(){return n[o]})}(s);var i=a("2877"),r=Object(i["a"])(n["default"],e["a"],e["b"],!1,null,null,null);t["default"]=r.exports},fd2d:function(o,t,a){"use strict";a.r(t);var e=a("beca"),n=a("94d4");for(var s in n)"default"!==s&&function(o){a.d(t,o,function(){return n[o]})}(s);var i=a("2877"),r=Object(i["a"])(n["default"],e["a"],e["b"],!1,null,null,null);t["default"]=r.exports}}]);
//# sourceMappingURL=chunk-08ab81d1.fbaf6558.js.map