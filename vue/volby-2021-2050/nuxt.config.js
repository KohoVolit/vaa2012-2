import questions from './content/questions_futurist.json'

export default {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Volební kalkulačka 2021 - "2050"',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Volební kalkulačka 2021. Nejužitečnějších 10 minut před volbami' },
      { hid: 'format-detection', name: 'format-detection', content: 'telephone=no' },
      { hid: 'author', name: 'author', content: 'Michal Škop, KohoVolit.eu' },
      { hid: "og:description", property:"og:description", content:"Volební kalkulačka 2021. Nejužitečnějších 10 minut před volbami."},
      { hid: "og:title", property: "og:title", content:'Volební kalkulačka 2021 - "2050"'},
      { hid: "og:site_name", property:"og:site_name", content:'Volební kalkulačka 2021 - "2050"'},
      { hid: "fb:app_id", property:"fb:app_id", content:"200785490055088" },
      { hid: "og:image", property:'og:image', content: "https://volebnikalkulacka.azureedge.net/senat-2016/image/bg.jpg" },
      { hid: "og:type", property:"og:type", content:"website" },
      { hid: "og:url", property:"og:url", content:"https://www.volebnikalkulacka.cz/cs/volby-2021-2050/" },
      { hid: "apple-mobile-web-app-title", name: "apple-mobile-web-app-title", property:"apple-mobile-web-app-title", content:"Volební kalkulačka" }
      
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/cs/volby-2021-2050/favicon.ico' }
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
    // https://google-analytics.nuxtjs.org/setup/
    '@nuxtjs/google-analytics'
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    // https://content.nuxtjs.org/
    '@nuxt/content',
    // https://www.npmjs.com/package/cookie-universal-nuxt?activeTab=readme
    'cookie-universal-nuxt',
    // https://github.com/pimlie/nuxt-matomo
    ['nuxt-matomo', { matomoUrl: '//piwik.kohovolit.eu/', siteId: 1 }],
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
    base: '/cs/volby-2021-2050/'
  },
  generate: {
    routes() {
      let arr = [...Array(questions.length + 1).keys()]
      arr.shift()
      const arr1 = arr.map(x => '/question/' + x)
      return arr1
    }
  },
  // https://google-analytics.nuxtjs.org/setup/
  googleAnalytics: {
    id: 'UA-8592359-7'
  }
}
