import questions from './content/questions.json'

export default {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Volební kalkulačka 2021 - Inventura hlasovani 2017-2021',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/cs/inventura-hlasovani-2017-2021/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    // https://stackoverflow.com/questions/47968256/what-is-best-way-for-including-bootstrap-css-to-nuxt-project
    "~/node_modules/bootswatch/dist/lumen/bootstrap.min.css"
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    { src: "~/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", mode: "client" }
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    // https://content.nuxtjs.org/
    '@nuxt/content'
  ],

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'cs'
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
    // https://stackoverflow.com/questions/68728903/how-to-setup-sass-scss-sass-loader-in-nuxt
    // loaders: {
    //   sass: {
    //     implementation: require('sass'),
    //   },
    //   scss: {
    //     implementation: require('sass'),
    //   },
    // }
  },
  router: {
    base: '/cs/inventura-hlasovani-2017-2021/'
  },
  generate: {
    routes() {
      let arr = [...Array(questions.length + 1).keys()]
      arr.shift()
      const arr1 = arr.map(x => '/question/' + x)
      return arr1
    }
  }
}