(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-71ca49b6"],{"06e7":function(t,s,e){"use strict";var n=e("b1c0"),a=e.n(n);a.a},"1dae":function(t,s,e){"use strict";e.r(s);var n=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",[e("div",{staticClass:"row result-winners justify-center m-1"},[e("div",{staticClass:"card-group"},[t._l(t.results.slice(0,3),(function(s,n){return e("div",{key:n,staticClass:"card",attrs:{"data-toggle":"modal","data-target":"#modal-winners"},on:{click:function(e){return t.clicked("result_winners",{rank:n,id:s.info.id})}}},[e("div",{staticClass:"card-body"},[e("h4",{staticClass:"card-title"},[t._v(t._s(s.info.abbreviation))]),e("h6",{staticClass:"card-title"},[t._v(t._s(s.info.name))])]),e("div",{staticClass:"card-footer"},[e("h4",{staticClass:"card-text text-muted"},[t._v(t._s(t.$t("match"))+": "+t._s(s.result_percent)+"%")]),e("span",{staticClass:"badge badge-secondary"},[t._v(t._s(n+1))])])])})),e("div",{staticClass:"modal fade",attrs:{id:"modal-winners",tabindex:"-1",role:"dialog","aria-labelledby":"modalLabel","aria-hidden":"true"}},[e("component-results-modal",{attrs:{index:t.index,questions:t.questions,results:t.results,answers:t.answers,weights:t.weights}})],1)],2)])])},a=[],i=e("5530"),c=e("2f62"),r=e("036c"),d={props:["questions","constituency","results","test"],data:function(){return{index:0}},computed:Object(i["a"])(Object(i["a"])({},Object(c["b"])({answers:"getAnswers",weights:"getWeights"})),{},{teston:function(){return this.test}}),methods:{clicked:function(t,s){this.openingModal(s["rank"]),this.$clicked(t,s)},createImageLink:function(t){return this.$settings["cdn"]+this.$settings["path"]+this.$settings["pic_path_small"]+t},openingModal:function(t){this.index=t}},components:{"component-results-modal":r["default"]}},o=d,l=(e("06e7"),e("2877")),u=Object(l["a"])(o,n,a,!1,null,"55f68822",null);s["default"]=u.exports},b1c0:function(t,s,e){}}]);
//# sourceMappingURL=chunk-71ca49b6.5b7d734f.js.map