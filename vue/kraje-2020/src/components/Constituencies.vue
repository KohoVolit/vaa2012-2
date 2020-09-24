<template>
  <div>
    <div class="">
      <component-header></component-header>
      <div class="text-center container">
        <h2>Vyberte svůj kraj</h2>
        <p>
          klepnutím na mapu nebo ze seznamu
        </p>
        <Cz /> <!-- Be sure the SVG tag contains this attribute xmlns="http://www.w3.org/2000/svg" -->

        <ul class="list-group">
          <li v-for="constituency in constituenciesSorted" :key="constituency.constituency_code" class="list-group-item">
              <span class="btn-link link" @click="goVAA(constituency)">{{ constituency.name }}</span>
          </li>
        </ul>
      </div>
      <component-footer></component-footer>
      <Analytics></Analytics>
    </div>
  </div>
</template>

<script>
    import constituencies from '../data/constituencies.json'
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import Analytics from './Analytics.vue'
    import Cz from '!vue-svg-loader!../assets/cz.svg'

    export default {
        data: function () {
            return {
                constituencies,
                constituenciesSorted: []
            }
        },
        mounted: function () {
            this.constituenciesSorted = constituencies.sort(this.compare)
            this.clickMap()
        },
        methods: {
            clickMap() {
              let $this = this
              let elements = document.getElementsByClassName("region-active")
              for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', function() {
                  let constit = {
                    constituency: this.getAttribute("data-name"),
                    name: this.getAttribute("data-name"),
                    constituency_code: this.getAttribute("data-id")
                  }
                  $this.goVAA(constit)
                })
                elements[i].setAttribute("title", elements[i].getAttribute("data-name"))
              }
              // console.log(code)
            },
            goVAA (constit) {
                var payload = constit
                this.$store.commit('storeConstituency', payload)
                // console.log(this.$store.state.constituency)
                this.$router.push({path: '/', query: {cc: constit['constituency_code']}})
            },
            compare (a, b) {
              return a['name'].localeCompare(b.name, this.$settings['locale'])
            }
        },
        components: {
          'component-header': Header,
          'component-footer': Footer,
          Analytics,
          Cz
        }
    }
</script>

<style scoped>
  .region-active {
    cursor: pointer;
  }
  .link {
    cursor: pointer;
  }
  svg {
    max-width: 100%;
  }
</style>
