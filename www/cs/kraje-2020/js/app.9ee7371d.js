(function(e){function t(t){for(var a,c,u=t[0],s=t[1],i=t[2],l=0,h=[];l<u.length;l++)c=u[l],Object.prototype.hasOwnProperty.call(o,c)&&o[c]&&h.push(o[c][0]),o[c]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(e[a]=s[a]);f&&f(t);while(h.length)h.shift()();return r.push.apply(r,i||[]),n()}function n(){for(var e,t=0;t<r.length;t++){for(var n=r[t],a=!0,c=1;c<n.length;c++){var u=n[c];0!==o[u]&&(a=!1)}a&&(r.splice(t--,1),e=s(s.s=n[0]))}return e}var a={},c={app:0},o={app:0},r=[];function u(e){return s.p+"js/"+({}[e]||e)+"."+{"chunk-03d46e9f":"4e05b051","chunk-59aef098":"223c9cb4","chunk-09b33619":"f302f2fd","chunk-189ec156":"2cbe7c72","chunk-24221c67":"b6dbdf43","chunk-3e747c79":"3204c141","chunk-5d01e9cd":"d279ac2f","chunk-94017678":"57d9beca","chunk-a403c50a":"f1d8c97a","chunk-e0bb05e0":"ab9c9153","chunk-fba36c04":"aef26535","chunk-2988a7aa":"6fbaf5c2","chunk-a83e3242":"e0adb176","chunk-0c476bd4":"1fde3e38","chunk-642cfae6":"91c7f64f","chunk-690dcbf1":"41bca2cb","chunk-5783337b":"6e5bec2d","chunk-71ca49b6":"5b7d734f"}[e]+".js"}function s(t){if(a[t])return a[t].exports;var n=a[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.e=function(e){var t=[],n={"chunk-59aef098":1,"chunk-24221c67":1,"chunk-3e747c79":1,"chunk-94017678":1,"chunk-a403c50a":1,"chunk-2988a7aa":1,"chunk-a83e3242":1,"chunk-0c476bd4":1,"chunk-642cfae6":1,"chunk-690dcbf1":1,"chunk-5783337b":1,"chunk-71ca49b6":1};c[e]?t.push(c[e]):0!==c[e]&&n[e]&&t.push(c[e]=new Promise((function(t,n){for(var a="css/"+({}[e]||e)+"."+{"chunk-03d46e9f":"31d6cfe0","chunk-59aef098":"0ab16a47","chunk-09b33619":"31d6cfe0","chunk-189ec156":"31d6cfe0","chunk-24221c67":"28676553","chunk-3e747c79":"f071d0c2","chunk-5d01e9cd":"31d6cfe0","chunk-94017678":"b235209b","chunk-a403c50a":"d5fba886","chunk-e0bb05e0":"31d6cfe0","chunk-fba36c04":"31d6cfe0","chunk-2988a7aa":"a2b29887","chunk-a83e3242":"5a51c2b0","chunk-0c476bd4":"a9496a17","chunk-642cfae6":"e1870f06","chunk-690dcbf1":"5a51c2b0","chunk-5783337b":"6baedbb8","chunk-71ca49b6":"99f23e14"}[e]+".css",o=s.p+a,r=document.getElementsByTagName("link"),u=0;u<r.length;u++){var i=r[u],l=i.getAttribute("data-href")||i.getAttribute("href");if("stylesheet"===i.rel&&(l===a||l===o))return t()}var h=document.getElementsByTagName("style");for(u=0;u<h.length;u++){i=h[u],l=i.getAttribute("data-href");if(l===a||l===o)return t()}var f=document.createElement("link");f.rel="stylesheet",f.type="text/css",f.onload=t,f.onerror=function(t){var a=t&&t.target&&t.target.src||o,r=new Error("Loading CSS chunk "+e+" failed.\n("+a+")");r.code="CSS_CHUNK_LOAD_FAILED",r.request=a,delete c[e],f.parentNode.removeChild(f),n(r)},f.href=o;var d=document.getElementsByTagName("head")[0];d.appendChild(f)})).then((function(){c[e]=0})));var a=o[e];if(0!==a)if(a)t.push(a[2]);else{var r=new Promise((function(t,n){a=o[e]=[t,n]}));t.push(a[2]=r);var i,l=document.createElement("script");l.charset="utf-8",l.timeout=120,s.nc&&l.setAttribute("nonce",s.nc),l.src=u(e);var h=new Error;i=function(t){l.onerror=l.onload=null,clearTimeout(f);var n=o[e];if(0!==n){if(n){var a=t&&("load"===t.type?"missing":t.type),c=t&&t.target&&t.target.src;h.message="Loading chunk "+e+" failed.\n("+a+": "+c+")",h.name="ChunkLoadError",h.type=a,h.request=c,n[1](h)}o[e]=void 0}};var f=setTimeout((function(){i({type:"timeout",target:l})}),12e4);l.onerror=l.onload=i,document.head.appendChild(l)}return Promise.all(t)},s.m=e,s.c=a,s.d=function(e,t,n){s.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},s.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,t){if(1&t&&(e=s(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)s.d(n,a,function(t){return e[t]}.bind(null,a));return n},s.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return s.d(t,"a",t),t},s.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},s.p="/cs/kraje-2020/",s.oe=function(e){throw console.error(e),e};var i=window["webpackJsonp"]=window["webpackJsonp"]||[],l=i.push.bind(i);i.push=t,i=i.slice();for(var h=0;h<i.length;h++)t(i[h]);var f=l;r.push([0,"chunk-vendors"]),n()})({0:function(e,t,n){e.exports=n("56d7")},"0f13":function(e,t,n){var a={"./Analytics.vue":["f8b4","chunk-e0bb05e0"],"./Constituencies.vue":["69f1","chunk-a403c50a"],"./Darujme.vue":["2c6b","chunk-5d01e9cd"],"./Footer.vue":["fd2d","chunk-189ec156"],"./Header.vue":["0418","chunk-09b33619"],"./HelloWorld.vue":["fdab","chunk-24221c67"],"./Progress.vue":["ad18","chunk-3e747c79"],"./Results.vue":["8169","chunk-fba36c04","chunk-03d46e9f","chunk-a83e3242","chunk-0c476bd4"],"./ResultsModal.vue":["036c","chunk-fba36c04","chunk-690dcbf1"],"./ResultsNoreply.vue":["1153","chunk-94017678"],"./ResultsTable.vue":["2173","chunk-fba36c04","chunk-a83e3242","chunk-5783337b"],"./ResultsWinners.vue":["1dae","chunk-fba36c04","chunk-a83e3242","chunk-71ca49b6"],"./Selection.vue":["54c5","chunk-fba36c04","chunk-03d46e9f","chunk-2988a7aa"],"./Stars.vue":["76e5","chunk-fba36c04","chunk-642cfae6"],"./VAA.vue":["1a3f","chunk-03d46e9f","chunk-59aef098"]};function c(e){if(!n.o(a,e))return Promise.resolve().then((function(){var t=new Error("Cannot find module '"+e+"'");throw t.code="MODULE_NOT_FOUND",t}));var t=a[e],c=t[0];return Promise.all(t.slice(1).map(n.e)).then((function(){return n(c)}))}c.keys=function(){return Object.keys(a)},c.id="0f13",e.exports=c},"1f92":function(e){e.exports=JSON.parse('{"url":"https://volebnikalkulacka.cz/","_url":"http://192.168.1.4:8080/","cookie":"vkid","calc":"kraje-2020","locale":"cs-CZ","_cdn":"http://192.168.1.4/michal/project/volebnikalkulacka.cz/www/","cdn":"https://volebnikalkulacka.azureedge.net/","_path":"vue/kraje-2020/src/","path":"cs/kraje-2020/","save_path":"kraje-2020/","api_path_":"http://localhost:3003/","api_path":"https://api.volebnikalkulacka.cz/","fb_app_id":"200785490055088","pic_path_small":"statics/pictures/64x64/","pic_path_large":"statics/pictures/90x90/"}')},"56d7":function(e,t,n){"use strict";n.r(t),n.d(t,"i18n",(function(){return z}));n("e260"),n("e6cf"),n("cca6"),n("a79d");var a=n("2b0e"),c=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"app"}},[n("router-view")],1)},o=[],r=n("2877"),u={},s=Object(r["a"])(u,c,o,!1,null,null,null),i=s.exports,l=(n("d3b7"),n("8c4f"));function h(e){return function(){return n("0f13")("./".concat(e,".vue"))}}a["default"].use(l["a"]);var f=[{path:"/",name:"VAA",component:h("VAA")},{path:"/constituencies",name:"Constituencies",component:h("Constituencies")},{path:"/selection",name:"Selection",component:h("Selection")},{path:"/results",name:"Results",component:h("Results")}],d=new l["a"]({mode:"history",base:"/cs/kraje-2020/",routes:f}),k=d,p=n("a925"),b=n("5f5b"),v=(n("ab8b"),n("f507"),n("2dd8"),n("2f62"));a["default"].use(v["a"]);var m={count:1,answers:{},weights:{},results:[]},g={getCount:function(e){return e.count},getAnswers:function(e){return e.answers},getWeights:function(e){return e.weights},getResults:function(e){return e.results},getAnswersStored:function(e){return e.answers_stored},getConstituency:function(e){return e.constituency}},y={increment:function(e){e.count++},decrement:function(e){e.count--},addAnswer:function(e,t){e.answers[t.key]=t.value},storeWeights:function(e,t){e.weights=t},storeAnswers:function(e,t){e.answers=t},resetAnswers:function(e){e.answers={}},resetWeights:function(e){e.weights={}},storeResults:function(e,t){e.results=t},storeAnswersStored:function(e,t){e.answers_stored=t},storeConstituency:function(e,t){e.constituency=t}},_={},w=new v["a"].Store({state:m,mutations:y,actions:_,getters:g}),j=n("2b27"),$=n.n(j),S=n("1f92"),O=n("1052"),A=n.n(O),C={install:function(e){e.prototype.$beep=function(){console.log("beep")},e.prototype.$settings=S,e.prototype.$getSetCookie=function(e){var t="";return this.$cookies.isKey(e)?t=this.$cookies.get(e):(t="vk."+Date.now()+"."+Math.round(1e15*Math.random()),this.$cookies.set(e,t,432e6)),t},e.prototype.$clicked=function(e,t){var n=this.$getSetCookie(this.$settings["cookie"]),a={vkid:n,calc:this.$settings["calc"],campaign:e,attributes:t};A.a.get(this.$settings["url"]+this.$settings["save_path"]+"match/click.php",{params:a})},e.prototype.$action=function(e){var t=this.$getSetCookie(this.$settings["cookie"]),n={vkid:t,calc:this.$settings["calc"],action:e};A.a.get(this.$settings["url"]+this.$settings["save_path"]+"match/action.php",{params:n})},e.prototype.$save_results=function(e){var t=this.$getSetCookie(this.$settings["cookie"]),n={vkid:t,calc:this.$settings["calc"],answer:e};A.a.get(this.$settings["url"]+this.$settings["save_path"]+"match/results.php",{params:n})}}},N=C;"undefined"!==typeof window&&window.Vue&&window.Vue.use(C);var P=n("a944"),x=n("1f92");a["default"].config.productionTip=!1,a["default"].use(p["a"]),a["default"].use(b["a"]),a["default"].use($.a),a["default"].use(N);var z=new p["a"]({locale:x["locale"],messages:P});new a["default"]({router:k,store:w,i18n:z,render:function(e){return e(i)}}).$mount("#app")},a944:function(e){e.exports=JSON.parse('{"cs-CZ":{"header_name":"Volební kalkulačka Kraje 2020","YES":"ANO","NO":"NE","yes":"Ano","no":"Ne","dont_know":"Nevím","not_voted":"Nehl.","not_important":"Je mi to jedno","skip":"Přeskočit","result":"Výsledek","back":"Zpět","select_extra_important_questions":"Vyberte otázky, které jsou pro vás extra důležité:","clicking_detailed_match":"Tip: klikněte na jméno strany a dostanete s nimi Vaši podrobnou shodu","match":"Shoda","close":"Zavřít","question":"Otázka","me":"Já","no_replies":"Opakovaně jsme oslovili všechny strany a/nebo jejich centrály, ostatní zatím bohužel na otázky neodpověděly:","fb_1":"Volební kalkulačka Kraje 2020, moje shoda: ","share_on_fb":"Řekněte o tom na ","send_by_email":"Pošlete emailem","email_1":"Zkus si volební kalkulačku Kraje 2020. Ukáže ti strany, které jsou ti postoji nejblíž.","email_2":"\\n\\nVolební kalkulačka je zde:\\nhttps://volebnikalkulacka.cz/?ref=","og_title":"Volební kalkulačka Kraje 2020","og_description":"Volební kalkulačka Kraje 2020. Srovnání na základě postojů kandidátů.","candidate_comment":"Komentář strany","dont_know_them":"Nevím / nemám jednoznačný názor","explanation_replies":"Postoje stran jsou přímo jejich odpovědi na dané otázky.","sent_by_email":"Pošlete emailem"}}')}});
//# sourceMappingURL=app.9ee7371d.js.map