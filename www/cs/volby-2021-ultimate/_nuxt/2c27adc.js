(window.webpackJsonp=window.webpackJsonp||[]).push([[8,2],{292:function(t,e,n){"use strict";n.r(e);var r=n(293),c=n.n(r);for(var o in r)["default"].indexOf(o)<0&&function(t){n.d(e,t,(function(){return r[t]}))}(o);e.default=c.a},293:function(t,e,n){var i,s,r,c,a,o;i=window,s=document,r="script",c="ga",i.GoogleAnalyticsObject=c,i.ga=i.ga||function(){(i.ga.q=i.ga.q||[]).push(arguments)},i.ga.l=1*new Date,a=s.createElement(r),o=s.getElementsByTagName(r)[0],a.async=1,a.src="https://www.google-analytics.com/analytics.js",o.parentNode.insertBefore(a,o),ga("create","UA-8592359-7","auto"),ga("send","pageview"),function(t,e,n){(e[n]=e[n]||[]).push((function(){try{e.yaCounter35615280=new Ya.Metrika({id:35615280,clickmap:!0,trackLinks:!0,accurateTrackBounce:!0,webvisor:!0})}catch(t){}}));var r=t.getElementsByTagName("script")[0],s=t.createElement("script"),c=function(){r.parentNode.insertBefore(s,r)};s.type="text/javascript",s.async=!0,s.src="https://mc.yandex.ru/metrika/watch.js","[object Opera]"==e.opera?t.addEventListener("DOMContentLoaded",c,!1):c()}(document,window,"yandex_metrika_callbacks")},294:function(t,e,n){var content=n(297);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,n(46).default)("0143b4dd",content,!0,{sourceMap:!1})},295:function(t,e,n){"use strict";n.r(e);var r=n(300),c=n(292);for(var o in c)["default"].indexOf(o)<0&&function(t){n.d(e,t,(function(){return c[t]}))}(o);n(296);var l=n(18),component=Object(l.a)(c.default,r.a,r.b,!1,null,"fe6a06ee",null);e.default=component.exports},296:function(t,e,n){"use strict";n(294)},297:function(t,e,n){var r=n(45)(!1);r.push([t.i,".no-height[data-v-fe6a06ee]{max-height:0}",""]),t.exports=r},300:function(t,e,n){"use strict";n.d(e,"a",(function(){return r})),n.d(e,"b",(function(){return c}));var r=function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},c=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"no-height"},[n("iframe",{attrs:{src:"https://a.volebnikalkulacka.cz/session/",width:"0",height:"0",frameborder:"0"}}),t._v(" "),n("noscript",[n("div",[n("img",{staticStyle:{position:"absolute",left:"-9999px"},attrs:{src:"https://mc.yandex.ru/watch/35615280",alt:""}})])])])}]},317:function(t,e,n){var content=n(331);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,n(46).default)("62ccb236",content,!0,{sourceMap:!1})},330:function(t,e,n){"use strict";n(317)},331:function(t,e,n){var r=n(45)(!1);r.push([t.i,".page[data-v-8a34709a]{min-height:calc(100vh - 58px)}",""]),t.exports=r},357:function(t,e,n){"use strict";n.r(e);var r=n(4),c=(n(30),n(34),n(28),{asyncData:function(t){return Object(r.a)(regeneratorRuntime.mark((function e(){var n,r;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.$content,e.next=3,n("questions_ultimate").fetch();case 3:return r=e.sent,e.abrupt("return",{questions:r});case 5:case"end":return e.stop()}}),e)})))()},head:function(){return{title:"Volební kalkulačka 2021 - důležité otázky",meta:[{hid:"extra",name:"Důležité otázky",description:"Volební kalkulačka 2021 - důležité otázky"}]}},computed:{answered:function(){var t=this,e={};return this.questions.forEach((function(n){var a=t.$store.getters.getAnswer(n.id);1==Math.abs(a)?e[n.id]=!0:e[n.id]=!1})),e},weights:function(){return this.$store.getters.getWeights},zeroAnswers:function(){return 0==Object.keys(this.$store.getters.getAnswers)}},methods:{answer:function(t){var a=this.$store.getters.getAnswer(t);return 1==a?"Ano":-1==a?"Ne":""},next:function(){this.$store.commit("storeWeights",this.weights)}},components:{Analytics:n(295).default}}),o=(n(330),n(18)),component=Object(o.a)(c,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"page"},[n("div",{staticClass:"container"},[n("h4",{staticClass:"p-2"},[t._v("\n      Vyberte otázky, které jsou pro vás extra důležité:\n    ")]),t._v(" "),t.zeroAnswers?t._e():n("div",[n("div",{staticClass:"d-grid p-2"},[n("NuxtLink",{staticClass:"btn btn-secondary",attrs:{to:"/compare/"},nativeOn:{click:function(e){return t.next.apply(null,arguments)}}},[t._v(">> Přeskočit >>")])],1),t._v(" "),t._l(t.questions,(function(e){return n("div",{key:e.id,staticClass:"list-group"},[t.answered[e.id]?n("div",{staticClass:"list-group-item list-group-item-action m-1"},[n("label",{staticClass:"checkbox inline"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.weights[e.id],expression:"weights[question.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(t.weights[e.id])?t._i(t.weights[e.id],null)>-1:t.weights[e.id]},on:{change:function(n){var r=t.weights[e.id],c=n.target,o=!!c.checked;if(Array.isArray(r)){var l=t._i(r,null);c.checked?l<0&&t.$set(t.weights,e.id,r.concat([null])):l>-1&&t.$set(t.weights,e.id,r.slice(0,l).concat(r.slice(l+1)))}else t.$set(t.weights,e.id,o)}}}),t._v("\n              "+t._s(e.name)+" "),n("small",[t._v("("+t._s(t.answer(e.id))+")")])])]):t._e()])}))],2),t._v(" "),t.zeroAnswers?n("div",[n("div",{staticClass:"alert alert-warning",attrs:{role:"alert"}},[t._v("\n        Nejsou odpovězené žádné otázky:"),n("br"),t._v(" "),n("NuxtLink",{attrs:{to:"/question/1/"}},[t._v("Spustit Volební kalkulačku od začátku")])],1)]):t._e(),t._v(" "),n("div",{staticClass:"d-grid p-2"},[n("NuxtLink",{staticClass:"btn btn-primary",attrs:{to:"/compare/"},nativeOn:{click:function(e){return t.next.apply(null,arguments)}}},[t._v(">> Dále >>")])],1)]),t._v(" "),n("Analytics")],1)}),[],!1,null,"8a34709a",null);e.default=component.exports;installComponents(component,{Analytics:n(295).default})}}]);