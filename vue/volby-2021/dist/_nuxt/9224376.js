(window.webpackJsonp=window.webpackJsonp||[]).push([[5],{306:function(t,e,o){var content=o(314);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,o(46).default)("584287e5",content,!0,{sourceMap:!1})},313:function(t,e,o){"use strict";o(306)},314:function(t,e,o){var r=o(45)(!1);r.push([t.i,".picture[data-v-33a7f4b2]{height:64px;border-radius:50%;border:1px solid #aaa}.list-group[data-v-33a7f4b2]{cursor:pointer}",""]),t.exports=r},324:function(t,e,o){"use strict";o.r(e);var r={props:["results"],methods:{comparison:function(t){this.$router.push({name:"comparison",params:{candidateId:t}})},createImageLink:function(t){return"/logos/"+t+".webp"}}},n=(o(313),o(18)),component=Object(n.a)(r,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",[o("div",{staticClass:"container"},[o("h4",{staticClass:"p-2"},[t._v("Moje shoda:")]),t._v(" "),t._l(t.results,(function(e,r){return o("ul",{key:r,staticClass:"list-group"},[o("li",{staticClass:"list-group-item list-group-item-action d-flex",on:{click:function(o){return t.comparison(e.info.id)}}},[o("div",[o("img",{staticClass:"picture mr-2",attrs:{src:t.createImageLink(e.info.logo)}})]),t._v(" "),o("div",{staticClass:"ms-2 me-auto"},[o("h3",{staticClass:"fw-bold"},[t._v("\n            "+t._s(e.info.abbreviation)+"\n          ")]),t._v("\n          "+t._s(e.info.name)+"\n        ")]),t._v(" "),o("div",{staticClass:"text-primary fw-bold"},[o("h2",[t._v(t._s(e.result_percent)+" %")])])])])}))],2)])}),[],!1,null,"33a7f4b2",null);e.default=component.exports}}]);