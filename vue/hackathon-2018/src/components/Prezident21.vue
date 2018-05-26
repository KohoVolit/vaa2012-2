<template>
    <div class="image_container pl-3">
        <a :href="abLink['link']" @click="clicked(abLink['name'])" target="_blank">
            <div class="d-flex flex-row  align-items-center">
                <img :src="abLink['src']" class="image m-2"/>
                <div class="p-2 text">{{ abLink['text1'] }}<br />
                {{ abLink['text2'] }}</div>
                <button class="btn btn-primary">{{ abLink['button'] }}</button>
            </div>
        </a>
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
                var ab = Math.floor(Math.random() * 2)
                var abLink = {}
                var newcode = this.code.split('.')[0]
                if (ab === 1) {
                    abLink['link'] = 'https://www.prezident21.cz/candidates/' + this.id2id[newcode] + '?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=' + newcode + '_hlasovat'
                    abLink['name'] = 'hlasovat'
                    abLink['ab'] = 1
                    abLink['text1'] = 'Hlasujte pro kandidáta'
                    abLink['text2'] = 've hře Prezident 21'
                    abLink['button'] = 'Hlasovat'
                }
                else {
                    abLink['link'] = 'https://www.prezident21.cz/candidates/' + this.id2id[newcode] + '?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=' + newcode + '_zjistit_vice'
                    abLink['name'] = 'zjistit_vice'
                    abLink['ab'] = 0
                    abLink['text1'] = 'Najděte více informací'
                    abLink['text2'] = 'o kandidátovi na Prezident 21'
                    abLink['button'] = 'Zjistit více'
                }
                abLink['src'] = this.$settings['cdn'] + 'image/' + this.$settings['save_path'] + 'p21_ico.svg'
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
        max-height: 32px;
    }
    .text {
        color: #092e67;
        line-height: 1em;
        font-size: .7rem;
    }
    button {
        background-color: #1375e9;
    }
    @media (min-width: 576px) {
        .text {
            font-size: 1rem;
        }
    }
</style>
