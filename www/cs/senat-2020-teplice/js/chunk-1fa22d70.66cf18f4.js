(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-1fa22d70","chunk-864b8b44","chunk-a751e1b2"],{"0418":function(t,a,e){"use strict";e.r(a);var i=e("c275"),n=e("ad21");for(var s in n)"default"!==s&&function(t){e.d(a,t,(function(){return n[t]}))}(s);var o=e("2877"),c=Object(o["a"])(n["default"],i["a"],i["b"],!1,null,null,null);a["default"]=c.exports},"2e93":function(t,a){},"3dfd8":function(t,a,e){"use strict";e.r(a);var i=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",[e("component-header"),e("div",{staticClass:"selection"},[e("button",{staticClass:"btn btn-outline-secondary btn-lg btn-block mb-3",on:{click:function(a){return t.goVAA("top")}}},[t.spinning?e("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):e("span",[t._v(">")]),t._v(" Pokračovat "),t.spinning?e("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):e("span",[t._v(">")])],1),t._m(0),t._l(["Ano","Ne"],(function(a,i){return e("div",{key:i,staticClass:"list-group"},[e("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start",on:{click:function(a){1==i&&t.goVAA("answer")}}},[e("label",{staticClass:"custom-control custom-checkbox"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.local,expression:"local"}],staticClass:"custom-control-input",attrs:{type:"radio",id:a},domProps:{value:a,checked:t._q(t.local,a)},on:{change:function(e){t.local=a}}}),e("span",{staticClass:"custom-control-indicator"}),e("div",{staticClass:"custom-control-description"},[e("div",{staticClass:"d-flex w-100 justify-content-between"},[e("h5",{staticClass:"mb-1"},[t._v(t._s(a)+" "),1==i?e("small",[t._v("> Pokračovat >")]):t._e()])])])])])])})),e("h4",{staticClass:"p-2"},[t._v("Chystám se jít volit:")]),t._l(["Ano","Nevím","Ne"],(function(a){return e("div",{key:a,staticClass:"list-group"},[e("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[e("label",{staticClass:"custom-control custom-checkbox"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.participation,expression:"participation"}],staticClass:"custom-control-input",attrs:{type:"radio",id:a},domProps:{value:a,checked:t._q(t.participation,a)},on:{change:function(e){t.participation=a}}}),e("span",{staticClass:"custom-control-indicator"}),e("div",{staticClass:"custom-control-description"},[e("div",{staticClass:"d-flex w-100 justify-content-between"},[e("h5",{staticClass:"mb-1"},[t._v(t._s(a))])])])])])])})),t._m(1),t._l(t.candidates,(function(a){return e("div",{key:a.name,staticClass:"list-group"},[e("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[e("label",{staticClass:"custom-control custom-checkbox"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.checked[a.id],expression:"checked[candidate.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(t.checked[a.id])?t._i(t.checked[a.id],null)>-1:t.checked[a.id]},on:{change:function(e){var i=t.checked[a.id],n=e.target,s=!!n.checked;if(Array.isArray(i)){var o=null,c=t._i(i,o);n.checked?c<0&&t.$set(t.checked,a.id,i.concat([o])):c>-1&&t.$set(t.checked,a.id,i.slice(0,c).concat(i.slice(c+1)))}else t.$set(t.checked,a.id,s)}}}),e("span",{staticClass:"custom-control-indicator"}),e("div",{staticClass:"custom-control-description"},[e("div",{staticClass:"d-flex w-100 justify-content-between"},[e("h5",{staticClass:"mb-1"},[t._v(t._s(a["name"])+" ("+t._s(a["abbreviation"])+")")])])])])])])})),e("h4",{staticClass:"p-2"},[t._v("Bydlím v:")]),t._l(t.places,(function(a){return e("div",{key:a.name,staticClass:"list-group"},[e("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[e("label",{staticClass:"custom-control custom-checkbox"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.checked_place,expression:"checked_place"}],staticClass:"custom-control-input",attrs:{type:"radio",id:a},domProps:{value:a,checked:t._q(t.checked_place,a)},on:{change:function(e){t.checked_place=a}}}),e("span",{staticClass:"custom-control-indicator"}),e("div",{staticClass:"custom-control-description"},[e("div",{staticClass:"d-flex w-100 justify-content-between"},[e("h5",{staticClass:"mb-1"},[t._v(t._s(a["name"]))])])])])])])})),e("button",{staticClass:"btn btn-success btn-lg btn-block mt-3",on:{click:function(a){return t.goVAA("bottom")}}},[t.spinning?e("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):e("span",[t._v(">")]),t._v(" Pokračovat "),t.spinning?e("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):e("span",[t._v(">")])],1)],2),e("component-footer")],1)},n=[function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("h4",{staticClass:"p-2"},[t._v("Jsem z volebního obvody Teplice, "),e("small",[t._v("takže se mně tyto volby týkají:")])])},function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("h4",{staticClass:"p-2"},[t._v("Uvažuji nad volbou: "),e("small",[t._v("(můžete vybrat více kandidátů/tek)")])])}],s=e("0418"),o=e("fd2d"),c=e("bc3a"),l=e.n(c),r=e("ecee"),u=e("c074"),d=e("ad3d");r["c"].add(u["e"]);var v={data:function(){for(var t=[{id:1,name:"B. Ježek",abbreviation:"SPD"},{id:2,name:"Z. Schwarz Bařtipánová",abbreviation:"ANO"},{id:3,name:"E. S. Freimann",abbreviation:"Rozumní"},{id:4,name:"O. Bubeníček",abbreviation:"KSČM"},{id:5,name:"H. Hanza",abbreviation:"ODS"},{id:6,name:"J. Syslová",abbreviation:"STAN"},{id:8,name:"Z. Pešek",abbreviation:"Trikolóra"},{id:9,name:"Z. Bergman",abbreviation:"SEN 21"},{id:10,name:"Z. Šimbera",abbreviation:"ČSSD"}],a=[{name:"Teplice"},{name:"Bílina"},{name:"Krupka"},{name:"Dubí"},{name:"Jinde"}],e={},i=0;i<t.length;i++)e[t[i].id]=!1;return{candidates:t,checked:e,local:"",participation:"",places:a,checked_place:"",spinning:!1}},mounted:function(){this.$action("questionnaire_started"),this.$getSetCookie(this.$settings["cookie"])},methods:{goVAA:function(t){this.scrollToTop(),this.spinning=!0,this.saveValues(t),this.$router.push({path:"/"})},scrollToTop:function(){window.scrollTo(0,0)},saveValues:function(t){var a=this.$getSetCookie(this.$settings["cookie"]),e={vkid:a,position:t,local:this.local,participation:this.participation,candidates:this.checked,place:this.checked_places};l.a.get(this.$settings["url"]+this.$settings["save_path"]+"match/questionnaire.php",{params:e})}},components:{"component-header":s["default"],"component-footer":o["default"],"font-awesome-icon":d["a"]}},m=v,p=(e("981f"),e("2877")),f=Object(p["a"])(m,i,n,!1,null,"fc0d6194",null);a["default"]=f.exports},"94d4":function(t,a,e){"use strict";e.r(a);var i=e("2e93"),n=e.n(i);for(var s in i)"default"!==s&&function(t){e.d(a,t,(function(){return i[t]}))}(s);a["default"]=n.a},"981f":function(t,a,e){"use strict";var i=e("d924"),n=e.n(i);n.a},ad21:function(t,a,e){"use strict";e.r(a);var i=e("e504"),n=e.n(i);for(var s in i)"default"!==s&&function(t){e.d(a,t,(function(){return i[t]}))}(s);a["default"]=n.a},c275:function(t,a,e){"use strict";e.d(a,"a",(function(){return i})),e.d(a,"b",(function(){return n}));var i=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("nav",{staticClass:"navbar navbar-expand-lg navbar-dark bg-primary"},[e("a",{staticClass:"navbar-brand",attrs:{href:"/"}},[t._v(t._s(t.$t("header_name")))])])},n=[]},d924:function(t,a,e){},e504:function(t,a){},f625:function(t,a,e){"use strict";e.d(a,"a",(function(){return i})),e.d(a,"b",(function(){return n}));var i=function(){var t=this,a=t.$createElement;t._self._c;return t._m(0)},n=[function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("footer",{staticClass:"text-muted mt-4 md-4"},[e("div",{staticClass:"container"},[e("div",{staticClass:"row justify-center"},[e("div",{staticClass:"col-md-3"}),e("div",{staticClass:"col-md-6 text-center"},[e("a",{attrs:{href:"http://kohovolit.eu",title:"KohoVolit.eu",id:"footer-kohovolit-logo",target:"_blank"}},[e("img",{attrs:{src:"https://volebnakalkulacka.azureedge.net/image/logo.png",alt:"logo kohovolit.eu"}})]),e("p",{staticClass:"lead black"},[t._v("Volební kalkulačky pro Vás už od roku 2006 vytváří občanské sdružení "),e("a",{attrs:{href:"http://kohovolit.eu",target:"_blank"}},[t._v("KohoVolit.eu")])]),e("hr"),e("p",{staticClass:"black"},[t._v("Creative Commons BY NC 4.0 | "),e("a",{attrs:{href:"http://kohovolit.eu",id:"footer-kohovolit-licence"}},[t._v("KohoVolit.eu")]),t._v(" 2020")]),e("p",{staticClass:"black"},[t._v("Vyrobeno s ❤ v "),e("a",{attrs:{href:"https://cs.wikipedia.org/wiki/Plasy"}},[t._v("Plasích")])])])])])])}]},fd2d:function(t,a,e){"use strict";e.r(a);var i=e("f625"),n=e("94d4");for(var s in n)"default"!==s&&function(t){e.d(a,t,(function(){return n[t]}))}(s);var o=e("2877"),c=Object(o["a"])(n["default"],i["a"],i["b"],!1,null,null,null);a["default"]=c.exports}}]);
//# sourceMappingURL=chunk-1fa22d70.66cf18f4.js.map