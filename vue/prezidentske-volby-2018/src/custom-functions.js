// https://alligator.io/vuejs/creating-custom-plugins/
import settings from './settings.json'
import axios from 'axios'

const CustomFunctions = {
    install(Vue) {
        Vue.prototype.$beep = function () {
            console.log('beep')
        }
        Vue.prototype.$settings = settings
        Vue.prototype.$getSetCookie = function (s) {
            var c = ''
            if (!this.$cookies.isKey(s)) {
                c = 'vk.' + Date.now() + '.' + Math.round(Math.random() * 1000000000000000)
                this.$cookies.set(s, c, 60 * 60 * 24 * 5000)
            }
            else {
                c = this.$cookies.get(s)
            }
            return c
        }
    }
}

export default CustomFunctions

// Automatic installation if Vue has been added to the global scope.
if (typeof window !== 'undefined' && window.Vue) {
  window.Vue.use(CustomFunctions)
}
