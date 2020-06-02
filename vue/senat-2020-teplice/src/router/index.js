import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

function load (component) {
    // '@' is aliased to src/components
    return () => import(`@/components/${component}.vue`)
}

const routes = [
            { path: '/', name: 'VAA', component: load('VAA') },
            { path: '/selection', name: 'Selection', component: load('Selection') },
            { path: '/results', name: 'Results', component: load('Results') },
            // { path: '/wall', name: 'Wall', component: load('Wall') },
            { path: '/test', name: 'Test', component: load('Test') },
            { path: '/questionnaire', name: 'Questionnaire', component: load('Questionnaire')}
]

const router = new VueRouter({
  mode: 'history',
  base: '/cs/senat-2020-teplice/',
  routes
})

export default router
