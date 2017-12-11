<template>
    <div>
        <component-header></component-header>
        <div class="results">
            <component-results-winners :questions="questions" :results="results"></component-results-winners>
            <div class="row px-2">
                <div class="col-md-6">
                    <a :href="createFBLink()" target="_blank">
                        <button class="btn btn-primary btn-block btn-lg">{{ $t('share_on_fb') }}<i class="fa fa-facebook-official"></i></button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a :href="createEmailLink()">
                        <button class="btn btn-warning btn-block btn-lg">{{ $t('sent_by_email')}} <i class="fa fa-envelope"></i></button>
                    </a>
                </div>
            </div>
            <component-results-table :questions="questions" :answers="$store.state.answers" v-on:clickedDetails="clickedDetails">
            </component-results-table>
            <component-results-noreply :questions="questions"></component-results-noreply>
        </div>
        <component-footer></component-footer>
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import ResultsWinners from './ResultsWinners.vue'
    import ResultsTable from './ResultsTable.vue'
    import ResultsNoreply from './ResultsNoreply.vue'
    import questions from '../data/questions.json'
    import votes from '../data/answers.json'

    export default {
        data: function () {
            return {
                questions,
                votes,
                results: [{info: ''}, {info: ''}, {info: ''}],
                answers: {}
            }
        },
        methods: {
            createFBLink: function () {
                function encodeQueryData (data) {
                    let ret = []
                    for (let d in data) {
                       ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]))
                    }
                    return ret.join('&')
                }
                var last = this.results.length - 1
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
                var querystring = encodeQueryData(d);
                return 'https://www.facebook.com/dialog/feed?' + querystring
            },
            createEmailLink: function () {
                var s = this.$t('email_1')
                var b = this.$t('email_2') + this.$getSetCookie(this.$settings['cookie'])
                var subject = encodeURIComponent(s)
                var body = encodeURIComponent(b)
                var mailto = "mailto:?subject=" + subject + "&body=" + body
                return mailto
            },
            clickedDetails: function (params) {
                // var attributes = {
                //     index: params[0],
                //     abbreviation: params[1]
                // }
                // this.clicked('details', attributes)
            },
            clicked: function (campaign, attributes) {
                // var c = this.getSetCookie()
                // var data = {
                //     vkid: c,
                //     calc: 'cz2017vk',
                //     campaign: campaign,
                //     attributes: attributes
                // }
                // axios.get("https://volebnikalkulacka.cz/volby-2017-simple/match/click.php", { params: data })
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
            // console.log(this.createFBLink())

            // var c = this.getSetCookie()
            // // if (!this.$store.getters.getAnswersStored) {
            //     var answer = {}
            //     for (var k in this.$route.query) {
            //         answer[k] = JSON.parse(this.$route.query[k])
            //     }
            //     var data = {
            //         vkid: c,
            //         calc: 'cz2017vk',
            //         answer: JSON.stringify(answer),
            //         attributes: JSON.stringify({})
            //     }
            //     // axios.post(this.settings['api_path'] + 'answers', data).then(
            //     //     this.$store.commit('storeAnswersStored', true)
            //     // )
            //     axios.get("https://volebnikalkulacka.cz/volby-2017-simple/match/results.php", { params: data })
            // // }
        },
        components: {
            'component-header': Header,
            'component-footer': Footer,
            'component-results-winners': ResultsWinners,
            'component-results-table': ResultsTable,
            'component-results-noreply': ResultsNoreply
        }
    }
</script>

<style scoped>
    .results {
        max-width: 576px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
