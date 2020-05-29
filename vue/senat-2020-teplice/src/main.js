import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueI18n from 'vue-i18n'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.js'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import store from './store'
import VueCookies from 'vue-cookies'
import CustomFunctions from './custom-functions.js'

const messages = require('./locales/texts.json')
const settings = require('./settings.json')

Vue.config.productionTip = false

Vue.use(VueI18n)
Vue.use(BootstrapVue)
Vue.use(VueCookies)

Vue.use(CustomFunctions)
// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: settings['locale'], // set locale
  messages // set locale messages
})

new Vue({
  router,
  i18n,
  store,
  render: h => h(App)
}).$mount('#app')
