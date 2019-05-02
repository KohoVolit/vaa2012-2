import Vue from 'vue'
import Router from 'vue-router'
import NProgress from 'nprogress'
// import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)
Vue.use(NProgress)

function load (component) {
    // '@' is aliased to src/components
    return () => import(`@/components/${component}.vue`)
}

const router = new Router({
    // https://forum.vuejs.org/t/404-error-after-deploying-vue-cli-on-my-host/18555

    base: '/cs/inventura-hlasovani-evropsky-parlament-2014-2019/',
    mode: 'history',
    routes: [
        { path: '/helloworld', name: 'HelloWorld', component: load('HelloWorld') },
        { path: '/', name: 'VAA', component: load('VAA') },
        { path: '/selection', name: 'Selection', component: load('Selection') },
        { path: '/results', name: 'Results', component: load('Results') },
        { path: '/wall', name: 'Wall', component: load('Wall') }
    ]
})

router.beforeResolve((to, from, next) => {
  // If this isn't an initial page load.
  if (to.name) {
      // Start the route progress bar.
      NProgress.start()
  }
  next()
})

router.afterEach((to, from) => {
  // Complete the animation of the route progress bar.
  NProgress.done()
})

export default router
