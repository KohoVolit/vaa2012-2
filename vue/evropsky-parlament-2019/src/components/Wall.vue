<template>
    <div class="">
        <component-header></component-header>
        <div class="container">
            <h1 class="p-4"><i class="fa fa-heart text-danger"></i> Zeď přispěvatelů
                <br /><small>bez vás by prezidentská Volební kalkulačka nevznikla</small>
            </h1>
            <div class="d-flex flex-row flex-wrap justify-content-around">
                <div v-for="hero in heroes" class="card p-2 m-2">
                    <h3>{{ hero['name'] }}</h3>
                    <div v-if="hero['link']!=''">
                        <a :href="hero['link']">
                            <img :src="createImageLink(hero['image'])" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h3>A dalších 286 lidí.</h3>
            </div>
            <div class="mt-5">
                <a href="https://projects.kohovolit.eu/" target="_blank"><h3>Jak se sem dostat? Pomozte nám rozjet další projekty: Volební kalkulačky pro komunální volby, video archiv Sněmovny a další.</h3></a>
            </div>
        </div>
        <component-footer></component-footer>
    </div>
</template>
<script>

    import heroes from '../data/wall.json'
    // import 'font-awesome/css/font-awesome.css'
    import Header from './Header.vue'
    import Footer from './Footer.vue'

    export default {
        data: function () {
            return {
                heroes
            }
        },
        methods: {
            createImageLink: function (image) {
                return this.$settings['cdn'] + 'image/' + this.$settings['save_path'] + 'wall/' + image
            }
        },
        components: {
            'component-header': Header,
            'component-footer': Footer
        }
    }
</script>

<style>
    img {
        max-width: 100%
    }
</style>
