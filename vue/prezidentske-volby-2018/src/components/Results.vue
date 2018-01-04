<template>
    <div>
        <component-header></component-header>
        <div class="results">
            <component-results-winners :questions="questions" :results="results"></component-results-winners>
            <div class="row px-2">
                <div class="col-md-6">
                    <a :href="createFBLink()" target="_blank">
                        <button @click="clicked('fb_top', {})" class="btn btn-primary btn-block btn-lg">{{ $t('share_on_fb') }}<i class="fa fa-facebook-official"></i></button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a :href="createEmailLink()">
                        <button class="btn btn-warning btn-block btn-lg" @click="clicked('email_top', {})">{{ $t('sent_by_email')}} <i class="fa fa-envelope"></i></button>
                    </a>
                </div>
            </div>
            <component-results-table :questions="questions" :answers="$store.state.answers" v-on:clickedDetails="clickedDetails">
            </component-results-table>
            <component-results-noreply :questions="questions"></component-results-noreply>
            <!-- <div class="text-center pt-3">
                <a href="https://www.prezident21.cz/" @click="clicked('21_down', {'text': 'know_more'})" target="blank_"><img src="https://volebnikalkulacka.azureedge.net/cs/prezidentske-volby-2018/statics/koho_volit_banner_zjistit_vice.png" /></a>
            </div> -->
            <component-results-prezident21></component-results-prezident21>
            <a @click="clicked('all_questions_table', {'text': 'overview'})" href="https://docs.google.com/spreadsheets/d/1W29Ka674GWZaf-KWQCTSeSKuGxqFRvrA5jjLzvNtf2c/edit?usp=sharing" target="_blank" class="btn btn-info btn-block btn-lg mt-4"><i class="fa fa-table"></i> Přehled všech odpovědí v tabulce</a>
            <a @click="clicked('rekonstrukce_hradu', {'text': 'fair_campaign'})" href="http://rekonstrukce-hradu.cz/" target="_blank">
                <div class="d-flex flex-row align-items-center mt-2">
                    <img :src="rhSrc" class="image m-2"/>
                    <div class="p-2 text">Rekonstrukce Hradu sleduje
                    férovost volebních kampaní</div>
                </div>
            </a>
            <a @click="clicked('wall_of_fame', {'text': 'wall'})" href="wall" class="btn btn-warning btn-block btn-lg mt-4"><i class="fa fa-heart text-danger"></i> Zeď podporovatelů Volební kalkulačky</a>
        </div>
        <component-footer></component-footer>
        <div class="filler"></div>
        <div class="downer bg-success text-center p-2">
            <a :href="createProjectsLink()" target="_blank" class="text-white"><h3 @click="clicked('projects_down', {'text': 'calc_at_your_place'})">Chcete Volební kalkulačĸu pro obecní volby 2018 u vás?</h3></a>
        </div>
        <Analytics></Analytics>
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import ResultsWinners from './ResultsWinners.vue'
    import ResultsTable from './ResultsTable.vue'
    import ResultsNoreply from './ResultsNoreply.vue'
    import ResultsPrezident21 from './ResultsPrezident21.vue'
    import questions from '../data/questions.json'
    import votes from '../data/answers.json'
    import Analytics from './Analytics.vue'

    export default {
        data: function () {
            return {
                questions,
                votes,
                results: [{info: ''}, {info: ''}, {info: ''}],
                answers: {}
            }
        },
        computed: {
            rhSrc: function () {
                return this.$settings['cdn'] + 'image/' + this.$settings['save_path'] + 'rekonstrukce-hradu-2.png'
            }
        },
        methods: {
            clicked: function (campaign, attributes) {
                this.$clicked(campaign, attributes)
            },
            createProjectsLink: function () {
                return 'https://projects.kohovolit.eu/?vkid=' + this.$getSetCookie(this.$settings['cookie'])
            },
            createFBLink: function () {
                function encodeQueryData (data) {
                    let ret = []
                    for (let d in data) {
                       ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]))
                    }
                    return ret.join('&')
                }
                // var last = this.results.length - 1
                // var quote = this.$t('fb_1') + this.results[0].info.family_name + ' (' + this.results[0].result_percent + '%),' + this.$t('fb_2') + this.results[last].info.family_name + ' (' + this.results[last].result_percent + '%)'
                var href = {
                    ref: this.$getSetCookie(this.$settings['cookie']),
                    pic: JSON.stringify({
                        w: [this.results[0].info.id, this.results[1].info.id, this.results[2].info.id],
                        s: [this.results[0].rating5, this.results[1].rating5, this.results[2].rating5]
                    })
                }
                var d = {
                    'app_id': this.$settings['fb_app_id'],
                    'display': 'page',
                    // 'href': this.$settings['url'] + '?' + encodeQueryData(href),
                    'link': this.$settings['url'] + '?' + encodeQueryData(href),
                    // 'quote': quote,
                    // 'mobile_iframe': true,
                    'redirect_uri': this.$settings['url'] + this.$settings['path'] + this.$route.fullPath.substring(1)
                }
                var querystring = encodeQueryData(d)
                return 'https://www.facebook.com/dialog/feed?' + querystring
            },
            createEmailLink: function () {
                var s = this.$t('email_1')
                var b = this.$t('email_2') + this.$getSetCookie(this.$settings['cookie'])
                var subject = encodeURIComponent(s)
                var body = encodeURIComponent(b)
                var mailto = 'mailto:?subject=' + subject + '&body=' + body
                return mailto
            },
            clickedDetails: function (params) {
                // var attributes = {
                //     index: params[0],
                //     abbreviation: params[1]
                // }
                // this.clicked('details', attributes)
            },
            calcMatch: function (answers, weights, votes, extra = 2) {
                var results = []
                for (var key in votes) {
                    var singleVotes = votes[key]
                    var r = this.calcOneMatch(answers, weights, singleVotes['votes'], extra)
                    r['id'] = singleVotes['id']
                    r['info'] = singleVotes
                    results.push(r)
                }
                return results
            },
            calcOneMatch: function (answers, weights, singleVotes, extra) {
                var sum = 0
                var count = 0
                var w = 0
                for (var key in answers) {
                    if (Math.abs(answers[key]) > 0) {
                        w = 1
                        if (weights[key]) {
                            w = extra
                        }
                        if (singleVotes[key] !== undefined) {
                            sum = sum + Math.sign(answers[key]) * singleVotes[key] * w
                            count = count + w
                        }
                        else {
                            count = count + w
                        }
                    }
                }
                if (count === 0) {
                    count = 1
                }

                var result = {
                    result: (1 + sum / count) / 2,
                    result_percent: Math.round((100 + 100 * sum / count) / 2),
                    rating: Math.round((1 + sum / count) / 2 * 10) / 2,
                    rating5: Math.round((1 + sum / count) / 2 * 5),
                    random: Math.random()
                }
                // console.log(result.result, result.result_percent, result.rating, result.rating5)
                return result
            }
        },
        mounted: function () {
            this.$action('results_shown')
            this.$getSetCookie(this.$settings['cookie'])
            // console.log(this.$getSetCookie('vkid'))
            // console.log(this.$beep())
            if (this.$route.query.q !== undefined) {
                this.$store.commit('storeAnswers', JSON.parse(this.$route.query.q))
            }
            else {
                this.$store.commit('resetAnswers')
            }
            this.answers = this.$store.state.answers
            if (this.$route.query.w !== undefined) {
                this.$store.commit('storeWeights', JSON.parse(this.$route.query.w))
            }
            else {
                this.$store.commit('resetWeights')
            }

            this.results = this.calcMatch(this.$store.state.answers, this.$store.state.weights, this.votes, 2)
            this.results.sort(function (a, b) {
                return b.random - a.random
            })
            this.results.sort(function (a, b) {
                return b.result - a.result
            })
            this.$store.commit('storeResults', this.results)

            var answer = {}
            for (var k in this.$route.query) {
                answer[k] = JSON.parse(this.$route.query[k])
            }
            this.$save_results(answer)
        },
        components: {
            'component-header': Header,
            'component-footer': Footer,
            'component-results-winners': ResultsWinners,
            'component-results-table': ResultsTable,
            'component-results-noreply': ResultsNoreply,
            'component-results-prezident21': ResultsPrezident21,
            Analytics
        }
    }
</script>

<style scoped>
    .results {
        max-width: 576px;
        margin-left: auto;
        margin-right: auto;
    }
    .downer {
        position: fixed;
        bottom: 0;
        left: 0;
        /*height: 6vw;*/
        height: 110px;
        width: 100%;
        color: white;
        font-size: 1.2em;
        /*background-color: #abc;*/
    }
    .filler {
        height: 3vw;
    }
    .image {
        max-height: 32px;
    }
    .text {
        color: #092e67;
        line-height: 1.2em;
        font-size: .8rem;
    }
    @media (min-width: 576px) {
        .text {
            font-size: 1rem;
        }
    }
</style>
