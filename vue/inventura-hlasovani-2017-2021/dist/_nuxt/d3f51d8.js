(window.webpackJsonp=window.webpackJsonp||[]).push([[13,2,4],{293:function(t,e,r){"use strict";r.r(e);var n=r(294),o=r.n(n);for(var c in n)["default"].indexOf(c)<0&&function(t){r.d(e,t,(function(){return n[t]}))}(c);e.default=o.a},294:function(t,e,r){var n,o,s,u,a,b;n=window,o=document,s="script",u="Darujme",n.DarujmeObject=u,n[u]=n[u]||function(){(n[u].q=n[u].q||[]).push(arguments)},a=o.createElement(s),b=o.getElementsByTagName(s)[0],a.async=1,a.src="https://www.darujme.cz/assets/scripts/widget.js",b.parentNode.insertBefore(a,b)},296:function(t,e,r){"use strict";r.r(e);var n=r(300),o=r(293);for(var c in o)["default"].indexOf(c)<0&&function(t){r.d(e,t,(function(){return o[t]}))}(c);var l=r(14),component=Object(l.a)(o.default,n.a,n.b,!1,null,null,null);e.default=component.exports},299:function(t,e,r){var content=r(308);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(46).default)("5c5be2b8",content,!0,{sourceMap:!1})},300:function(t,e,r){"use strict";r.d(e,"a",(function(){return n})),r.d(e,"b",(function(){return o}));var n=function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},o=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{attrs:{"data-darujme-widget-token":"w2acrk0w61fgr3so"}},[t._v(" ")]),t._v(" "),r("iframe",{staticStyle:{width:"100%","max-width":"100%",overflow:"hidden",border:"1px solid rgb(220, 220, 220)","box-shadow":"rgba(0, 0, 0, 0.09) 0px 2px 18px 0px",height:"327px"},attrs:{src:"https://www.darujme.cz/widget?token=w2acrk0w61fgr3so",scrolling:"no",name:"widget-w2acrk0w61fgr3so",width:"100%",height:"327"}})])}]},302:function(t,e,r){"use strict";var n=r(2),o=r(74),c=r(27),l=r(17),f=r(9),d=r(5),h=r(303),v=r(140),w=r(304),m=r(305),_=r(73),x=r(306),k=[],C=k.sort,y=d((function(){k.sort(void 0)})),S=d((function(){k.sort(null)})),M=v("sort"),$=!d((function(){if(_)return _<70;if(!(w&&w>3)){if(m)return!0;if(x)return x<603;var code,t,e,r,n="";for(code=65;code<76;code++){switch(t=String.fromCharCode(code),code){case 66:case 69:case 70:case 72:e=3;break;case 68:case 71:e=4;break;default:e=2}for(r=0;r<47;r++)k.push({k:t+r,v:e})}for(k.sort((function(a,b){return b.v-a.v})),r=0;r<k.length;r++)t=k[r].k.charAt(0),n.charAt(n.length-1)!==t&&(n+=t);return"DGBEFHACIJK"!==n}}));n({target:"Array",proto:!0,forced:y||!S||!M||!$},{sort:function(t){void 0!==t&&o(t);var e=c(this);if($)return void 0===t?C.call(e):C.call(e,t);var r,n,d=[],v=l(e.length);for(n=0;n<v;n++)n in e&&d.push(e[n]);for(r=(d=h(d,function(t){return function(e,r){return void 0===r?-1:void 0===e?1:void 0!==t?+t(e,r)||0:f(e)>f(r)?1:-1}}(t))).length,n=0;n<r;)e[n]=d[n++];for(;n<v;)delete e[n++];return e}})},303:function(t,e){var r=Math.floor,n=function(t,e){var l=t.length,f=r(l/2);return l<8?o(t,e):c(n(t.slice(0,f),e),n(t.slice(f),e),e)},o=function(t,e){for(var element,r,n=t.length,i=1;i<n;){for(r=i,element=t[i];r&&e(t[r-1],element)>0;)t[r]=t[--r];r!==i++&&(t[r]=element)}return t},c=function(t,e,r){for(var n=t.length,o=e.length,c=0,l=0,f=[];c<n||l<o;)c<n&&l<o?f.push(r(t[c],e[l])<=0?t[c++]:e[l++]):f.push(c<n?t[c++]:e[l++]);return f};t.exports=n},304:function(t,e,r){var n=r(59).match(/firefox\/(\d+)/i);t.exports=!!n&&+n[1]},305:function(t,e,r){var n=r(59);t.exports=/MSIE|Trident/.test(n)},306:function(t,e,r){var n=r(59).match(/AppleWebKit\/(\d+)\./);t.exports=!!n&&+n[1]},307:function(t,e,r){"use strict";r(299)},308:function(t,e,r){var n=r(45)(!1);n.push([t.i,".picture[data-v-2c8f9f29]{height:64px;border-radius:50%}.list-group[data-v-2c8f9f29]{cursor:pointer}",""]),t.exports=n},313:function(t,e,r){var content=r(329);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(46).default)("54195a56",content,!0,{sourceMap:!1})},317:function(t,e,r){"use strict";r.r(e);var n={props:["results"],methods:{comparison:function(t){this.$router.push({name:"comparison",params:{candidateId:t}})},createImageLink:function(t){return"/cs/inventura-hlasovani-2017-2021/photos/"+t+".webp"}}},o=(r(307),r(14)),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"container"},[r("h4",{staticClass:"p-2"},[t._v("Moje shoda:")]),t._v(" "),t._l(t.results,(function(e,n){return r("ul",{key:n,staticClass:"list-group"},[r("li",{staticClass:"list-group-item list-group-item-action d-flex",on:{click:function(r){return t.comparison(e.info.id)}}},[r("div",[r("img",{staticClass:"picture mr-2",attrs:{src:t.createImageLink(e.info.id)}})]),t._v(" "),r("div",{staticClass:"ms-2 me-auto"},[r("h3",{staticClass:"fw-bold"},[t._v("\n            "+t._s(e.info.family_name)+" "),r("small",[t._v(t._s(e.info.given_name))])]),t._v("\n          "+t._s(e.info.group)+"\n        ")]),t._v(" "),r("div",{staticClass:"text-primary fw-bold"},[r("h2",[t._v(t._s(e.result_percent)+"%")])])])])}))],2)])}),[],!1,null,"2c8f9f29",null);e.default=component.exports},326:function(t,e,r){r(2)({target:"Math",stat:!0},{sign:r(327)})},327:function(t,e){t.exports=Math.sign||function(t){return 0==(t=+t)||t!=t?t:t<0?-1:1}},328:function(t,e,r){"use strict";r(313)},329:function(t,e,r){var n=r(45)(!1);n.push([t.i,".page[data-v-6140dff7]{min-height:calc(100vh - 58px);max-width:666px}",""]),t.exports=n},350:function(t,e,r){"use strict";r.r(e);var n=r(6),o=(r(30),r(302),r(326),r(35),{asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.$content,e.next=3,r("answers").fetch();case 3:return n=e.sent,e.abrupt("return",{candidates:n});case 5:case"end":return e.stop()}}),e)})))()},data:function(){return{swi:this.$store.getters.getComparableSwitch}},computed:{answers:function(){return this.$store.getters.getAnswers},weights:function(){return this.$store.getters.getWeights},comparables:function(){var t=this,e=[];return this.candidates.forEach((function(r){(t.swi||r.vip)&&e.push(r.id)})),e},results:function(){return this.sortMatch(this.answers,this.weights,this.candidates)},switchText:function(){return this.swi?"Všichni poslanci a poslankyně":"Předsedové stran a klubů"},isChanged:function(){return this.$store.getters.getLocalChanged},saveResultText:function(){return this.isChanged?"Ulozit si svuj vysledek":"Vysledek ulozen"}},methods:{sortMatch:function(t,e,r){var n=this.calcMatch(t,e,r);return n.sort((function(a,b){return b.random-a.random})),n.sort((function(a,b){return b.result-a.result})),n},calcMatch:function(t,e,r){var n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:2,o=[];new Date;for(var c in r){var l=r[c];if(-1!=this.comparables.indexOf(l.id)){var f=this.calcOneMatch(t,e,l.votes,n);f.random=Math.random(),f.id=l.id,f.info=l,o.push(f)}}return new Date,o},calcOneMatch:function(t,e,r,n){var o=0,c=0,l=0;for(var f in t)Math.abs(t[f])>0&&(l=1,e[f]&&(l=n),void 0!==r[f]?(o+=Math.sign(t[f])*r[f]*l,c+=l):c+=l);return 0===c&&(c=1),{result:(1+o/c)/2,result_percent:Math.round((100+100*o/c)/2),rating:Math.round((1+o/c)/2*10)/2,rating5:Math.round((1+o/c)/2*5),random:Math.random()}},isStored:function(){var t=this,e=!1,r=[];return void 0!==window.localStorage.calcs&&(r=JSON.parse(window.localStorage.calcs)),r.forEach((function(r){void 0!==r.answers&void 0!==r.weights&&JSON.stringify(r.answers)==JSON.stringify(t.$store.getters.getAnswers)&JSON.stringify(r.weights)==JSON.stringify(t.$store.getters.getWeights)&&(e=!0)})),e},store:function(){var t=[];void 0!==window.localStorage.calcs&&(t=JSON.parse(window.localStorage.calcs)),void 0===t&&(t=[]);var e=Date.now(),r=new Date(e),n={answers:this.answers,weights:this.weights,name:"Inventura hlasování 2017-2021",date:r.toISOString(),calc:"cz_psp_inventory_2017-2021",version:"0.1"};t.push(n),window.localStorage.calcs=JSON.stringify(t),this.$store.commit("storeLocalStored",!0),this.$store.commit("storeLocalChanged",!1)},saveSwitch:function(){this.$store.commit("storeComparableSwitch",this.swi)},scrollToTop:function(){window.scrollTo(0,0)}},mounted:function(){this.isStored()||(this.$store.getters.getLocalStored?this.$store.commit("storeLocalChanged",!0):(this.store(),this.$store.commit("storeLocalStored",!0),this.$store.commit("storeLocalChanged",!1))),this.scrollToTop()},components:{Darujme:r(296).default}}),c=(r(328),r(14)),component=Object(c.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"page container"},[r("div",{staticClass:"hstack"},[r("div",{staticClass:"form-check form-switch ms-auto pe-2 pt-2"},[r("label",{staticClass:"form-check-label",attrs:{for:"flexSwitchCheckChecked"}},[t._v(" "+t._s(t.switchText))]),t._v(" "),r("input",{directives:[{name:"model",rawName:"v-model",value:t.swi,expression:"swi"}],staticClass:"form-check-input",attrs:{type:"checkbox",id:"flexSwitchCheckChecked"},domProps:{checked:Array.isArray(t.swi)?t._i(t.swi,null)>-1:t.swi},on:{change:[function(e){var r=t.swi,n=e.target,o=!!n.checked;if(Array.isArray(r)){var c=t._i(r,null);n.checked?c<0&&(t.swi=r.concat([null])):c>-1&&(t.swi=r.slice(0,c).concat(r.slice(c+1)))}else t.swi=o},t.saveSwitch]}})])]),t._v(" "),r("ResultsTable",{attrs:{results:t.results}}),t._v(" "),r("hr"),t._v(" "),r("div",{staticClass:"container p-2 "},[r("button",{staticClass:"btn",class:{"disabled btn-secondary":!t.isChanged,"btn-primary":t.isChanged},attrs:{type:"button"},on:{click:function(e){return t.store()}}},[t._v(t._s(t.saveResultText))]),t._v(" "),r("NuxtLink",{attrs:{to:"/me"}},[t._v("Moje kalkulačky")])],1),t._v(" "),r("hr"),t._v(" "),r("Darujme")],1)}),[],!1,null,"6140dff7",null);e.default=component.exports;installComponents(component,{ResultsTable:r(317).default,Darujme:r(296).default})}}]);