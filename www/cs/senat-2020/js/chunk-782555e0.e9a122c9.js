(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-782555e0","chunk-1714c308"],{"036c":function(t,e,r){"use strict";r.r(e);var n=function(){var t=this,e=t.$createElement,r=t._self._c||e;return t.results[t.index]?r("div",{staticClass:"modal-dialog modal-lg"},[r("div",{staticClass:"modal-content"},[r("div",{staticClass:"modal-header row m-2"},[t._m(0),r("div",{staticClass:"card col-12"},[r("div",{staticClass:"card-body pb-1"},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-8"},[r("h4",{staticClass:"card-title"},[t._v(t._s(t.results[t.index].info.name))]),r("div",{staticClass:"card-text"},[r("span",[t._v(t._s(t.results[t.index].info.party))]),r("br")]),r("div",{staticClass:"card-text text-muted"},[t._v(t._s(t.$t("match"))+": "+t._s(t.results[t.index].result_percent)+"%")])]),r("div",{staticClass:"col-4 text-right"})])])]),r("button",{staticClass:"btn btn-secondary btn-lg btn-block mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])]),r("div",{staticClass:"modal-body"},[r("table",{staticClass:"table-striped w-100"},[r("thead",[r("th",{staticClass:"text-left"},[t._v(" "+t._s(t.$t("question"))+" ")]),r("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("me"))+" ")]),r("th",{staticClass:"text-center"},[t._v(" x ")]),r("th",{staticClass:"text-center"},[t._v(" "+t._s(t.results[t.index].info.name)+" ")]),r("th",{staticClass:"text-center"},[t._v(" "+t._s(t.$t("candidate_comment"))+" ")])]),r("tbody",t._l(t.questions,(function(e,n){return r("tr",{key:n,class:[t.compared(t.answers[e.id],t.results[t.index]["info"]["votes"][e.id]),t.weighted(t.weights[e.id])]},[r("td",[t.weights[e.id]?r("i",{staticClass:"fa fa-star"}):t._e(),t.weights[e.id]?r("font-awesome-icon",{attrs:{icon:"star"}}):t._e(),t._v(" "+t._s(e.name)+" "),r("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:e.question,expression:"question.question",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}})],1),r("td",{staticClass:"text-center"},[t._v(" "+t._s(t.answer2Text(t.answers[e.id]))+" ")]),r("td",{staticClass:"text-center"},[t._v(" "+t._s(t.compare(t.answers[e.id],t.results[t.index]["info"]["votes"][e.id]))+" ")]),r("td",{staticClass:"text-center"},[t._v(" "+t._s(t.answer2TextThem(t.results[t.index]["info"]["votes"][e.id]))+" ")]),r("td",{staticClass:"text-center comment p-2"},[t._v(" "+t._s(t.shortenText(t.results[t.index]["info"]["details"][e.id]))+" "),t.shortened(t.results[t.index]["info"]["details"][e.id])?r("font-awesome-icon",{directives:[{name:"b-popover",rawName:"v-b-popover.hover.top",value:t.results[t.index]["info"]["details"][e.id],expression:"results[index]['info']['details'][question.id]",modifiers:{hover:!0,top:!0}}],attrs:{icon:"info-circle"}}):t._e()],1)])})),0)])]),r("div",{staticClass:"modal-footer"},[r("button",{staticClass:"btn btn-secondary btn-lg mt-2",attrs:{type:"button","data-dismiss":"modal"}},[t._v(t._s(t.$t("close")))])])])]):t._e()},i=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[r("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])}],o=r("ecee"),s=r("c074"),a=r("ad3d");o["c"].add(s["a"]),o["c"].add(s["c"]),o["c"].add(s["e"]);var c={props:["index","questions","results","answers","weights"],mounted:function(){"undefined"!==typeof $&&$((function(){$('[data-toggle="popover"]').popover()}))},computed:{stars:function(){var t=Math.floor(this.results[this.index].rating),e=0;t<this.results[this.index].rating&&(e=1);var r=5-t-e;return{full:t,half:e,empty:r}}},methods:{send:function(t){return t},answer2Text:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know"):"--"},answer2TextThem:function(t){return 1===t?this.$t("yes"):-1===t?this.$t("no"):0===t?this.$t("dont_know_them"):"--"},compare:function(t,e){return t*e===-1?"x":""},compared:function(t,e){return void 0===t?"text-muted":t*e===-1?"text-danger":t*e===1?"text-success":""},weighted:function(t){return t?"strong":""},shortenText:function(t){if(!t)return"";var e=window.innerWidth,r=0;return r=e<576?20:400,t.length>r?t.substr(0,r-3)+"...":t},shortened:function(t){if(!t)return!1;var e=window.innerWidth,r=0;return r=e<576?20:400,t.length>r}},components:{"font-awesome-icon":a["a"]}},u=c,f=(r("57f8"),r("2877")),d=Object(f["a"])(u,n,i,!1,null,"58702377",null);e["default"]=d.exports},"057f":function(t,e,r){var n=r("fc6a"),i=r("241c").f,o={}.toString,s="object"==typeof window&&window&&Object.getOwnPropertyNames?Object.getOwnPropertyNames(window):[],a=function(t){try{return i(t)}catch(e){return s.slice()}};t.exports.f=function(t){return s&&"[object Window]"==o.call(t)?a(t):i(n(t))}},"0c37":function(t,e,r){},"159b":function(t,e,r){var n=r("da84"),i=r("fdbc"),o=r("17c2"),s=r("9112");for(var a in i){var c=n[a],u=c&&c.prototype;if(u&&u.forEach!==o)try{s(u,"forEach",o)}catch(f){u.forEach=o}}},"17c2":function(t,e,r){"use strict";var n=r("b727").forEach,i=r("a640"),o=r("ae40"),s=i("forEach"),a=o("forEach");t.exports=s&&a?[].forEach:function(t){return n(this,t,arguments.length>1?arguments[1]:void 0)}},"1dde":function(t,e,r){var n=r("d039"),i=r("b622"),o=r("2d00"),s=i("species");t.exports=function(t){return o>=51||!n((function(){var e=[],r=e.constructor={};return r[s]=function(){return{foo:1}},1!==e[t](Boolean).foo}))}},4160:function(t,e,r){"use strict";var n=r("23e7"),i=r("17c2");n({target:"Array",proto:!0,forced:[].forEach!=i},{forEach:i})},"4de4":function(t,e,r){"use strict";var n=r("23e7"),i=r("b727").filter,o=r("1dde"),s=r("ae40"),a=o("filter"),c=s("filter");n({target:"Array",proto:!0,forced:!a||!c},{filter:function(t){return i(this,t,arguments.length>1?arguments[1]:void 0)}})},5530:function(t,e,r){"use strict";r.d(e,"a",(function(){return o}));r("a4d3"),r("4de4"),r("4160"),r("e439"),r("dbb4"),r("b64b"),r("159b");function n(t,e,r){return e in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function i(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function o(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?i(Object(r),!0).forEach((function(e){n(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):i(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}},"57f8":function(t,e,r){"use strict";var n=r("0c37"),i=r.n(n);i.a},"65f0":function(t,e,r){var n=r("861d"),i=r("e8b5"),o=r("b622"),s=o("species");t.exports=function(t,e){var r;return i(t)&&(r=t.constructor,"function"!=typeof r||r!==Array&&!i(r.prototype)?n(r)&&(r=r[s],null===r&&(r=void 0)):r=void 0),new(void 0===r?Array:r)(0===e?0:e)}},"746f":function(t,e,r){var n=r("428f"),i=r("5135"),o=r("e538"),s=r("9bf2").f;t.exports=function(t){var e=n.Symbol||(n.Symbol={});i(e,t)||s(e,t,{value:o.f(t)})}},8418:function(t,e,r){"use strict";var n=r("c04e"),i=r("9bf2"),o=r("5c6c");t.exports=function(t,e,r){var s=n(e);s in t?i.f(t,s,o(0,r)):t[s]=r}},a4d3:function(t,e,r){"use strict";var n=r("23e7"),i=r("da84"),o=r("d066"),s=r("c430"),a=r("83ab"),c=r("4930"),u=r("fdbf"),f=r("d039"),d=r("5135"),l=r("e8b5"),b=r("861d"),v=r("825a"),p=r("7b0b"),h=r("fc6a"),m=r("c04e"),y=r("5c6c"),g=r("7c73"),w=r("df75"),x=r("241c"),O=r("057f"),_=r("7418"),S=r("06cf"),C=r("9bf2"),j=r("d1e7"),L=r("9112"),P=r("6eeb"),T=r("5692"),E=r("f772"),$=r("d012"),k=r("90e3"),A=r("b622"),D=r("e538"),M=r("746f"),N=r("d44e"),q=r("69f3"),V=r("b727").forEach,G=E("hidden"),R="Symbol",F="prototype",H=A("toPrimitive"),J=q.set,I=q.getterFor(R),W=Object[F],B=i.Symbol,Q=o("JSON","stringify"),z=S.f,K=C.f,U=O.f,X=j.f,Y=T("symbols"),Z=T("op-symbols"),tt=T("string-to-symbol-registry"),et=T("symbol-to-string-registry"),rt=T("wks"),nt=i.QObject,it=!nt||!nt[F]||!nt[F].findChild,ot=a&&f((function(){return 7!=g(K({},"a",{get:function(){return K(this,"a",{value:7}).a}})).a}))?function(t,e,r){var n=z(W,e);n&&delete W[e],K(t,e,r),n&&t!==W&&K(W,e,n)}:K,st=function(t,e){var r=Y[t]=g(B[F]);return J(r,{type:R,tag:t,description:e}),a||(r.description=e),r},at=u?function(t){return"symbol"==typeof t}:function(t){return Object(t)instanceof B},ct=function(t,e,r){t===W&&ct(Z,e,r),v(t);var n=m(e,!0);return v(r),d(Y,n)?(r.enumerable?(d(t,G)&&t[G][n]&&(t[G][n]=!1),r=g(r,{enumerable:y(0,!1)})):(d(t,G)||K(t,G,y(1,{})),t[G][n]=!0),ot(t,n,r)):K(t,n,r)},ut=function(t,e){v(t);var r=h(e),n=w(r).concat(vt(r));return V(n,(function(e){a&&!dt.call(r,e)||ct(t,e,r[e])})),t},ft=function(t,e){return void 0===e?g(t):ut(g(t),e)},dt=function(t){var e=m(t,!0),r=X.call(this,e);return!(this===W&&d(Y,e)&&!d(Z,e))&&(!(r||!d(this,e)||!d(Y,e)||d(this,G)&&this[G][e])||r)},lt=function(t,e){var r=h(t),n=m(e,!0);if(r!==W||!d(Y,n)||d(Z,n)){var i=z(r,n);return!i||!d(Y,n)||d(r,G)&&r[G][n]||(i.enumerable=!0),i}},bt=function(t){var e=U(h(t)),r=[];return V(e,(function(t){d(Y,t)||d($,t)||r.push(t)})),r},vt=function(t){var e=t===W,r=U(e?Z:h(t)),n=[];return V(r,(function(t){!d(Y,t)||e&&!d(W,t)||n.push(Y[t])})),n};if(c||(B=function(){if(this instanceof B)throw TypeError("Symbol is not a constructor");var t=arguments.length&&void 0!==arguments[0]?String(arguments[0]):void 0,e=k(t),r=function(t){this===W&&r.call(Z,t),d(this,G)&&d(this[G],e)&&(this[G][e]=!1),ot(this,e,y(1,t))};return a&&it&&ot(W,e,{configurable:!0,set:r}),st(e,t)},P(B[F],"toString",(function(){return I(this).tag})),P(B,"withoutSetter",(function(t){return st(k(t),t)})),j.f=dt,C.f=ct,S.f=lt,x.f=O.f=bt,_.f=vt,D.f=function(t){return st(A(t),t)},a&&(K(B[F],"description",{configurable:!0,get:function(){return I(this).description}}),s||P(W,"propertyIsEnumerable",dt,{unsafe:!0}))),n({global:!0,wrap:!0,forced:!c,sham:!c},{Symbol:B}),V(w(rt),(function(t){M(t)})),n({target:R,stat:!0,forced:!c},{for:function(t){var e=String(t);if(d(tt,e))return tt[e];var r=B(e);return tt[e]=r,et[r]=e,r},keyFor:function(t){if(!at(t))throw TypeError(t+" is not a symbol");if(d(et,t))return et[t]},useSetter:function(){it=!0},useSimple:function(){it=!1}}),n({target:"Object",stat:!0,forced:!c,sham:!a},{create:ft,defineProperty:ct,defineProperties:ut,getOwnPropertyDescriptor:lt}),n({target:"Object",stat:!0,forced:!c},{getOwnPropertyNames:bt,getOwnPropertySymbols:vt}),n({target:"Object",stat:!0,forced:f((function(){_.f(1)}))},{getOwnPropertySymbols:function(t){return _.f(p(t))}}),Q){var pt=!c||f((function(){var t=B();return"[null]"!=Q([t])||"{}"!=Q({a:t})||"{}"!=Q(Object(t))}));n({target:"JSON",stat:!0,forced:pt},{stringify:function(t,e,r){var n,i=[t],o=1;while(arguments.length>o)i.push(arguments[o++]);if(n=e,(b(e)||void 0!==t)&&!at(t))return l(e)||(e=function(t,e){if("function"==typeof n&&(e=n.call(this,t,e)),!at(e))return e}),i[1]=e,Q.apply(null,i)}})}B[F][H]||L(B[F],H,B[F].valueOf),N(B,R),$[G]=!0},a640:function(t,e,r){"use strict";var n=r("d039");t.exports=function(t,e){var r=[][t];return!!r&&n((function(){r.call(null,e||function(){throw 1},1)}))}},ae40:function(t,e,r){var n=r("83ab"),i=r("d039"),o=r("5135"),s=Object.defineProperty,a={},c=function(t){throw t};t.exports=function(t,e){if(o(a,t))return a[t];e||(e={});var r=[][t],u=!!o(e,"ACCESSORS")&&e.ACCESSORS,f=o(e,0)?e[0]:c,d=o(e,1)?e[1]:void 0;return a[t]=!!r&&!i((function(){if(u&&!n)return!0;var t={length:-1};u?s(t,1,{enumerable:!0,get:c}):t[1]=1,r.call(t,f,d)}))}},b64b:function(t,e,r){var n=r("23e7"),i=r("7b0b"),o=r("df75"),s=r("d039"),a=s((function(){o(1)}));n({target:"Object",stat:!0,forced:a},{keys:function(t){return o(i(t))}})},b727:function(t,e,r){var n=r("0366"),i=r("44ad"),o=r("7b0b"),s=r("50c4"),a=r("65f0"),c=[].push,u=function(t){var e=1==t,r=2==t,u=3==t,f=4==t,d=6==t,l=5==t||d;return function(b,v,p,h){for(var m,y,g=o(b),w=i(g),x=n(v,p,3),O=s(w.length),_=0,S=h||a,C=e?S(b,O):r?S(b,0):void 0;O>_;_++)if((l||_ in w)&&(m=w[_],y=x(m,_,g),t))if(e)C[_]=y;else if(y)switch(t){case 3:return!0;case 5:return m;case 6:return _;case 2:c.call(C,m)}else if(f)return!1;return d?-1:u||f?f:C}};t.exports={forEach:u(0),map:u(1),filter:u(2),some:u(3),every:u(4),find:u(5),findIndex:u(6)}},dbb4:function(t,e,r){var n=r("23e7"),i=r("83ab"),o=r("56ef"),s=r("fc6a"),a=r("06cf"),c=r("8418");n({target:"Object",stat:!0,sham:!i},{getOwnPropertyDescriptors:function(t){var e,r,n=s(t),i=a.f,u=o(n),f={},d=0;while(u.length>d)r=i(n,e=u[d++]),void 0!==r&&c(f,e,r);return f}})},e439:function(t,e,r){var n=r("23e7"),i=r("d039"),o=r("fc6a"),s=r("06cf").f,a=r("83ab"),c=i((function(){s(1)})),u=!a||c;n({target:"Object",stat:!0,forced:u,sham:!a},{getOwnPropertyDescriptor:function(t,e){return s(o(t),e)}})},e538:function(t,e,r){var n=r("b622");e.f=n},e8b5:function(t,e,r){var n=r("c6b6");t.exports=Array.isArray||function(t){return"Array"==n(t)}},fdbc:function(t,e){t.exports={CSSRuleList:0,CSSStyleDeclaration:0,CSSValueList:0,ClientRectList:0,DOMRectList:0,DOMStringList:0,DOMTokenList:1,DataTransferItemList:0,FileList:0,HTMLAllCollection:0,HTMLCollection:0,HTMLFormElement:0,HTMLSelectElement:0,MediaList:0,MimeTypeArray:0,NamedNodeMap:0,NodeList:1,PaintRequestList:0,Plugin:0,PluginArray:0,SVGLengthList:0,SVGNumberList:0,SVGPathSegList:0,SVGPointList:0,SVGStringList:0,SVGTransformList:0,SourceBufferList:0,StyleSheetList:0,TextTrackCueList:0,TextTrackList:0,TouchList:0}}}]);
//# sourceMappingURL=chunk-782555e0.e9a122c9.js.map