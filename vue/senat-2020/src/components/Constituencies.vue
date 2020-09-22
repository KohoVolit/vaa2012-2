<template>
  <div>
    <div class="">
      <component-header></component-header>
      <div class="text-center container">
        <h2>Vyberte svůj volební obvod</h2>
        <p>
          klepnutím na mapu nebo ze seznamu
        </p>
        <Cz /> <!-- Be sure the SVG tag contains this attribute xmlns="http://www.w3.org/2000/svg" -->
        <div class="row">
          <div class="col-sm">
            <h3>Plzeň</h3>
            <Plzen />
          </div>
          <div class="col-sm">
            <h3>Praha</h3>
            <Praha />
          </div>
          <div class="col-sm">
            <h3>Brno</h3>
            <Brno />
          </div>
          <div class="col-sm">
            <h3>Ostravsko</h3>
            <Ostravsko />
          </div>
        </div>

        <ul class="list-group">
          <li v-for="constituency in constituenciesSorted" :key="constituency.constituency_code" class="list-group-item">
              <a href="#" @click="goVAA(constituency)">{{ constituency.name }} <small>({{constituency.constituency_code}})</small></a>
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
    import Plzen from '!vue-svg-loader!../assets/plzen.svg'
    import Praha from '!vue-svg-loader!../assets/praha.svg'
    import Brno from '!vue-svg-loader!../assets/brno.svg'
    import Ostravsko from '!vue-svg-loader!../assets/ostravsko.svg'
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
                this.$router.push({path: '/'})
            },
            compare (a, b) {
              return a['name'].localeCompare(b.name, this.$settings['locale'])
            }
        },
        components: {
          'component-header': Header,
          'component-footer': Footer,
          Analytics,
          Plzen,
          Praha,
          Brno,
          Ostravsko,
          Cz
        }
    }
</script>

<style scoped>
  .region-active {
    cursor: pointer;
  }
</style>
