import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)

function load (component) {
    // '@' is aliased to src/components
    return () => import(`@/components/${component}.vue`)
}

export default new Router({
    // https://forum.vuejs.org/t/404-error-after-deploying-vue-cli-on-my-host/18555

    base: '/cs/senat-2018/',
    mode: 'history',
    routes: [
        { path: '/test', name: 'Test', component: load('Parent') },
        { path: '/', name: 'VAA', component: load('VAA') },
        { path: '/selection', name: 'Selection', component: load('Selection') },
        { path: '/results', name: 'Results', component: load('Results') },
        { path: '/wall', name: 'Wall', component: load('Wall') },
        { path: '/constituencies', name: 'Constituencies', component: load('Constituencies') }
    ]
})
