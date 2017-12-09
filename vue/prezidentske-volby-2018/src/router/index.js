import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)

function load (component) {
    // '@' is aliased to src/components
    return () => import(`@/components/${component}.vue`)
}

export default new Router({
    mode: 'history',
    routes: [
        { path: '/helloworld', name: 'HelloWorld', component: load('HelloWorld') },
        { path: '/', name: 'VAA', component: load('VAA') },
        { path: '/selection', name: 'Selection', component: load('Selection') },
        { path: '/results', name: 'Results', component: load('Results') }
    ]
})
