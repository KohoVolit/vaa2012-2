webpackJsonp([11],{"+Gxq":function(e,t,n){"use strict";var s=n("fnDg").a,o=n("VU/8")(s,null,!1,function(e){n("NCXI")},null,null);t.a=o.exports},"1ZUK":function(e,t){},"1oVT":function(e,t){},"9R6X":function(e,t){},"C9v/":function(e,t){},"HUt/":function(e,t,n){"use strict";var s=n("qRo1").a,o=n("VU/8")(s,null,!1,function(e){n("LH4V")},null,null);t.a=o.exports},JCpY:function(e,t,n){"use strict";var s=n("rKsW").a,o=n("VU/8")(s,null,!1,function(e){n("C9v/")},null,null);t.a=o.exports},JDVb:function(e,t,n){"use strict";var s=n("9NuQ").a,o=n("VU/8")(s,null,!1,function(e){n("1oVT")},null,null);t.a=o.exports},KELc:function(e,t){e.exports={"cs-CZ":{header_name:"Volební kalkulačka - prezident 2018",YES:"ANO",NO:"NE",yes:"Ano",no:"Ne",dont_know:"Nevím",not_important:"Je mi to jedno",skip:"Přeskočit",result:"Výsledek",back:"Zpět",select_extra_important_questions:"Vyberte otázky, které jsou pro vás extra důležité:",clicking_detailed_match:"Tip: kliknutím na jméno kandidáta dostanete Vaši podrobnou shodu s ním",match:"Shoda",close:"Zavřít",question:"Otázka",me:"Já",candidate_comment:"Komentář kandidáta",no_replies:"Oslovili jsme všechny kandidáty, zatím na otázky neodpověděli:",fb_1:"Volební kalkulačka 2018. U mě největší shoda: ",fb_2:" nejmenší ",share_on_fb:"Řekněte o tom na ",sent_by_email:"Pošlete emailem",email_1:"Zkus si volební kalkulačku. Ukáže ti kandiáty na prezidenta, kteří jsou ti nejbližší.",email_2:"\n\nVolební kalkulačka je zde:\nhttps://volebnikalkulacka.cz/?from="}}},LH4V:function(e,t){},NCXI:function(e,t){},NHnr:function(e,t,n){"use strict";function s(e){return function(){return n("mUJ2")("./"+e+".vue")}}Object.defineProperty(t,"__esModule",{value:!0});var o=n("7+uW"),a={render:function(){var e=this.$createElement,t=this._self._c||e;return t("div",{attrs:{id:"app"}},[t("router-view")],1)},staticRenderFns:[]},i=n("VU/8")({name:"app"},a,!1,function(e){n("Uywm")},null,null).exports,u=n("/ocq");o.a.use(u.a);var l=new u.a({base:"/cs/prezidentske-volby-2018-ultimate/",mode:"history",routes:[{path:"/helloworld",name:"HelloWorld",component:s("HelloWorld")},{path:"/",name:"VAA",component:s("VAA")},{path:"/selection",name:"Selection",component:s("Selection")},{path:"/results",name:"Results",component:s("Results")},{path:"/wall",name:"Wall",component:s("Wall")}]}),r=n("TXmL"),c=n("e6fC"),p=(n("qb6w"),n("Rive"),n("NYxO"));o.a.use(p.a);var m=new p.a.Store({state:{count:1,answers:{},weights:{},results:[]},mutations:{increment:function(e){e.count++},decrement:function(e){e.count--},addAnswer:function(e,t){e.answers[t.key]=t.value},storeWeights:function(e,t){e.weights=t},storeAnswers:function(e,t){e.answers=t},resetAnswers:function(e){e.answers={}},resetWeights:function(e){e.weights={}},storeResults:function(e,t){e.results=t},storeAnswersStored:function(e,t){e.answers_stored=t}},actions:{},getters:{getCount:function(e){return e.count},getAnswers:function(e){return e.answers},getWeights:function(e){return e.weights},getResults:function(e){return e.results},getAnswersStored:function(e){return e.answers_stored}}}),d=n("ppUw"),k=n.n(d),v=n("k0KG"),h=n.n(v),f=n("mtWM"),g=n.n(f),w={install:function(e){e.prototype.$beep=function(){console.log("beep")},e.prototype.$settings=h.a,e.prototype.$getSetCookie=function(e){var t="";return this.$cookies.isKey(e)?t=this.$cookies.get(e):(t="vk."+Date.now()+"."+Math.round(1e15*Math.random()),this.$cookies.set(e,t,432e6)),t},e.prototype.$clicked=function(e,t){var n={vkid:this.$getSetCookie(this.$settings.cookie),calc:this.$settings.calc,campaign:e,attributes:t};g.a.get(this.$settings.url+this.$settings.save_path+"match/click.php",{params:n})},e.prototype.$action=function(e){var t={vkid:this.$getSetCookie(this.$settings.cookie),calc:this.$settings.calc,action:e};g.a.get(this.$settings.url+this.$settings.save_path+"match/action.php",{params:t})},e.prototype.$save_results=function(e){var t={vkid:this.$getSetCookie(this.$settings.cookie),calc:this.$settings.calc,answer:e};g.a.get(this.$settings.url+this.$settings.save_path+"match/results.php",{params:t})}}},_=w;"undefined"!=typeof window&&window.Vue&&window.Vue.use(w);var b=n("KELc"),y=n("k0KG");o.a.config.productionTip=!1,o.a.use(r.a),o.a.use(c.a),o.a.use(k.a),o.a.use(_);var V=new r.a({locale:y.locale,messages:b});new o.a({el:"#app",router:l,i18n:V,store:m,template:"<App/>",components:{App:i}}),setTimeout(function(){document.getElementById("alternative").innerHTML=""},2e3),setTimeout(function(){document.getElementById("alternative").innerHTML=""},5e3),setTimeout(function(){document.getElementById("alternative").innerHTML=""},2e4)},SsFf:function(e,t,n){"use strict";var s=n("xT7b").a,o=n("VU/8")(s,null,!1,function(e){n("1ZUK")},null,null);t.a=o.exports},Uywm:function(e,t){},k0KG:function(e,t){e.exports={url:"https://volebnikalkulacka.cz/",cookie:"vkid",calc:"cz2018presult",locale:"cs-CZ",_cdn:"http://192.168.1.4/michal/project/volebnikalkulacka.cz/",cdn:"https://volebnikalkulacka.azureedge.net/",_path:"vue/prezidentske-volby-2018-ultimate/src/",path:"cs/prezidentske-volby-2018-ultimate/",save_path:"prezidentske-volby-2018-ultimate/",api_path_:"http://localhost:3003/",api_path:"https://api.volebnikalkulacka.cz/",fb_app_id:"200785490055088",pic_path_small:"statics/pictures/48x64/",pic_path_large:"statics/pictures/68x90/"}},mUJ2:function(e,t,n){function s(e){var t=o[e];return t?Promise.all(t.slice(1).map(n.e)).then(function(){return n(t[0])}):Promise.reject(new Error("Cannot find module '"+e+"'."))}var o={"./Analytics.vue":["msRV",0],"./Footer.vue":["TVmP",0],"./Header.vue":["teIl",0],"./HelloWorld.vue":["gORT",9],"./Progress.vue":["wd1N",5],"./Results.vue":["YTlo",0,1],"./ResultsModal.vue":["LyJu",0],"./ResultsNoreply.vue":["OHOL",0,3],"./ResultsTable.vue":["3vJC",0,7],"./ResultsWinners.vue":["VPHt",0,6],"./Selection.vue":["bupt",0,8],"./Stars.vue":["WmC7",0],"./VAA.vue":["k5sO",0,2],"./Wall.vue":["+nVT",0,4]};s.keys=function(){return Object.keys(o)},s.id="mUJ2",e.exports=s},qb6w:function(e,t){},r15W:function(e,t,n){"use strict";var s=n("E9Zr").a,o=n("VU/8")(s,null,!1,function(e){n("9R6X")},null,null);t.a=o.exports}},["NHnr"]);
//# sourceMappingURL=app.bd7b2ee274d185e45385.js.map