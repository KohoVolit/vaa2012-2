(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{306:function(t,o,e){var content=e(314);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,e(46).default)("01e4231c",content,!0,{sourceMap:!1})},313:function(t,o,e){"use strict";e(306)},314:function(t,o,e){var n=e(45)(!1);n.push([t.i,".picture[data-v-b9956c34]{height:66px;border-radius:50%;border:1px solid #aaa}.list-group[data-v-b9956c34]{cursor:pointer}",""]),t.exports=n},323:function(t,o,e){"use strict";e.r(o);var n={props:["results"],methods:{comparison:function(t){console.log("clicked",t),this.$router.push({name:"comparison",params:{candidateId:t}})},createImageLink:function(t){return"https://www.volebnikalkulacka.cz/cs/volby-2021/logos/"+t+".webp"}}},r=(e(313),e(18)),component=Object(r.a)(n,(function(){var t=this,o=t.$createElement,e=t._self._c||o;return e("div",[e("div",{staticClass:"container"},[e("h4",{staticClass:"p-2"},[t._v("Moje shoda:")]),t._v(" "),t._l(t.results,(function(o,n){return e("ul",{key:n,staticClass:"list-group"},[e("li",{staticClass:"list-group-item list-group-item-action d-flex",on:{click:function(e){return t.comparison(o.info.id)}}},[e("div",[e("img",{staticClass:"picture mr-2",attrs:{src:t.createImageLink(o.info.logo)}})]),t._v(" "),e("div",{staticClass:"ms-2 me-auto"},[e("h3",{staticClass:"fw-bold"},[t._v("\n            "+t._s(o.info.abbreviation)+"\n          ")]),t._v("\n          "+t._s(o.info.name)+"\n        ")]),t._v(" "),e("div",{staticClass:"text-primary fw-bold"},[e("h2",[t._v(t._s(o.result_percent)+" %")])])])])}))],2)])}),[],!1,null,"b9956c34",null);o.default=component.exports}}]);