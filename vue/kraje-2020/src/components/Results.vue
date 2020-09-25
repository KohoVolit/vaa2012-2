<template>
    <div>
        <component-header></component-header>
        <div class="results">
            <h2> {{ constituency }} </h2>
            <component-results-winners :questions="questions" :results="results" :constituency="constituency" ></component-results-winners>
            <div class="row px-2">
                <div class="col-md-6">
                    <a :href="createFBLink()" target="_blank">
                        <button @click="clicked('fb_top', {})" class="btn btn-primary btn-block btn-lg" style="font-size:1.2em">{{ $t('share_on_fb') }} <font-awesome-icon :icon="['fab', 'facebook']" /></button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a :href="createEmailLink()">
                        <button class="btn btn-warning btn-block btn-lg" @click="clicked('email_top', {})" style="font-size:1.2em">{{ $t('send_by_email')}} <font-awesome-icon icon="envelope" /></button>
                    </a>
                </div>
            </div>
            <component-results-table :questions="questions" :answers="$store.state.answers" :constituency="constituency" :results="results" v-on:clickedDetails="clickedDetails" :test="test"></component-results-table>

            <div class="row px-2">
                <div class="col-md-6">
                    <a :href="createFBLink()" target="_blank" >
                        <button @click="clicked('fb_lower', {})" class="btn btn-primary btn-block btn-lg" style="font-size:1.2em">{{ $t('share_on_fb') }}<font-awesome-icon :icon="['fab', 'facebook']" /></button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a :href="createEmailLink()">
                        <button class="btn btn-warning btn-block btn-lg" @click="clicked('email_lower', {})" style="font-size:1.2em">{{ $t('send_by_email')}} <font-awesome-icon icon="envelope" /></button>
                    </a>
                </div>
            </div>

            <!-- <a @click="clicked('all_questions_table', {'text': 'overview'})" href="https://docs.google.com/spreadsheets/d/1BaIrFKahwlY_fhErjlZVnhGxL5qw4jQJAfNa2yT2CNU/edit#gid=0" target="_blank" class="btn btn-info btn-block btn-lg mt-4"><font-awesome-icon icon="table" /> Přehled odpovědí kandidátů v tabulce</a> -->


            <!-- <a @click="clicked('all_questions_table', {'text': 'overview'})" href="https://docs.google.com/spreadsheets/d/1_1ya3KCgY4Z9j932Xz8SVn28NpE-xuvRHwzOP69dAJQ/edit?usp=sharing" target="_blank" class="btn btn-info btn-block btn-lg mt-4"><font-awesome-icon icon="table" /> Přehled všech odpovědí v tabulce</a> -->
            <component-results-noreply :noreplies="noreplies"></component-results-noreply>
            <hr />
            <a @click="clicked('programy_do_voleb', {'text': 'overview'})" href="https://programydovoleb.cz/" target="_blank" class="btn btn-info btn-block btn-lg mt-4"><font-awesome-icon icon="info-circle" /> Další informace o kandidátech - ProgramyDoVoleb.cz</a>
            <hr />
            <Darujme></Darujme>
            <div class="row">
                <div class="col">
                <a @click="clicked('mandaty', {'text': 'overview'})" href="https://mandaty.cz/" target="_blank" class="btn btn-primary btn-block btn-lg mt-4"><font-awesome-icon :icon="['fas', 'chart-bar']" /> Volební průzkumy přepočtené na Mandáty.cz</a>
                </div>
                <div class="col">
                <a @click="clicked('volebni_atlas', {'text': 'overview'})" href="https://volebniatlas.cz/" target="_blank" class="btn btn-warning btn-block btn-lg mt-4"><font-awesome-icon :icon="['fas', 'atlas']" /> Detailní výsledky voleb v mapách: VolebníAtlas.cz</a>
                </div>
            </div>
            <a @click="clicked('d_21', {'text': 'overview'})" href="https://volbyjinak.cz/volby-2020" target="_blank" class="btn btn-info btn-block btn-lg mt-4"><font-awesome-icon icon="dice-two" /> <font-awesome-icon icon="dice-one" /> Volební hra: Volby s více hlasy D21</a>
            <!-- <Heroes></Heroes> -->
            <div class="mt-4 ml-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xZquzHPHOsE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <component-footer></component-footer>
        <div class="filler"></div>
        <Analytics></Analytics>
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import ResultsWinners from './ResultsWinners.vue'
    import ResultsTable from './ResultsTable.vue'
    import ResultsNoreply from './ResultsNoreply.vue'
    // import ResultsTableEu from './ResultsTableEu.vue'
    // import ResultsTheOtherRepublic from './ResultsTheOtherRepublic.vue'
    //import questions from '../data/questions.json'
    //import votes from '../data/answers.json'
    // import votesEu from '../data/answers_eu.json'
    import Analytics from './Analytics.vue'
    import Darujme from './Darujme.vue'
    // import Heroes from './Heroes.vue'


    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faEnvelope } from '@fortawesome/free-solid-svg-icons'
    import { faTable } from '@fortawesome/free-solid-svg-icons'
    import { faInfoCircle } from '@fortawesome/free-solid-svg-icons'
    import { faAtlas } from '@fortawesome/free-solid-svg-icons'
    import { faChartBar } from '@fortawesome/free-solid-svg-icons'
    import { faDiceOne } from '@fortawesome/free-solid-svg-icons'
    import { faDiceTwo } from '@fortawesome/free-solid-svg-icons'
    import { faFacebook } from '@fortawesome/free-brands-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faEnvelope)
    library.add(faFacebook)
    library.add(faTable)
    library.add(faInfoCircle)
    library.add(faAtlas)
    library.add(faDiceOne)
    library.add(faDiceTwo)
    library.add(faChartBar)

    export default {
        data: function () {
            return {
                //questions,
                //votes,
                // votesEu,
                test: 1,
                results: [{info: ''}, {info: ''}, {info: ''}],
                resultsEu: [{info: ''}, {info: ''}, {info: ''}],
                answers: {}
            }
        },
        computed: {
            questions: function() {
                let cc = this.$route.query.cc
                // console.log('cc', cc)
                
                // if coming directly
                // console.log(this.$store.state.constituency)
                if (typeof this.$store.state.constituency == 'undefined') {
                    let constituencies = require('../data/constituencies.json')
                    // console.log(constituencies)
                    if (typeof cc !== 'undefined') {
                        for (let c of constituencies) {
                            if (c['constituency_code'] == cc) {
                                this.$store.commit('storeConstituency', c)
                            }
                        }
                    }
                }
                // default region
                if ((typeof cc == 'undefined') || (cc == '')) {
                    cc = 'pl'
                    let constit = {
                        constituency: 'Plzeňský kraj',
                        name: 'Plzeňský kraj',
                        constituency_code: cc
                    }
                    var payload = constit
                    this.$store.commit('storeConstituency', payload)
                }
                return require('../data/questions_' + cc + '.json')
            },
            votes: function() {
                let cc = this.$route.query.cc
                // console.log('votes cc', cc)
                if ((typeof cc == 'undefined') || (cc == '')) {
                    cc = 'pl'
                }
                return require('../data/answers_' + cc + '.json')
            },
            noreplies: function() {
                let cc = this.$route.query.cc
                // console.log('noreplies cc', cc)
                if ((typeof cc == 'undefined') || (cc == '')) {
                    cc = 'pl'
                }
                return require('../data/noreply_' + cc + '.json')
            },
            constituency: function() {
                let c = this.$store.state.constituency
                if (typeof c != 'undefined') {
                    return c.name
                } else {
                    return ''
                }
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
                var last = this.results.length - 1
                var quote = this.$t('fb_1') + '\n' +
                this.results[0].info.abbreviation + ' - ' + this.results[0].info.name + ' (' + this.results[0].result_percent + '%' + ')\n' +
                this.results[1].info.abbreviation + ' - ' + this.results[1].info.name + ' (' + this.results[1].result_percent + '%' +  ')\n' +
                this.results[2].info.abbreviation + ' - ' + this.results[2].info.name + ' (' + this.results[2].result_percent + '%' + ')\n...\n' +
                this.results[last].info.abbreviation + ' - ' + this.results[last].info.name + ' (' + this.results[last].result_percent + '%)'
                let cc = this.$route.query.cc
                var href = {
                    ref: this.$getSetCookie(this.$settings['cookie']),
                    og_image: 'https://volebnikalkulacka.azureedge.net/kraje-2016/image/background/' + cc + '.jpg',
                    og_title: this.$t('og_title'),
                    og_description: this.$t('og_description')
                }
                // console.log(href)
                var d = {
                    'app_id': this.$settings['fb_app_id'],
                    'display': 'page',
                    'link': this.$settings['url'] + '?' + encodeQueryData(href),
                    'quote': quote
                }
                // console.log(d)
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
                var attributes = {
                    index: params[0],
                    abbreviation: params[1]
                }
                this.clicked('details', attributes)
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
            },
            scrollToTop() {
                window.scrollTo(0,0)
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

            // this.resultsEu = this.calcMatch(this.$store.state.answers, this.$store.state.weights, this.votesEu, 2)
            // this.resultsEu.sort(function (a, b) {
            //     return b.random - a.random
            // })
            // this.resultsEu.sort(function (a, b) {
            //     return b.result - a.result
            // })
            // this.$store.commit('storeResultsEu', this.resultsEu)

            var answer = {}
            let jsoned = ['q', 'w']
            for (var k in this.$route.query) {
                if (k in jsoned) {
                    answer[k] = JSON.parse(this.$route.query[k])
                } else {
                    answer[k] = this.$route.query[k]
                }
            }
            this.$save_results(answer)

            this.scrollToTop()
        },
        components: {
            'component-header': Header,
            'component-footer': Footer,
            'component-results-winners': ResultsWinners,
            'component-results-table': ResultsTable,
            'component-results-noreply': ResultsNoreply,
            // 'component-results-table-eu': ResultsTableEu,
            // 'component-results-the-other-republic': ResultsTheOtherRepublic,
            'font-awesome-icon': FontAwesomeIcon,
            Analytics,
            Darujme,
            // Heroes
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
    .wall-text {
        font-size: 0.9em;
    }
    @media (min-width: 576px) {
        .text {
            font-size: 1rem;
        }
        .wall-text {
            font-size: 1em;
        }
    }
</style>
