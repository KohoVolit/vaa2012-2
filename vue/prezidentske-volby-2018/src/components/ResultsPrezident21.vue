<template>
    <div class="pt-3">
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
        computed: {
            abLink: function () {
                var ab = Math.floor(Math.random() * 2)
                var abLink = {}
                if (ab === 1) {
                    abLink['link'] = 'https://www.prezident21.cz/?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=vysledky_hlasovat'
                    abLink['name'] = 'hlasovat'
                    abLink['ab'] = 1
                    abLink['text1'] = 'Hlasujte pro kandidáty'
                    abLink['text2'] = 've hře Prezident 21'
                    abLink['button'] = 'Hlasovat'
                }
                else {
                    abLink['link'] = 'https://www.prezident21.cz/?utm_source=kohovolit.eu&utm_medium=referal&utm_campaign=201712_tlacitka_ab&utm_content=vysledky_zjistit_vice'
                    abLink['name'] = 'zjistit_vice'
                    abLink['ab'] = 0
                    abLink['text1'] = 'Najděte více informací'
                    abLink['text2'] = 'o kandidátech na Prezident 21'
                    abLink['button'] = 'Zjistit více'
                }
                abLink['src'] = this.$settings['cdn'] + 'image/' + this.$settings['save_path'] + 'p21_ico.svg'
                return abLink
            }
        },
        methods: {
            clicked: function (name) {
                var campaign = 'p21_down'
                var attributes = {
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
        font-size: .8rem;
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
