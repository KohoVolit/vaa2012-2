(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-a83e3242","chunk-690dcbf1"],{"036c":function(t,e,n){"use strict";n.r(e);var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.show?n("div",{staticClass:"modal-dialog modal-lg"},[n("div",{staticClass:"modal-content"},[n("div",{staticClass:"modal-header row m-2"},[t._m(0),n("div",{staticClass:"card col-12"},[n("div",{staticClass:"card-body pb-1"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-8"},[n("h4",{staticClass:"card-title"},[t._v(t._s(t.results[t.index].info.name))]),n("div",{staticClass:"card-text"},[n("span",[t._v(t._s(t.results[t.index].info.party))]),n("br")]),n("div",{staticClass:"card-text text-muted"},[t._v(t._s(t.$t("match"))+": "+t._s(t.results[t.index].result_percent)+"%")])]),n("div",{staticClass:"col-4 text-right"})])])]),n("button",{staticClass:"btn btn-secondary btn-lg btn-block mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])]),n("div",{staticClass:"modal-body"},[n("table",{staticClass:"table-striped w-100"},[n("thead",[n("th",{staticClass:"text-left"},[t._v(" "+t._s(t.$t("question"))+" ")]),n("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("me"))+" ")]),n("th",{staticClass:"text-center"},[t._v(" x ")]),n("th",{staticClass:"text-center"},[t._v(" "+t._s(t.results[t.index].info.name)+" ")]),n("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("candidate_comment"))+" ")])]),n("tbody",t._l(t.questions,(function(e,r){return n("tr",{key:r,class:[t.precompared(e,t.index),t.weighted(t.weights[e.id])]},[n("td",[t.weights[e.id]?n("i",{staticClass:"fa fa-star"}):t._e(),t.weights[e.id]?n("font-awesome-icon",{attrs:{icon:"star"}}):t._e(),t._v(" "+t._s(e.name)+" "),n("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:e.question,expression:"question.question",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}})],1),n("td",{staticClass:"text-center"},[t._v(" "+t._s(t.answer2Text(t.answers[e.id]))+" ")]),n("td",{staticClass:"text-center"},[t._v(" "+t._s(t.precompare(e,t.index))+" ")]),n("td",{staticClass:"text-center"},[t._v(" "+t._s(t.preanswer2TextThem(e,t.index))+" ")]),n("td",{staticClass:"text-center comment p-2"},[t._v(" "+t._s(t.preshortenText(e,t.index))+" "),t.preshortened(e,t.index)?n("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:t.hoverTop(e,t.index),expression:"hoverTop(question, index)",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}}):t._e()],1)])})),0)])]),n("div",{staticClass:"modal-footer"},[n("button",{staticClass:"btn btn-secondary btn-lg mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])])])]):t._e()])},i=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[n("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])}],s=(n("a9e3"),n("ecee")),o=n("c074"),a=n("ad3d");s["c"].add(o["e"]),s["c"].add(o["f"]),s["c"].add(o["h"]);var c={props:{index:Number,questions:Array,results:Array,answers:Object,weights:Object},mounted:function(){"undefined"!==typeof $&&$((function(){$('[data-toggle="popover"]').popover()}))},computed:{show:function(){return"undefined"!==typeof this.index&&"undefined"!==typeof this.results&&this.results.length>this.index},stars:function(){console.log("stars",this.index);var t=Math.floor(this.results[this.index].rating),e=0;t<this.results[this.index].rating&&(e=1);var n=5-t-e;return{full:t,half:e,empty:n}}},methods:{send:function(t){return t},answer2Text:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know"):"--"},preanswer2TextThem:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.answer2TextThem(this.results[e]["info"]["votes"][t.id]):""},answer2TextThem:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know_them"):"--"},precompare:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.compare(this.answers[t.id],this.results[e]["info"]["votes"][t.id]):""},compare:function(t,e){return t*e===-1?"x":""},precompared:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.compared(this.answers[t.id],this.results[e]["info"]["votes"][t.id]):""},compared:function(t,e){return void 0===t?"text-muted":t*e===-1?"text-danger":t*e===1?"text-success":""},weighted:function(t){return t?"strong":""},hoverTop:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e?this.results[e]["info"]["details"][t.id]:""},preshortenText:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]?this.shortenText(this.results[e]["info"]["details"][t.id]):""},shortenText:function(t){if(!t)return"";var e=window.innerWidth,n=0;return n=e<576?20:400,t.length>n?t.substr(0,n-3)+"...":t},preshortened:function(t,e){return"undefined"!==typeof e&&"undefined"!==typeof this.results&&this.results.length>e&&"undefined"!==typeof this.results[e]["info"]["votes"]&&this.shortened(this.results[e]["info"]["details"][t.id])},shortened:function(t){if(!t)return!1;var e=window.innerWidth,n=0;return n=e<576?20:400,t.length>n}},components:{"font-awesome-icon":a["a"]}},u=c,f=(n("0905"),n("2877")),d=Object(f["a"])(u,r,i,!1,null,"052b8312",null);e["default"]=d.exports},"057f":function(t,e,n){var r=n("fc6a"),i=n("241c").f,s={}.toString,o="object"==typeof window&&window&&Object.getOwnPropertyNames?Object.getOwnPropertyNames(window):[],a=function(t){try{return i(t)}catch(e){return o.slice()}};t.exports.f=function(t){return o&&"[object Window]"==s.call(t)?a(t):i(r(t))}},"0905":function(t,e,n){"use strict";var r=n("8b93"),i=n.n(r);i.a},"159b":function(t,e,n){var r=n("da84"),i=n("fdbc"),s=n("17c2"),o=n("9112");for(var a in i){var c=r[a],u=c&&c.prototype;if(u&&u.forEach!==s)try{o(u,"forEach",s)}catch(f){u.forEach=s}}},"17c2":function(t,e,n){"use strict";var r=n("b727").forEach,i=n("a640"),s=n("ae40"),o=i("forEach"),a=s("forEach");t.exports=o&&a?[].forEach:function(t){return r(this,t,arguments.length>1?arguments[1]:void 0)}},"1dde":function(t,e,n){var r=n("d039"),i=n("b622"),s=n("2d00"),o=i("species");t.exports=function(t){return s>=51||!r((function(){var e=[],n=e.constructor={};return n[o]=function(){return{foo:1}},1!==e[t](Boolean).foo}))}},4160:function(t,e,n){"use strict";var r=n("23e7"),i=n("17c2");r({target:"Array",proto:!0,forced:[].forEach!=i},{forEach:i})},"4de4":function(t,e,n){"use strict";var r=n("23e7"),i=n("b727").filter,s=n("1dde"),o=n("ae40"),a=s("filter"),c=o("filter");r({target:"Array",proto:!0,forced:!a||!c},{filter:function(t){return i(this,t,arguments.length>1?arguments[1]:void 0)}})},5530:function(t,e,n){"use strict";n.d(e,"a",(function(){return s}));n("a4d3"),n("4de4"),n("4160"),n("e439"),n("dbb4"),n("b64b"),n("159b");function r(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function i(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function s(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?i(Object(n),!0).forEach((function(e){r(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}},5899:function(t,e){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},"58a8":function(t,e,n){var r=n("1d80"),i=n("5899"),s="["+i+"]",o=RegExp("^"+s+s+"*"),a=RegExp(s+s+"*$"),c=function(t){return function(e){var n=String(r(e));return 1&t&&(n=n.replace(o,"")),2&t&&(n=n.replace(a,"")),n}};t.exports={start:c(1),end:c(2),trim:c(3)}},"65f0":function(t,e,n){var r=n("861d"),i=n("e8b5"),s=n("b622"),o=s("species");t.exports=function(t,e){var n;return i(t)&&(n=t.constructor,"function"!=typeof n||n!==Array&&!i(n.prototype)?r(n)&&(n=n[o],null===n&&(n=void 0)):n=void 0),new(void 0===n?Array:n)(0===e?0:e)}},7156:function(t,e,n){var r=n("861d"),i=n("d2bb");t.exports=function(t,e,n){var s,o;return i&&"function"==typeof(s=e.constructor)&&s!==n&&r(o=s.prototype)&&o!==n.prototype&&i(t,o),t}},"746f":function(t,e,n){var r=n("428f"),i=n("5135"),s=n("e538"),o=n("9bf2").f;t.exports=function(t){var e=r.Symbol||(r.Symbol={});i(e,t)||o(e,t,{value:s.f(t)})}},8418:function(t,e,n){"use strict";var r=n("c04e"),i=n("9bf2"),s=n("5c6c");t.exports=function(t,e,n){var o=r(e);o in t?i.f(t,o,s(0,n)):t[o]=n}},"8b93":function(t,e,n){},a4d3:function(t,e,n){"use strict";var r=n("23e7"),i=n("da84"),s=n("d066"),o=n("c430"),a=n("83ab"),c=n("4930"),u=n("fdbf"),f=n("d039"),d=n("5135"),l=n("e8b5"),h=n("861d"),p=n("825a"),v=n("7b0b"),b=n("fc6a"),y=n("c04e"),m=n("5c6c"),g=n("7c73"),w=n("df75"),x=n("241c"),_=n("057f"),O=n("7418"),S=n("06cf"),C=n("9bf2"),T=n("d1e7"),E=n("9112"),N=n("6eeb"),j=n("5692"),L=n("f772"),P=n("d012"),A=n("90e3"),I=n("b622"),$=n("e538"),k=n("746f"),M=n("d44e"),D=n("69f3"),V=n("b727").forEach,F=L("hidden"),R="Symbol",G="prototype",q=I("toPrimitive"),H=D.set,J=D.getterFor(R),W=Object[G],B=i.Symbol,U=s("JSON","stringify"),X=S.f,Y=C.f,Q=_.f,z=T.f,K=j("symbols"),Z=j("op-symbols"),tt=j("string-to-symbol-registry"),et=j("symbol-to-string-registry"),nt=j("wks"),rt=i.QObject,it=!rt||!rt[G]||!rt[G].findChild,st=a&&f((function(){return 7!=g(Y({},"a",{get:function(){return Y(this,"a",{value:7}).a}})).a}))?function(t,e,n){var r=X(W,e);r&&delete W[e],Y(t,e,n),r&&t!==W&&Y(W,e,r)}:Y,ot=function(t,e){var n=K[t]=g(B[G]);return H(n,{type:R,tag:t,description:e}),a||(n.description=e),n},at=u?function(t){return"symbol"==typeof t}:function(t){return Object(t)instanceof B},ct=function(t,e,n){t===W&&ct(Z,e,n),p(t);var r=y(e,!0);return p(n),d(K,r)?(n.enumerable?(d(t,F)&&t[F][r]&&(t[F][r]=!1),n=g(n,{enumerable:m(0,!1)})):(d(t,F)||Y(t,F,m(1,{})),t[F][r]=!0),st(t,r,n)):Y(t,r,n)},ut=function(t,e){p(t);var n=b(e),r=w(n).concat(pt(n));return V(r,(function(e){a&&!dt.call(n,e)||ct(t,e,n[e])})),t},ft=function(t,e){return void 0===e?g(t):ut(g(t),e)},dt=function(t){var e=y(t,!0),n=z.call(this,e);return!(this===W&&d(K,e)&&!d(Z,e))&&(!(n||!d(this,e)||!d(K,e)||d(this,F)&&this[F][e])||n)},lt=function(t,e){var n=b(t),r=y(e,!0);if(n!==W||!d(K,r)||d(Z,r)){var i=X(n,r);return!i||!d(K,r)||d(n,F)&&n[F][r]||(i.enumerable=!0),i}},ht=function(t){var e=Q(b(t)),n=[];return V(e,(function(t){d(K,t)||d(P,t)||n.push(t)})),n},pt=function(t){var e=t===W,n=Q(e?Z:b(t)),r=[];return V(n,(function(t){!d(K,t)||e&&!d(W,t)||r.push(K[t])})),r};if(c||(B=function(){if(this instanceof B)throw TypeError("Symbol is not a constructor");var t=arguments.length&&void 0!==arguments[0]?String(arguments[0]):void 0,e=A(t),n=function(t){this===W&&n.call(Z,t),d(this,F)&&d(this[F],e)&&(this[F][e]=!1),st(this,e,m(1,t))};return a&&it&&st(W,e,{configurable:!0,set:n}),ot(e,t)},N(B[G],"toString",(function(){return J(this).tag})),N(B,"withoutSetter",(function(t){return ot(A(t),t)})),T.f=dt,C.f=ct,S.f=lt,x.f=_.f=ht,O.f=pt,$.f=function(t){return ot(I(t),t)},a&&(Y(B[G],"description",{configurable:!0,get:function(){return J(this).description}}),o||N(W,"propertyIsEnumerable",dt,{unsafe:!0}))),r({global:!0,wrap:!0,forced:!c,sham:!c},{Symbol:B}),V(w(nt),(function(t){k(t)})),r({target:R,stat:!0,forced:!c},{for:function(t){var e=String(t);if(d(tt,e))return tt[e];var n=B(e);return tt[e]=n,et[n]=e,n},keyFor:function(t){if(!at(t))throw TypeError(t+" is not a symbol");if(d(et,t))return et[t]},useSetter:function(){it=!0},useSimple:function(){it=!1}}),r({target:"Object",stat:!0,forced:!c,sham:!a},{create:ft,defineProperty:ct,defineProperties:ut,getOwnPropertyDescriptor:lt}),r({target:"Object",stat:!0,forced:!c},{getOwnPropertyNames:ht,getOwnPropertySymbols:pt}),r({target:"Object",stat:!0,forced:f((function(){O.f(1)}))},{getOwnPropertySymbols:function(t){return O.f(v(t))}}),U){var vt=!c||f((function(){var t=B();return"[null]"!=U([t])||"{}"!=U({a:t})||"{}"!=U(Object(t))}));r({target:"JSON",stat:!0,forced:vt},{stringify:function(t,e,n){var r,i=[t],s=1;while(arguments.length>s)i.push(arguments[s++]);if(r=e,(h(e)||void 0!==t)&&!at(t))return l(e)||(e=function(t,e){if("function"==typeof r&&(e=r.call(this,t,e)),!at(e))return e}),i[1]=e,U.apply(null,i)}})}B[G][q]||E(B[G],q,B[G].valueOf),M(B,R),P[F]=!0},a640:function(t,e,n){"use strict";var r=n("d039");t.exports=function(t,e){var n=[][t];return!!n&&r((function(){n.call(null,e||function(){throw 1},1)}))}},a9e3:function(t,e,n){"use strict";var r=n("83ab"),i=n("da84"),s=n("94ca"),o=n("6eeb"),a=n("5135"),c=n("c6b6"),u=n("7156"),f=n("c04e"),d=n("d039"),l=n("7c73"),h=n("241c").f,p=n("06cf").f,v=n("9bf2").f,b=n("58a8").trim,y="Number",m=i[y],g=m.prototype,w=c(l(g))==y,x=function(t){var e,n,r,i,s,o,a,c,u=f(t,!1);if("string"==typeof u&&u.length>2)if(u=b(u),e=u.charCodeAt(0),43===e||45===e){if(n=u.charCodeAt(2),88===n||120===n)return NaN}else if(48===e){switch(u.charCodeAt(1)){case 66:case 98:r=2,i=49;break;case 79:case 111:r=8,i=55;break;default:return+u}for(s=u.slice(2),o=s.length,a=0;a<o;a++)if(c=s.charCodeAt(a),c<48||c>i)return NaN;return parseInt(s,r)}return+u};if(s(y,!m(" 0o1")||!m("0b1")||m("+0x1"))){for(var _,O=function(t){var e=arguments.length<1?0:t,n=this;return n instanceof O&&(w?d((function(){g.valueOf.call(n)})):c(n)!=y)?u(new m(x(e)),n,O):x(e)},S=r?h(m):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(","),C=0;S.length>C;C++)a(m,_=S[C])&&!a(O,_)&&v(O,_,p(m,_));O.prototype=g,g.constructor=O,o(i,y,O)}},ae40:function(t,e,n){var r=n("83ab"),i=n("d039"),s=n("5135"),o=Object.defineProperty,a={},c=function(t){throw t};t.exports=function(t,e){if(s(a,t))return a[t];e||(e={});var n=[][t],u=!!s(e,"ACCESSORS")&&e.ACCESSORS,f=s(e,0)?e[0]:c,d=s(e,1)?e[1]:void 0;return a[t]=!!n&&!i((function(){if(u&&!r)return!0;var t={length:-1};u?o(t,1,{enumerable:!0,get:c}):t[1]=1,n.call(t,f,d)}))}},b64b:function(t,e,n){var r=n("23e7"),i=n("7b0b"),s=n("df75"),o=n("d039"),a=o((function(){s(1)}));r({target:"Object",stat:!0,forced:a},{keys:function(t){return s(i(t))}})},b727:function(t,e,n){var r=n("0366"),i=n("44ad"),s=n("7b0b"),o=n("50c4"),a=n("65f0"),c=[].push,u=function(t){var e=1==t,n=2==t,u=3==t,f=4==t,d=6==t,l=5==t||d;return function(h,p,v,b){for(var y,m,g=s(h),w=i(g),x=r(p,v,3),_=o(w.length),O=0,S=b||a,C=e?S(h,_):n?S(h,0):void 0;_>O;O++)if((l||O in w)&&(y=w[O],m=x(y,O,g),t))if(e)C[O]=m;else if(m)switch(t){case 3:return!0;case 5:return y;case 6:return O;case 2:c.call(C,y)}else if(f)return!1;return d?-1:u||f?f:C}};t.exports={forEach:u(0),map:u(1),filter:u(2),some:u(3),every:u(4),find:u(5),findIndex:u(6)}},dbb4:function(t,e,n){var r=n("23e7"),i=n("83ab"),s=n("56ef"),o=n("fc6a"),a=n("06cf"),c=n("8418");r({target:"Object",stat:!0,sham:!i},{getOwnPropertyDescriptors:function(t){var e,n,r=o(t),i=a.f,u=s(r),f={},d=0;while(u.length>d)n=i(r,e=u[d++]),void 0!==n&&c(f,e,n);return f}})},e439:function(t,e,n){var r=n("23e7"),i=n("d039"),s=n("fc6a"),o=n("06cf").f,a=n("83ab"),c=i((function(){o(1)})),u=!a||c;r({target:"Object",stat:!0,forced:u,sham:!a},{getOwnPropertyDescriptor:function(t,e){return o(s(t),e)}})},e538:function(t,e,n){var r=n("b622");e.f=r},e8b5:function(t,e,n){var r=n("c6b6");t.exports=Array.isArray||function(t){return"Array"==r(t)}},fdbc:function(t,e){t.exports={CSSRuleList:0,CSSStyleDeclaration:0,CSSValueList:0,ClientRectList:0,DOMRectList:0,DOMStringList:0,DOMTokenList:1,DataTransferItemList:0,FileList:0,HTMLAllCollection:0,HTMLCollection:0,HTMLFormElement:0,HTMLSelectElement:0,MediaList:0,MimeTypeArray:0,NamedNodeMap:0,NodeList:1,PaintRequestList:0,Plugin:0,PluginArray:0,SVGLengthList:0,SVGNumberList:0,SVGPathSegList:0,SVGPointList:0,SVGStringList:0,SVGTransformList:0,SourceBufferList:0,StyleSheetList:0,TextTrackCueList:0,TextTrackList:0,TouchList:0}}}]);
//# sourceMappingURL=chunk-a83e3242.e0adb176.js.map