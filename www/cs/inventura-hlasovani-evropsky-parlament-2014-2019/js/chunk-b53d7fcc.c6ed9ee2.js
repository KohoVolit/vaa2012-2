(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-b53d7fcc"],{"036c":function(t,s,e){"use strict";e.r(s);var n=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.results[t.index]?e("div",{staticClass:"modal-dialog modal-lg"},[e("div",{staticClass:"modal-content"},[e("div",{staticClass:"modal-header row m-2"},[t._m(0),e("div",{staticClass:"card col-12"},[e("div",{staticClass:"card-body pb-1"},[e("div",{staticClass:"row"},[e("div",{staticClass:"col-8"},[e("h4",{staticClass:"card-title"},[t._v(t._s(t.results[t.index].info.abbreviation))]),e("div",{staticClass:"card-text"},[e("span",[t._v(t._s(t.results[t.index].info.name))]),e("br")]),e("div",{staticClass:"card-text text-muted"},[t._v(t._s(t.$t("match"))+": "+t._s(t.results[t.index].result_percent)+"%")])]),e("div",{staticClass:"col-4 text-right"},[e("img",{staticClass:"picture mr-2",attrs:{src:"logos/200x200/"+t.results[t.index].info.picture}})])])])]),e("button",{staticClass:"btn btn-secondary btn-lg btn-block mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])]),e("div",{staticClass:"modal-body"},[e("table",{staticClass:"table-striped w-100"},[e("thead",[e("th",{staticClass:"text-left"},[t._v("\n                        "+t._s(t.$t("question"))+"\n                    ")]),e("th",{staticClass:"text-center"},[t._v("\n                        "+t._s(t.$t("me"))+"\n                    ")]),e("th",{staticClass:"text-center"},[t._v("\n                        x\n                    ")]),e("th",{staticClass:"text-center"},[t._v("\n                        "+t._s(t.results[t.index].info.abbreviation)+"\n                    ")])]),e("tbody",t._l(t.questions,function(s,n){return e("tr",{class:[t.compared(t.answers[s.id],t.results[t.index]["info"]["votes"][s.id]),t.weighted(t.weights[s.id])]},[e("td",[t.weights[s.id]?e("i",{staticClass:"fa fa-star"}):t._e(),t._v("\n                            "+t._s(s.name)+"\n                            "),e("i",{staticClass:"fa fa-info-circle more-question",attrs:{tabindex:"0","data-toggle":"popover","data-trigger":"focus","data-content":s.question,title:t.$t("question")}})]),e("td",{staticClass:"text-center"},[t._v("\n                            "+t._s(t.answer2Text(t.answers[s.id]))+"\n                        ")]),e("td",{staticClass:"text-center"},[t._v("\n                            "+t._s(t.compare(t.answers[s.id],t.results[t.index]["info"]["votes"][s.id]))+"\n                        ")]),e("td",{staticClass:"text-center"},[t._v("\n                            "+t._s(t.answer2TextThem(t.results[t.index]["info"]["votes"][s.id]))+"\n                        ")])])}),0)])]),e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-secondary btn-lg mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])])])]):t._e()},a=[function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])}],i={props:["index","questions","results","answers","weights"],mounted:function(){"undefined"!==typeof $&&$(function(){$('[data-toggle="popover"]').popover()})},computed:{stars:function(){var t=Math.floor(this.results[this.index].rating),s=0;t<this.results[this.index].rating&&(s=1);var e=5-t-s;return{full:t,half:s,empty:e}}},methods:{send:function(t){return t},answer2Text:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know"):"--"},answer2TextThem:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("not_voted"):"--"},compare:function(t,s){return t*s===-1?"x":""},compared:function(t,s){return void 0===t?"text-muted":t*s===-1?"text-danger":t*s===1?"text-success":""},weighted:function(t){return t?"strong":""},shortenText:function(t){if(!t)return"";var s=window.innerWidth,e=0;return e=s<576?20:400,t.length>e?t.substr(0,e-3)+"...":t},shortened:function(t){if(!t)return!1;var s=window.innerWidth,e=0;return e=s<576?20:400,t.length>e}},components:{}},r=i,o=(e("18dc"),e("2877")),d=Object(o["a"])(r,n,a,!1,null,"5d2ebf49",null);s["default"]=d.exports},"18dc":function(t,s,e){"use strict";var n=e("2fa4"),a=e.n(n);a.a},"2fa4":function(t,s,e){}}]);
//# sourceMappingURL=chunk-b53d7fcc.c6ed9ee2.js.map