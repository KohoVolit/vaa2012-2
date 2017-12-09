<template>
    <div>
        <component-header></component-header>
        <div class="results">
            <component-results-winners :questions="questions" :results="results" :settings="settings"></component-results-winners>
            <component-results-table :questions="questions" :settings="settings" :answers="$store.state.answers" v-on:clickedDetails="clickedDetails">
            </component-results-table>
        </div>
        <component-footer></component-footer>
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import ResultsWinners from './ResultsWinners.vue'
    import ResultsTable from './ResultsTable.vue'
    import questions from '../data/questions.json'
    import votes from '../data/answers.json'
    import settings from '../settings.json'

    export default {
        data: function () {
            return {
                settings,
                questions,
                votes,
                results: [{info: ''}, {info: ''}, {info: ''}],
                answers: {}
            }
        },
        methods: {
            clickedDetails: function (params) {
                var attributes = {
                    index: params[0],
                    abbreviation: params[1]
                }
                this.clicked('details', attributes)
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
                    rating: Math.round(((1 + sum / count) / 2) * 10) / 2,
                    random: Math.random()
                }
                return result
            }
        },
        mounted: function () {
            this.$store.settings = this.settings
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
            'component-results-table': ResultsTable
        }
    }
</script>

<style>
</style>
