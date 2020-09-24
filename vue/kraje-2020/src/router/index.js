import Vue from 'vue'
import VueRouter from 'vue-router'
// import Home from '../views/Home.vue'

Vue.use(VueRouter)

function load (component) {
  // '@' is aliased to src/components
  return () => import(`@/components/${component}.vue`)
}

const routes = [
  { path: '/', name: 'VAA', component: load('VAA') },
  { path: '/constituencies', name: 'Constituencies', component: load('Constituencies') },
  { path: '/selection', name: 'Selection', component: load('Selection') },
  { path: '/results', name: 'Results', component: load('Results') },
]

const router = new VueRouter({
  mode: 'history',
  base: '/cs/kraje-2020/', // process.env.BASE_URL,
  routes
})

export default router
