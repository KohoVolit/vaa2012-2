webpackJsonp([3],{Arfm:function(n,t,e){(n.exports=e("FZ+f")(!0)).push([n.i,"\nbutton[data-v-7f0c60cd]:hover {\n    cursor: pointer;\n}\n.selection[data-v-7f0c60cd] {\n    max-width: 992px;\n    margin-left: auto;\n    margin-right: auto;\n    min-height: calc(100vh - 56px);\n}\n.custom-control[data-v-7f0c60cd] {\n    position: relative;\n    display: -ms-inline-flexbox;\n    display: -webkit-inline-box;\n    display: inline-flex;\n    min-height: 1.5rem;\n    padding-left: 1.5rem;\n    margin-right: 1rem;\n    min-width: 90vw;\n}\n.custom-control[data-v-7f0c60cd]:hover {\n    cursor: pointer;\n}\n.custom-control-input[data-v-7f0c60cd] {\n    position: absolute;\n    z-index: -1;\n    opacity: 0;\n}\n.custom-checkbox .custom-control-input:checked ~ .custom-control-indicator[data-v-7f0c60cd] {\n    background-image: url(\"data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E\");\n}\n.custom-control-input:checked ~ .custom-control-indicator[data-v-7f0c60cd] {\n    color: #fff;\n    background-color: #007bff;\n}\n.custom-checkbox .custom-control-indicator[data-v-7f0c60cd] {\n    border-radius: .25rem;\n}\n.custom-control-indicator[data-v-7f0c60cd] {\n    position: absolute;\n    top: .25rem;\n    left: 0;\n    display: block;\n    width: 1rem;\n    height: 1rem;\n    pointer-events: none;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    background-color: #ddd;\n    background-repeat: no-repeat;\n    background-position: center center;\n    background-size: 50% 50%;\n}\n","",{version:3,sources:["/home/michal/project/volebnikalkulacka.cz/vue/senat-2018/src/components/Selection.vue"],names:[],mappings:";AACA;IACI,gBAAgB;CACnB;AACD;IACI,iBAAiB;IACjB,kBAAkB;IAClB,mBAAmB;IACnB,+BAA+B;CAClC;AACD;IACI,mBAAmB;IACnB,4BAA4B;IAC5B,4BAA4B;IAC5B,qBAAqB;IACrB,mBAAmB;IACnB,qBAAqB;IACrB,mBAAmB;IACnB,gBAAgB;CACnB;AACD;IACI,gBAAgB;CACnB;AACD;IACI,mBAAmB;IACnB,YAAY;IACZ,WAAW;CACd;AACD;IACI,2NAA2N;CAC9N;AACD;IACI,YAAY;IACZ,0BAA0B;CAC7B;AACD;IACI,sBAAsB;CACzB;AACD;IACI,mBAAmB;IACnB,YAAY;IACZ,QAAQ;IACR,eAAe;IACf,YAAY;IACZ,aAAa;IACb,qBAAqB;IACrB,0BAA0B;IAC1B,uBAAuB;IACvB,sBAAsB;IACtB,kBAAkB;IAClB,uBAAuB;IACvB,6BAA6B;IAC7B,mCAAmC;IACnC,yBAAyB;CAC5B",file:"Selection.vue",sourcesContent:["\nbutton[data-v-7f0c60cd]:hover {\n    cursor: pointer;\n}\n.selection[data-v-7f0c60cd] {\n    max-width: 992px;\n    margin-left: auto;\n    margin-right: auto;\n    min-height: calc(100vh - 56px);\n}\n.custom-control[data-v-7f0c60cd] {\n    position: relative;\n    display: -ms-inline-flexbox;\n    display: -webkit-inline-box;\n    display: inline-flex;\n    min-height: 1.5rem;\n    padding-left: 1.5rem;\n    margin-right: 1rem;\n    min-width: 90vw;\n}\n.custom-control[data-v-7f0c60cd]:hover {\n    cursor: pointer;\n}\n.custom-control-input[data-v-7f0c60cd] {\n    position: absolute;\n    z-index: -1;\n    opacity: 0;\n}\n.custom-checkbox .custom-control-input:checked ~ .custom-control-indicator[data-v-7f0c60cd] {\n    background-image: url(\"data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E\");\n}\n.custom-control-input:checked ~ .custom-control-indicator[data-v-7f0c60cd] {\n    color: #fff;\n    background-color: #007bff;\n}\n.custom-checkbox .custom-control-indicator[data-v-7f0c60cd] {\n    border-radius: .25rem;\n}\n.custom-control-indicator[data-v-7f0c60cd] {\n    position: absolute;\n    top: .25rem;\n    left: 0;\n    display: block;\n    width: 1rem;\n    height: 1rem;\n    pointer-events: none;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    background-color: #ddd;\n    background-repeat: no-repeat;\n    background-position: center center;\n    background-size: 50% 50%;\n}\n"],sourceRoot:""}])},Uit0:function(n,t,e){var o=e("Arfm");"string"==typeof o&&(o=[[n.i,o,""]]),o.locals&&(n.exports=o.locals);e("rjj0")("ed61bdea",o,!0)},bupt:function(n,t,e){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=e("mvHQ"),c=e.n(o),s=e("0mEi"),i=e.n(s),r=e("teIl"),a=e("TVmP"),d={data:function(){for(var n={},t=0;t<i.a.length;t++)n[i.a[t].id]=!1;var e={},o={},c=JSON.parse(this.$route.query.q);for(var s in i.a){var r=i.a[s];Math.abs(c[parseInt(r.id)])>0?(e[r.id]=!0,this.$store.state.answers[parseInt(r.id)]=c[parseInt(r.id)]):e[r.id]=!1,-1===c[parseInt(r.id)]&&(o[r.id]=this.$t("no")),1===c[parseInt(r.id)]&&(o[r.id]=this.$t("yes"))}return{questions:i.a,answered:e,answers:o,checked:n}},methods:{addChecked:function(){this.checked.push({question_id:!1})},storeWeights:function(){this.$store.commit("storeWeights",this.checked)},goResults:function(){this.$router.push({path:"/results",query:{q:c()(this.$store.state.answers),w:c()(this.$store.state.weights),cc:c()(this.$store.state.constituency)}})}},components:{"component-header":r.default,"component-footer":a.default}},l={render:function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("div",[e("component-header"),n._v(" "),e("div",{staticClass:"selection"},[e("h4",{staticClass:"p-2"},[n._v("\n            "+n._s(n.$t("select_extra_important_questions"))+"\n        ")]),n._v(" "),e("button",{staticClass:"btn btn-outline-secondary btn-lg btn-block mb-3",on:{click:function(t){n.goResults()}}},[n._v("> "+n._s(n.$t("skip"))+" >")]),n._v(" "),n._l(n.questions,function(t){return n.answered[t.id]?e("div",{staticClass:"list-group"},[e("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[e("label",{staticClass:"custom-control custom-checkbox"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.checked[t.id],expression:"checked[question.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(n.checked[t.id])?n._i(n.checked[t.id],null)>-1:n.checked[t.id]},on:{change:[function(e){var o=n.checked[t.id],c=e.target,s=!!c.checked;if(Array.isArray(o)){var i=n._i(o,null);c.checked?i<0&&(n.checked[t.id]=o.concat([null])):i>-1&&(n.checked[t.id]=o.slice(0,i).concat(o.slice(i+1)))}else n.$set(n.checked,t.id,s)},function(t){n.storeWeights()}]}}),n._v(" "),e("span",{staticClass:"custom-control-indicator"}),n._v(" "),e("div",{staticClass:"custom-control-description"},[e("div",{staticClass:"d-flex w-100 justify-content-between"},[e("h5",{staticClass:"mb-1"},[n._v(n._s(t.name)+" ("+n._s(n.answers[t.id])+")")])]),n._v(" "),e("small",{staticClass:"mb-1 text-muted"},[n._v("\n                            "+n._s(t.question)+"\n                        ")])])])])]):n._e()}),n._v(" "),e("button",{staticClass:"btn btn-success btn-lg btn-block mt-3",on:{click:function(t){n.goResults()}}},[n._v("> "+n._s(n.$t("result"))+" >")])],2),n._v(" "),e("component-footer")],1)},staticRenderFns:[]},u=e("VU/8")(d,l,!1,function(n){e("Uit0")},"data-v-7f0c60cd",null);t.default=u.exports},mvHQ:function(n,t,e){n.exports={default:e("qkKv"),__esModule:!0}},qkKv:function(n,t,e){var o=e("FeBl"),c=o.JSON||(o.JSON={stringify:JSON.stringify});n.exports=function(n){return c.stringify.apply(c,arguments)}}});
//# sourceMappingURL=3.4576c541bd08404a25af.js.map