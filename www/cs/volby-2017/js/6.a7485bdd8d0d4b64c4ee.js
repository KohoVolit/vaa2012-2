webpackJsonp([6,9,12,16,17],{112:function(t,e,o){var n=o(113);"string"==typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);o(30)("6ecb9f82",n,!0)},113:function(t,e,o){e=t.exports=o(29)(void 0),e.push([t.i,".q-list+.q-list[data-v-28ab7ef6]{margin-top:0}.selection[data-v-28ab7ef6]{max-width:992px;margin-left:auto;margin-right:auto;min-height:calc(100vh - 56px)}.next-button[data-v-28ab7ef6]{margin:20px}.upper-text[data-v-28ab7ef6]{padding:20px}",""])},114:function(t,e,o){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=o(59),s=o.n(n),i=o(55),a=o.n(i),r=o(31),l=o.n(r),d=o(32),c=o.n(d),u=o(1);e.default={data:function(){for(var t={},e=0;e<a.a.length;e++)t[a.a[e].id]=!1;var o={},n={};for(var s in a.a){var i=a.a[s];Math.abs(this.$store.state.answers[parseInt(i.id)])>0?o[i.id]=!0:o[i.id]=!1,-1===this.$store.state.answers[parseInt(i.id)]&&(n[i.id]="Ne"),1===this.$store.state.answers[parseInt(i.id)]&&(n[i.id]="Ano")}return{questions:a.a,answered:o,answers:n,checked:t,ok:!0}},methods:{addChecked:function(){this.checked.push({question_id:!1})},storeWeights:function(){this.$store.commit("storeWeights",this.checked)},goResults:function(){this.$router.push({path:"/results",query:{q:s()(this.$store.state.answers),w:s()(this.$store.state.weights)}})}},mounted:function(){for(var t in this.checked)this.$store.state.weights[t]&&(this.checked[t]=!0)},components:{"component-header":l.a,"component-footer":c.a,QLayout:u.p,QList:u.q,QItem:u.k,QItemSide:u.n,QItemMain:u.l,QCheckbox:u.h,QItemTile:u.o,QBtn:u.c}}},115:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("q-layout",{ref:"layout",attrs:{view:"hHr lpr fFf"}},[o("component-header"),t._v(" "),o("div",{staticClass:"selection"},[o("h4",[t._v("\n            Vyberte otázky, které jsou pro vás extra důležité:\n        ")]),t._v(" "),o("q-btn",{staticClass:"full-width next-button",attrs:{big:"",outline:"",color:"tertiary"},on:{click:function(e){t.goResults()}}},[t._v("\n            > Přeskočit >\n        ")]),t._v(" "),t._l(t.questions,function(e){return t.answered[e.id]?o("q-list",{key:e.id,attrs:{link:""}},[o("q-item",{staticClass:"selection-row col-md-8",attrs:{question:e,tag:"label"}},[o("q-item-side",[o("q-checkbox",{on:{change:function(e){t.storeWeights()}},model:{value:t.checked[e.id],callback:function(o){var n=t.checked,s=e.id;Array.isArray(n)?n.splice(s,1,o):t.checked[e.id]=o},expression:"checked[question.id]"}})],1),t._v(" "),o("q-item-main",[o("q-item-tile",{attrs:{label:""}},[t._v("\n                         "+t._s(e.name)+" ("+t._s(t.answers[e.id])+")\n                     ")]),t._v(" "),o("q-item-tile",{attrs:{sublabel:""}},[t._v("\n                         "+t._s(e.question)+"\n                     ")])],1)],1)],1):t._e()}),t._v(" "),o("q-btn",{staticClass:"full-width next-button",attrs:{big:"",outline:"",color:"positive"},on:{click:function(e){t.goResults()}}},[t._v("\n            > Výsledek >\n        ")])],2),t._v(" "),o("component-footer")],1)},staticRenderFns:[]}},116:function(t,e,o){var n=o(117);"string"==typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);o(30)("62f7b038",n,!0)},117:function(t,e,o){e=t.exports=o(29)(void 0),e.push([t.i,".h2[data-v-12f2e99b]{font-size:2em;border-left:5px solid #027be3;padding:0 20px}@media (max-width:576px){.h2[data-v-12f2e99b]{font-size:1.5em;padding:0;border-left:0}}.wider[data-v-12f2e99b]{border:0;bottom:50px;margin:0}",""])},118:function(t,e,o){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=o(1);e.default={props:["question"],data:function(){return{value:0,answs:{0:!1,1:!1,"-1":!1}}},methods:{addAnswer:function(t){var e=this,o={key:this.question.id,value:t};this.$store.commit("addAnswer",o);for(var n=-1;n<=1;n++)this.answs[n.toString()]=!1;this.answs[t.toString()]=!0,setTimeout(function(){e.$emit("next")},250)}},components:{QList:n.q,QItem:n.k,QBtn:n.c}}},119:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"inner lr-padding"},[o("div",[o("h2",{staticClass:"h2"},[t._v(t._s(t.question.question))]),t._v(" "),o("p",[t._v(t._s(t.question.description))])]),t._v(" "),o("q-list",{staticClass:"row wider"},[o("q-item",{staticClass:"col-sm-3"}),t._v(" "),o("q-item",{staticClass:"col-md-2 col-xs-4"},[o("q-btn",{staticClass:"full-width",class:{"bg-positive":t.answs[1],"text-white":t.answs[1]},attrs:{color:"primary",big:"",outline:""},on:{click:function(e){t.addAnswer(1)}}},[t._v("ANO")])],1),t._v(" "),o("q-item",{staticClass:"col-md-2 col-xs-4"},[o("q-btn",{staticClass:"full-width",class:{"bg-positive":t.answs[-1],"text-white":t.answs[-1]},attrs:{color:"primary",big:"",outline:""},on:{click:function(e){t.addAnswer(-1)}}},[t._v("NE")])],1),t._v(" "),o("q-item",{staticClass:"col-md-2 col-xs-4"},[o("q-btn",{staticClass:"full-width smaller",class:{"bg-tertiary":t.answs[0],"text-white":t.answs[0]},attrs:{color:"tertiary",big:"",outline:""},on:{click:function(e){t.addAnswer(0)}}},[o("span",[t._v("nevím ")]),o("span",{staticClass:"gt-md"},[t._v(" / je mi to jedno")])])],1)],1)],1)},staticRenderFns:[]}},205:function(t,e,o){var n=o(206);"string"==typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);o(30)("bd1cca42",n,!0)},206:function(t,e,o){e=t.exports=o(29)(void 0),e.push([t.i,"body{font-size:15px}.smaller{font-size:.75em}.bg-positive,.bg-tertiary{border:1px solid}.lr-padding{padding-left:52px;padding-right:52px}.q-carousel-inner{height:calc(100vh - 56px)}.q-carousel-left-button,.q-carousel-right-button{max-height:calc(100vh - 64px)}.q-progress{height:8px}",""])},207:function(t,e,o){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=o(55),s=o.n(n),i=o(4),a=o.n(i),r=o(31),l=o.n(r),d=o(34),c=o.n(d),u=o(1),v=o(35);e.default={data:function(){return{questions:s.a,settings:a.a,progress:50}},methods:{moveNext:function(){this.$refs.carousel.next()}},components:{"component-header":l.a,"component-slide":v,"component-selection":c.a,QLayout:u.p,QCarousel:u.f,QToolbar:u.w,QProgress:u.t}}},208:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("q-layout",{ref:"layout",attrs:{view:"hHr lpr fFf"}},[o("q-toolbar",{attrs:{color:"primary"},slot:"header"},[o("component-header")],1),t._v(" "),o("q-progress",{attrs:{percentage:t.progress,color:"negative"}}),t._v(" "),o("q-carousel",{ref:"carousel",attrs:{arrows:""}},[t._l(t.questions,function(e){return o("div",{staticClass:"bg-light no-padding",slot:"slide"},[o("div",{staticClass:"centered"},[o("component-slide",{attrs:{question:e},on:{next:t.moveNext}})],1)])}),t._v(" "),o("component-selection",{on:{next:t.moveNext},slot:"slide"})],2),t._v(" "),o("div",[t._v("\n        XXX\n    ")])],1)},staticRenderFns:[]}},31:function(t,e,o){function n(t){o(65)}var s=o(3)(o(67),o(68),n,null,null);t.exports=s.exports},32:function(t,e,o){function n(t){o(61)}var s=o(3)(o(63),o(64),n,null,null);t.exports=s.exports},34:function(t,e,o){function n(t){o(112)}var s=o(3)(o(114),o(115),n,"data-v-28ab7ef6",null);t.exports=s.exports},35:function(t,e,o){function n(t){o(116)}var s=o(3)(o(118),o(119),n,"data-v-12f2e99b",null);t.exports=s.exports},50:function(t,e,o){function n(t){o(205)}var s=o(3)(o(207),o(208),n,null,null);t.exports=s.exports},53:function(t,e){var o=t.exports={version:"2.5.0"};"number"==typeof __e&&(__e=o)},55:function(t,e){t.exports=[{question:"Měla by se uzákonit možnost celostátního referenda vypisovaného na základě petice.",name:"Celostátní referendum",id:"1",order:1},{question:"ČR by měla usilovat o zavedení společné evropské měny (euro).",name:"Euro v ČR",id:"11",order:2},{question:"Projekt elektronické evidence tržeb (EET) by se měl zrušit.",name:"Zrušení EET",id:"34",order:3},{question:"Občané by měli mít možnost předložit návrh zákona pomocí petice.",name:"Návrh zákona - petice",id:"2",order:4},{question:"Měla by být zavedena možnost volit po internetu.",name:"Volby po internetu",id:"3",order:5},{question:"Měl by být zaveden tzv. klouzavý mandát - za poslance nastupuje po dobu jeho členství ve vládě dočasný náhradník.",name:"Klouzavý mandát",id:"6",order:6},{question:"ČR by měla zcela zastavit přijímání uprchlíků muslimského vyznání.",name:"Proti přijímání muslimů",id:"8",order:7},{question:"V ČR by měla být plošně zakázána stavba mešit.",name:"Zákaz mešit",id:"10",order:8},{question:"ČR by měla vystoupit z EU.",name:"Výstup z EU",id:"12",order:9},{question:"Státy EU by měly řešit otázky týkající se azylu a uprchlictví jednotně a koordinovaně.",name:"Azyl a migrace v EU koordinovaně",id:"15",order:10},{question:"ČR by měla usilovat o udržování obchodních vztahů i se zeměmi, které porušují lidská práva",name:"Obchodní styk, lidská práva",id:"21",order:11},{question:"Místo ČR je v jádru EU.",name:"ČR v jádru EU",id:"23",order:12},{question:"Minimální hrubá mzda by měla být nejméně 14 000 Kč měsíčně.",name:"Minimální mzda 14000Kč",id:"26",order:13},{question:'Daň z převodu ("nabytí") nemovitosti 4 % by se měla snížit.',name:"Snížení daně z nabytí nemovitosti",id:"30",order:14},{question:"Spotřební daň na alkohol by se měla zvýšit.",name:"Zvýšení daně na alkohol",id:"31",order:15},{question:"Povinnost posílat kontrolní hlášení k DPH by se měla zrušit.",name:"Zrušení kontrolních hlášení k DPH",id:"32",order:16},{question:"Zaměstnaní lidé v předdůchodovém věku by měli být daňově zvýhodněni.",name:"Daňové zvýhodnění pro starší lidi",id:"40",order:17},{question:"Měla by se zvýšit daňová progrese daně z příjmů u lidí (tj. vyšší sazba daně pro vyšší příjmy)",name:"Daňová progrese DPFO",id:"41",order:18},{question:"Ekologické zemědělství má být podporováno více než ostatní zemědělství.",name:"Podpora ekologického zemědělství",id:"45",order:19},{question:"Inkluzivní vzdělávání se má podporovat alespoň tak jako dnes.",name:"Inkluzivní vzdělávání",id:"50",order:20},{question:"Technické vzdělávání na středních a vysokých školách by mělo být státem podporováno na úkor jiných oborů.",name:"Podpora technického vzdělávání",id:"51",order:21},{question:"Mělo by se začít platit školné na veřejných vysokých školách.",name:"Školné na VŠ",id:"53",order:22},{question:"Pěstovat marihuanu pro vlastní potřebu by mělo být legální.",name:"Pěstování konopí legální",id:"60",order:23},{question:"Homosexuální páry by měly mít možnost adoptovat děti.",name:"Adopce homosexuály",id:"63",order:24},{question:"V cirkusech má být zakázáno účinkování volně žijících druhů zvířat (např. lvů, velbloudů, slonů).",name:"Zákaz divokých zvířat v cirkusech",id:"95",order:25},{question:"Klecový velkochov zvířat (např. slepic) by měl být zakázán.",name:"Zákaz klecového velkochovu",id:"98",order:26},{question:"Zákaz jízdy kamionů by měl být oproti současnému stavu rozšířen.",name:"Zákaz jízdy kamionů",id:"70",order:27},{question:"Imunita poslanců a senátorů by měla být omezena tak, že by se vztahovala jen na proslovy v Parlamentu.",name:"Omezení imunity",id:"75",order:28},{question:"Používání glyfosátu (např. v Roundup) by mělo být zakázáno.",name:"Zákaz glyfosátu",id:"80",order:29},{question:"ČR má finančně podporovat rozvoj obnovitelných zdrojů energie.",name:"Podpora obnovitelných zdrojů",id:"84",order:30},{question:"Očkování dětí by mělo být nanejvýš doporučené.",name:"Očkování nepovinné",id:"86",order:31},{question:'Provozovatelé internetových stránek a aplikací mají být povinni vymazat "falešné zprávy" (Fake News), na které byli upozorněni.',name:"Fake News – povinnost odstraňovat",id:"90",order:32},{question:"Konkurence mezi exekutory by se měla odstranit zavedením místní příslušnosti exekutorů.",name:"Místní příslušnost exekutorů",id:"68",order:33},{question:"Insolvenční zákon by měl být upraven tak, aby umožnil návrat do ekonomicky aktivního života většímu počtu osob i za cenu zhoršení postavení věřitelů.",name:"Insolvenční zákon",id:"69",order:34},{question:"Vlastnit zbraň má být ústavní právo",name:"Ústavní právo na zbraň",id:"100",order:35}]},59:function(t,e,o){t.exports={default:o(60),__esModule:!0}},60:function(t,e,o){var n=o(53),s=n.JSON||(n.JSON={stringify:JSON.stringify});t.exports=function(t){return s.stringify.apply(s,arguments)}},61:function(t,e,o){var n=o(62);"string"==typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);o(30)("276f0698",n,!0)},62:function(t,e,o){e=t.exports=o(29)(void 0),e.push([t.i,"footer{margin-top:40px;color:#666}",""])},63:function(t,e){},64:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},staticRenderFns:[function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("footer",[o("div",{staticClass:"container"},[o("div",{staticClass:"row justify-center"},[o("div",{staticClass:"col-md-6 text-center"},[o("a",{attrs:{href:"http://kohovolit.eu",title:"KohoVolit.eu",id:"footer-kohovolit-logo"}},[o("img",{attrs:{src:"https://volebnikalkulacka.cz/image/logo.png",alt:"logo kohovolit.eu"}})]),t._v(" "),o("p",{staticClass:"lead black"},[t._v("Volební kalkulačky pro Vás už od roku 2006 vytváří sdružení "),o("a",{attrs:{href:"http://kohovolit.eu"}},[t._v("KohoVolit.eu")])]),t._v(" "),o("hr"),t._v(" "),o("p",{staticClass:"black"},[t._v("Creative Commons BY 4.0 | "),o("a",{attrs:{href:"http://kohovolit.eu",id:"footer-kohovolit-licence"}},[t._v("KohoVolit.eu")]),t._v(" 2017")])])])])])}]}},65:function(t,e,o){var n=o(66);"string"==typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);o(30)("df006cde",n,!0)},66:function(t,e,o){e=t.exports=o(29)(void 0),e.push([t.i,"",""])},67:function(t,e,o){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=o(1);e.default={components:{QToolbar:n.w,QToolbarTitle:n.x,QIcon:n.i,QBtn:n.c}}},68:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("q-toolbar",{attrs:{color:"primary"},slot:"header"},[o("q-toolbar-title",[o("router-link",{attrs:{to:"/"}},[o("q-icon",{staticClass:"ion-chatboxes",attrs:{color:"warning"}}),t._v(" "),o("span",{staticClass:"text-light"},[t._v("\n                Volební kalkulačka 2017\n            ")])],1)],1)],1)},staticRenderFns:[]}}});