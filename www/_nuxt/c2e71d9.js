(window.webpackJsonp=window.webpackJsonp||[]).push([[5,2],{291:function(t,e,r){"use strict";r.r(e);var n=r(292),c=r.n(n);for(var o in n)["default"].indexOf(o)<0&&function(t){r.d(e,t,(function(){return n[t]}))}(o);e.default=c.a},292:function(t,e,r){var n,c,s,u,a,b;n=window,c=document,s="script",u="Darujme",n.DarujmeObject=u,n[u]=n[u]||function(){(n[u].q=n[u].q||[]).push(arguments)},a=c.createElement(s),b=c.getElementsByTagName(s)[0],a.async=1,a.src="https://www.darujme.cz/assets/scripts/widget.js",b.parentNode.insertBefore(a,b)},293:function(t,e,r){"use strict";r.r(e);var n=r(294),c=r(291);for(var o in c)["default"].indexOf(o)<0&&function(t){r.d(e,t,(function(){return c[t]}))}(o);var l=r(14),component=Object(l.a)(c.default,n.a,n.b,!1,null,null,null);e.default=component.exports},294:function(t,e,r){"use strict";r.d(e,"a",(function(){return n})),r.d(e,"b",(function(){return c}));var n=function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},c=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{attrs:{"data-darujme-widget-token":"w2acrk0w61fgr3so"}},[t._v(" ")]),t._v(" "),r("iframe",{staticStyle:{width:"100%","max-width":"100%",overflow:"hidden",border:"1px solid rgb(220, 220, 220)","box-shadow":"rgba(0, 0, 0, 0.09) 0px 2px 18px 0px",height:"327px"},attrs:{src:"https://www.darujme.cz/widget?token=w2acrk0w61fgr3so",scrolling:"no",name:"widget-w2acrk0w61fgr3so",width:"100%",height:"327"}})])}]},299:function(t,e,r){var content=r(307);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(43).default)("2760cadb",content,!0,{sourceMap:!1})},306:function(t,e,r){"use strict";r(299)},307:function(t,e,r){var n=r(42)(!1);n.push([t.i,".page[data-v-4f4ed1aa]{min-height:calc(100vh - 58px);max-width:666px}",""]),t.exports=n},326:function(t,e,r){"use strict";r.r(e);var n=r(6),c=(r(30),r(44),{head:function(){return{title:"Archiv Volebních kalkulaček",meta:[{hid:"archive",name:"Archiv Volebních kalkulaček",description:"Archiv Volebních kalkulaček od roku 2006."}]}},asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.$content,e.next=3,r("list").fetch();case 3:return n=e.sent,e.abrupt("return",{list:n});case 5:case"end":return e.stop()}}),e)})))()},computed:{reordered:function(){var t={},e=0;return this.list.body.forEach((function(r){r.year!=e&&(e=r.year,t[e]=[]),t[e].push(r)})),t}}}),o=(r(306),r(14)),component=Object(o.a)(c,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"page container"},[r("h2",{staticClass:"pt-2"},[t._v("Archiv Volebních kalkulaček")]),t._v(" "),t._m(0),t._v(" "),t._l(t.reordered,(function(e,n){return r("ul",{key:n,staticClass:"list-group"},[r("h3",[t._v(t._s(n))]),t._v(" "),t._l(e,(function(e,i){return r("li",{key:i,staticClass:"list-group-item"},[r("a",{attrs:{href:e.link}},[t._v(t._s(e.name))])])}))],2)})),t._v(" "),t._m(1),t._v(" "),r("hr"),t._v(" "),r("Darujme")],2)}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"alert alert-secondary"},[t._v("\n     Upozornění: Starší Volební kalkulačky nemusejí fungovat z důvodu přechodu z "),r("em",[t._v("http")]),t._v(" na "),r("em",[t._v("https")]),t._v(". "),r("br"),t._v("\n     Provoz starších kalkulaček je také omezet s ohledem na lepší funkčnost aktuálních kalkulaček."),r("br"),t._v("\n     Pro starší kalkulačky můžete použít "),r("a",{attrs:{href:"https://web.archive.org/web/20120928033314/http://volebnikalkulacka.cz/"}},[t._v("Archive.org")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"alert alert-info mt-4"},[r("a",{staticClass:"alert-link",attrs:{href:"https://volebnakalkulacka.sk/archive/"}},[t._v("Archív slovenských Volebných kalkulačiek.")])])}],!1,null,"4f4ed1aa",null);e.default=component.exports;installComponents(component,{Darujme:r(293).default})}}]);