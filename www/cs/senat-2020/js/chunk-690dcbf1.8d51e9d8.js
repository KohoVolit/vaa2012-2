(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-690dcbf1"],{"036c":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[t.show?s("div",{staticClass:"modal-dialog modal-lg"},[s("div",{staticClass:"modal-content"},[s("div",{staticClass:"modal-header row m-2"},[t._m(0),s("div",{staticClass:"card col-12"},[s("div",{staticClass:"card-body pb-1"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-8"},[s("h4",{staticClass:"card-title"},[t._v(t._s(t.results[t.index].info.name))]),s("div",{staticClass:"card-text"},[s("span",[t._v(t._s(t.results[t.index].info.party))]),s("br")]),s("div",{staticClass:"card-text text-muted"},[t._v(t._s(t.$t("match"))+": "+t._s(t.results[t.index].result_percent)+"%")])]),s("div",{staticClass:"col-4 text-right"})])])]),s("button",{staticClass:"btn btn-secondary btn-lg btn-block mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])]),s("div",{staticClass:"modal-body"},[s("table",{staticClass:"table-striped w-100"},[s("thead",[s("th",{staticClass:"text-left"},[t._v(" "+t._s(t.$t("question"))+" ")]),s("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("me"))+" ")]),s("th",{staticClass:"text-center"},[t._v(" x ")]),s("th",{staticClass:"text-center"},[t._v(" "+t._s(t.results[t.index].info.name)+" ")]),s("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("candidate_comment"))+" ")])]),s("tbody",t._l(t.questions,(function(e,n){return s("tr",{key:n,class:[t.precompared(e,t.index),t.weighted(t.weights[e.id])]},[s("td",[t.weights[e.id]?s("i",{staticClass:"fa fa-star"}):t._e(),t.weights[e.id]?s("font-awesome-icon",{attrs:{icon:"star"}}):t._e(),t._v(" "+t._s(e.name)+" "),s("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:e.question,expression:"question.question",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}})],1),s("td",{staticClass:"text-center"},[t._v(" "+t._s(t.answer2Text(t.answers[e.id]))+" ")]),s("td",{staticClass:"text-center"},[t._v(" "+t._s(t.precompare(e,t.index))+" ")]),s("td",{staticClass:"text-center"},[t._v(" "+t._s(t.preanswer2TextThem(e,t.index))+" ")]),s("td",{staticClass:"text-center comment p-2"},[t._v(" "+t._s(t.preshortenText(e,t.index))+" "),t.preshortened(e,t.index)?s("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:t.hoverTop(e,t.index),expression:"hoverTop(question, index)",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}}):t._e()],1)])})),0)])]),s("div",{staticClass:"modal-footer"},[s("button",{staticClass:"btn btn-secondary btn-lg mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])])])]):t._e()])},i=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[s("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])}],r=(s("a9e3"),s("ecee")),o=s("c074"),a=s("ad3d");r["c"].add(o["a"]),r["c"].add(o["c"]),r["c"].add(o["e"]);var d={props:{index:Number,questions:Array,results:Array,answers:Object,weights:Object},mounted:function(){"undefined"!==typeof $&&$((function(){$('[data-toggle="popover"]').popover()}))},computed:{show:function(){return"undefined"!==typeof this.index&&"undefined"!==typeof this.results&&this.results.length>this.index},stars:function(){console.log("stars",this.index);var t=Math.floor(this.results[this.index].rating),e=0;t<this.results[this.index].rating&&(e=1);var s=5-t-e;return{full:t,half:e,empty:s}}},methods:{send:function(t){return t},answer2Text:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know"):"--"},preanswer2TextThem:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.answer2TextThem(this.results[e]["info"]["votes"][t.id]):""},answer2TextThem:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know_them"):"--"},precompare:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.compare(this.answers[t.id],this.results[e]["info"]["votes"][t.id]):""},compare:function(t,e){return t*e===-1?"x":""},precompared:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.compared(this.answers[t.id],this.results[e]["info"]["votes"][t.id]):""},compared:function(t,e){return void 0===t?"text-muted":t*e===-1?"text-danger":t*e===1?"text-success":""},weighted:function(t){return t?"strong":""},hoverTop:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e?this.results[e]["info"]["details"][t.id]:""},preshortenText:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.shortenText(this.results[e]["info"]["details"][t.id]):""},shortenText:function(t){if(!t)return"";var e=window.innerWidth,s=0;return s=e<576?20:400,t.length>s?t.substr(0,s-3)+"...":t},preshortened:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]&&this.shortened(this.results[e]["info"]["details"][t.id])},shortened:function(t){if(!t)return!1;var e=window.innerWidth,s=0;return s=e<576?20:400,t.length>s}},components:{"font-awesome-icon":a["a"]}},c=d,u=(s("0905"),s("2877")),f=Object(u["a"])(c,n,i,!1,null,"052b8312",null);e["default"]=f.exports},"0905":function(t,e,s){"use strict";var n=s("8b93"),i=s.n(n);i.a},5899:function(t,e){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},"58a8":function(t,e,s){var n=s("1d80"),i=s("5899"),r="["+i+"]",o=RegExp("^"+r+r+"*"),a=RegExp(r+r+"*$"),d=function(t){return function(e){var s=String(n(e));return 1&t&&(s=s.replace(o,"")),2&t&&(s=s.replace(a,"")),s}};t.exports={start:d(1),end:d(2),trim:d(3)}},7156:function(t,e,s){var n=s("861d"),i=s("d2bb");t.exports=function(t,e,s){var r,o;return i&&"function"==typeof(r=e.constructor)&&r!==s&&n(o=r.prototype)&&o!==s.prototype&&i(t,o),t}},"8b93":function(t,e,s){},a9e3:function(t,e,s){"use strict";var n=s("83ab"),i=s("da84"),r=s("94ca"),o=s("6eeb"),a=s("5135"),d=s("c6b6"),c=s("7156"),u=s("c04e"),f=s("d039"),l=s("7c73"),h=s("241c").f,p=s("06cf").f,v=s("9bf2").f,m=s("58a8").trim,x="Number",_=i[x],b=_.prototype,w=d(l(b))==x,y=function(t){var e,s,n,i,r,o,a,d,c=u(t,!1);if("string"==typeof c&&c.length>2)if(c=m(c),e=c.charCodeAt(0),43===e||45===e){if(s=c.charCodeAt(2),88===s||120===s)return NaN}else if(48===e){switch(c.charCodeAt(1)){case 66:case 98:n=2,i=49;break;case 79:case 111:n=8,i=55;break;default:return+c}for(r=c.slice(2),o=r.length,a=0;a<o;a++)if(d=r.charCodeAt(a),d<48||d>i)return NaN;return parseInt(r,n)}return+c};if(r(x,!_(" 0o1")||!_("0b1")||_("+0x1"))){for(var g,C=function(t){var e=arguments.length<1?0:t,s=this;return s instanceof C&&(w?f((function(){b.valueOf.call(s)})):d(s)!=x)?c(new _(y(e)),s,C):y(e)},T=n?h(_):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(","),N=0;T.length>N;N++)a(_,g=T[N])&&!a(C,g)&&v(C,g,p(_,g));C.prototype=b,b.constructor=C,o(i,x,C)}}}]);
//# sourceMappingURL=chunk-690dcbf1.8d51e9d8.js.map