<template>
    <div>
        <div class="">
            <component-header></component-header>
            <div class="text-center container">
                <h2>Vyberte svůj volební obvod</h2>
                <p>
                    kliknutím na mapu nebo ze seznamu
                </p>
                <img src="https://volebnikalkulacka.cz/image/senat_obvody.png" id="mapa" border="0" usemap="#map" class="computer"/>

                <map name="map" class="computer">
                    <div v-for="constituency in constituencies">
                        <area shape="poly" :alt="constituency.name" :title="constituency.name" :coords="constituency.coords" @click="goVAA(constituency.constituency_code, constituency.constituency)" />
                    </div>
                </map>

                <ul class="list-group">
                    <li v-for="constituency in constituencies.sort(this.compare)" class="list-group-item">
                        <a href="#" @click="goVAA(constituency.constituency_code, constituency.constituency)">{{ constituency.name }}</a>
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

    export default {
        data: function () {
            return {
                constituencies
            }
        },
        methods: {
            goVAA (cc, constituency) {
                var payload = {'constituency_code': cc, 'constituency': constituency}
                this.$store.commit('storeConstituency', payload)
                // console.log(this.$store.state.constituency)
                this.$router.push({path: '/'})
            },
            compare (a, b) {
                if (a.name < b.name) {
                    return -1
                }
                if (a.name > b.name) {
                    return 1
                }
                return 0
            }
        },
        components: {
                    'component-header': Header,
                    'component-footer': Footer,
                    Analytics
                }
    }
</script>

<style scoped>
</style>
