// https://alligator.io/vuejs/creating-custom-plugins/
import settings from './settings.json'
import axios from 'axios'

const CustomFunctions = {
    install (Vue) {
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
        Vue.prototype.$clicked = function (campaign, attributes) {
            var c = this.$getSetCookie(this.$settings['cookie'])
            var data = {
                vkid: c,
                calc: this.$settings['calc'],
                campaign: campaign,
                attributes: attributes
            }
            axios.get(this.$settings['url'] + this.$settings['save_path'] + 'match/click.php', { params: data })
        }
        Vue.prototype.$action = function (action) {
            var c = this.$getSetCookie(this.$settings['cookie'])
            var data = {
                vkid: c,
                calc: this.$settings['calc'],
                action: action,
                href: window.location.href
            }
            axios.get(this.$settings['url'] + this.$settings['save_path'] + 'match/action.php', { params: data })
        }
        Vue.prototype.$save_results = function (answer) {
            var c = this.$getSetCookie(this.$settings['cookie'])
            var data = {
                vkid: c,
                calc: this.$settings['calc'],
                answer: answer
            }
            axios.get(this.$settings['url'] + this.$settings['save_path'] + 'match/results.php', { params: data })
        }
    }
}

export default CustomFunctions

// Automatic installation if Vue has been added to the global scope.
if (typeof window !== 'undefined' && window.Vue) {
  window.Vue.use(CustomFunctions)
}
