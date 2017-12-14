<template>
    <div class="image_container">
        <a :href="abLink['link']" target="_blank"><img :src="abLink['src']" @click="clicked(abLink['name'])" class="image"/></a>
    </div>
</template>

<script>
    export default {
        props: ['code', 'idd'],
        data: function () {
            var id2id = {
                'zeman': '5853f95797dd60724c529dca',
                'kulhanek': '5954bdba2dff3f990ab84487',
                'drahos': '585af49bdaa8e2d20c8a4f26',
                'topolanek': '586a6ccb8b85fa4539438cf9',
                'hynek': '599aa2dbfc5b134fb69211d6',
                'fischer': '585bd3a75bbe31bf1a6c8369',
                'hanning': '586cdff1a9efdf8a29ca3ade',
                'hilser': '585944959868db1510fb6096',
                'horacek': '585936aa9868db1510fb608d'
            }
            return {
                newcode: '',
                id2id
            }
        },
        computed: {
            abLink: function () {
                var ab = Math.floor(Math.random() * 1)
                var abLink = {}
                var newcode = this.code.split('.')[0]
                if (ab === 1) {
                    abLink['link'] = 'https://www.prezident21.cz/candidates/' + this.id2id[newcode] + '?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=' + newcode + '_hlasovat'
                    abLink['name'] = 'hlasovat'
                    abLink['ab'] = 1
                }
                else {
                    abLink['link'] = 'https://www.prezident21.cz/candidates/' + this.id2id[newcode] + '?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=' + newcode + '_zjistit_vice'
                    abLink['name'] = 'zjistit_vice'
                    abLink['ab'] = 0
                }
                abLink['src'] = this.$settings['cdn'] + 'image/' + this.$settings['save_path'] + 'banner_' + abLink['name'] + '.png'
                return abLink
            }
        },
        methods: {
            clicked: function (name) {
                var campaign = 'p21_profile'
                var attributes = {
                    'id': this.idd,
                    'ab': name
                }
                this.$clicked(campaign, attributes)
            }
        }
    }
</script>
<style scoped>
    .image {
        max-width: 100%;
    }
</style>
