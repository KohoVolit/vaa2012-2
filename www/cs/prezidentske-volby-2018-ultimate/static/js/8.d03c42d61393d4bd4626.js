webpackJsonp([8],{"8SD0":function(n,e,t){var o=t("sdvW");"string"==typeof o&&(o=[[n.i,o,""]]),o.locals&&(n.exports=o.locals);t("rjj0")("3211b22d",o,!0)},bupt:function(n,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=t("mvHQ"),s=t.n(o),i=t("0mEi"),c=t.n(i),a=t("teIl"),r=t("TVmP"),d={data:function(){for(var n={},e=0;e<c.a.length;e++)n[c.a[e].id]=!1;var t={},o={},s=JSON.parse(this.$route.query.q);for(var i in c.a){var a=c.a[i];Math.abs(s[parseInt(a.id)])>0?(t[a.id]=!0,this.$store.state.answers[parseInt(a.id)]=s[parseInt(a.id)]):t[a.id]=!1,-1===s[parseInt(a.id)]&&(o[a.id]=this.$t("no")),1===s[parseInt(a.id)]&&(o[a.id]=this.$t("yes"))}return{questions:c.a,answered:t,answers:o,checked:n}},methods:{addChecked:function(){this.checked.push({question_id:!1})},storeWeights:function(){this.$store.commit("storeWeights",this.checked)},goResults:function(){this.$router.push({path:"/results",query:{q:s()(this.$store.state.answers),w:s()(this.$store.state.weights)}})}},components:{"component-header":a.default,"component-footer":r.default}},l={render:function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("div",[t("component-header"),n._v(" "),t("div",{staticClass:"selection"},[t("h4",{staticClass:"p-2"},[n._v("\n            "+n._s(n.$t("select_extra_important_questions"))+"\n        ")]),n._v(" "),t("button",{staticClass:"btn btn-outline-secondary btn-lg btn-block mb-3",on:{click:function(e){n.goResults()}}},[n._v("> "+n._s(n.$t("skip"))+" >")]),n._v(" "),n._l(n.questions,function(e){return n.answered[e.id]?t("div",{staticClass:"list-group"},[t("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[t("label",{staticClass:"custom-control custom-checkbox"},[t("input",{directives:[{name:"model",rawName:"v-model",value:n.checked[e.id],expression:"checked[question.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(n.checked[e.id])?n._i(n.checked[e.id],null)>-1:n.checked[e.id]},on:{change:[function(t){var o=n.checked[e.id],s=t.target,i=!!s.checked;if(Array.isArray(o)){var c=n._i(o,null);s.checked?c<0&&(n.checked[e.id]=o.concat([null])):c>-1&&(n.checked[e.id]=o.slice(0,c).concat(o.slice(c+1)))}else n.$set(n.checked,e.id,i)},function(e){n.storeWeights()}]}}),n._v(" "),t("span",{staticClass:"custom-control-indicator"}),n._v(" "),t("div",{staticClass:"custom-control-description"},[t("div",{staticClass:"d-flex w-100 justify-content-between"},[t("h5",{staticClass:"mb-1"},[n._v(n._s(e.name)+" ("+n._s(n.answers[e.id])+")")])]),n._v(" "),t("small",{staticClass:"mb-1 text-muted"},[n._v("\n                            "+n._s(e.question)+"\n                        ")])])])])]):n._e()}),n._v(" "),t("button",{staticClass:"btn btn-success btn-lg btn-block mt-3",on:{click:function(e){n.goResults()}}},[n._v("> "+n._s(n.$t("result"))+" >")])],2),n._v(" "),t("component-footer")],1)},staticRenderFns:[]},u=t("VU/8")(d,l,!1,function(n){t("8SD0")},"data-v-6b267ede",null);e.default=u.exports},sdvW:function(n,e,t){(n.exports=t("FZ+f")(!0)).push([n.i,"\nbutton[data-v-6b267ede]:hover {\n    cursor: pointer;\n}\n.selection[data-v-6b267ede] {\n    max-width: 992px;\n    margin-left: auto;\n    margin-right: auto;\n    min-height: calc(100vh - 56px);\n}\n.custom-control[data-v-6b267ede] {\n    position: relative;\n    display: -ms-inline-flexbox;\n    display: -webkit-inline-box;\n    display: inline-flex;\n    min-height: 1.5rem;\n    padding-left: 1.5rem;\n    margin-right: 1rem;\n    min-width: 90vw;\n}\n.custom-control[data-v-6b267ede]:hover {\n    cursor: pointer;\n}\n.custom-control-input[data-v-6b267ede] {\n    position: absolute;\n    z-index: -1;\n    opacity: 0;\n}\n.custom-checkbox .custom-control-input:checked ~ .custom-control-indicator[data-v-6b267ede] {\n    background-image: url(\"data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E\");\n}\n.custom-control-input:checked ~ .custom-control-indicator[data-v-6b267ede] {\n    color: #fff;\n    background-color: #007bff;\n}\n.custom-checkbox .custom-control-indicator[data-v-6b267ede] {\n    border-radius: .25rem;\n}\n.custom-control-indicator[data-v-6b267ede] {\n    position: absolute;\n    top: .25rem;\n    left: 0;\n    display: block;\n    width: 1rem;\n    height: 1rem;\n    pointer-events: none;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    background-color: #ddd;\n    background-repeat: no-repeat;\n    background-position: center center;\n    background-size: 50% 50%;\n}\n","",{version:3,sources:["/home/michal/project/volebnikalkulacka.cz/vue/prezidentske-volby-2018-ultimate/src/components/Selection.vue"],names:[],mappings:";AACA;IACI,gBAAgB;CACnB;AACD;IACI,iBAAiB;IACjB,kBAAkB;IAClB,mBAAmB;IACnB,+BAA+B;CAClC;AACD;IACI,mBAAmB;IACnB,4BAA4B;IAC5B,4BAA4B;IAC5B,qBAAqB;IACrB,mBAAmB;IACnB,qBAAqB;IACrB,mBAAmB;IACnB,gBAAgB;CACnB;AACD;IACI,gBAAgB;CACnB;AACD;IACI,mBAAmB;IACnB,YAAY;IACZ,WAAW;CACd;AACD;IACI,2NAA2N;CAC9N;AACD;IACI,YAAY;IACZ,0BAA0B;CAC7B;AACD;IACI,sBAAsB;CACzB;AACD;IACI,mBAAmB;IACnB,YAAY;IACZ,QAAQ;IACR,eAAe;IACf,YAAY;IACZ,aAAa;IACb,qBAAqB;IACrB,0BAA0B;IAC1B,uBAAuB;IACvB,sBAAsB;IACtB,kBAAkB;IAClB,uBAAuB;IACvB,6BAA6B;IAC7B,mCAAmC;IACnC,yBAAyB;CAC5B",file:"Selection.vue",sourcesContent:["\nbutton[data-v-6b267ede]:hover {\n    cursor: pointer;\n}\n.selection[data-v-6b267ede] {\n    max-width: 992px;\n    margin-left: auto;\n    margin-right: auto;\n    min-height: calc(100vh - 56px);\n}\n.custom-control[data-v-6b267ede] {\n    position: relative;\n    display: -ms-inline-flexbox;\n    display: -webkit-inline-box;\n    display: inline-flex;\n    min-height: 1.5rem;\n    padding-left: 1.5rem;\n    margin-right: 1rem;\n    min-width: 90vw;\n}\n.custom-control[data-v-6b267ede]:hover {\n    cursor: pointer;\n}\n.custom-control-input[data-v-6b267ede] {\n    position: absolute;\n    z-index: -1;\n    opacity: 0;\n}\n.custom-checkbox .custom-control-input:checked ~ .custom-control-indicator[data-v-6b267ede] {\n    background-image: url(\"data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E\");\n}\n.custom-control-input:checked ~ .custom-control-indicator[data-v-6b267ede] {\n    color: #fff;\n    background-color: #007bff;\n}\n.custom-checkbox .custom-control-indicator[data-v-6b267ede] {\n    border-radius: .25rem;\n}\n.custom-control-indicator[data-v-6b267ede] {\n    position: absolute;\n    top: .25rem;\n    left: 0;\n    display: block;\n    width: 1rem;\n    height: 1rem;\n    pointer-events: none;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    background-color: #ddd;\n    background-repeat: no-repeat;\n    background-position: center center;\n    background-size: 50% 50%;\n}\n"],sourceRoot:""}])}});
//# sourceMappingURL=8.d03c42d61393d4bd4626.js.map