<template>
    <div v-if="results[index]" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header row m-2">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="card col-12">
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">{{ results[index].info.abbreviation }}</h4>
                                <div class="card-text">
                                    <!-- <component-stars :stars="results[index].rating"></component-stars> -->
                                    <div class="stars">
                                        <i v-for="n in stars['full']" class="fa fa-star"></i><i v-for="n in stars['half']" class="fa fa-star-half-full"></i><i v-for="n in stars['empty']" class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="card-text text-muted">{{ $t('match') }}: {{ results[index].result_percent }}%</div>
                            </div>
                            <div class="col-4 text-right">
                                <img :src="createImageLink(results[index].info.picture)" class="picture mr-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary btn-lg btn-block mt-2" data-dismiss="modal">{{ $t('close') }}</button>
            </div>
            <div class="modal-body">
                <table class="table-striped w-100">
                    <thead>
                        <th class="text-left">
                            {{ $t('question') }}
                        </th>
                        <th class="text-center">
                            {{ $t('me') }}
                        </th>
                        <th class="text-center">
                            x
                        </th>
                        <th class="text-center">
                            {{ results[index].info.abbreviation }}
                        </th>
                        <th class="text-center">
                            {{ $t('candidate_comment') }}
                        </th>
                    </thead>
                    <tbody>
                        <tr v-for="(question, ix) in questions" :class="[compared(answers[question.id], results[index]['info']['votes'][question.id]), weighted(weights[question.id])]">
                            <td>
                                <i v-if="weights[question.id]" class="fa fa-star"></i>
                                {{ question.name }}
                                <i class="fa fa-info-circle more-question" tabindex="0" data-toggle="popover" data-trigger="focus" :data-content="question.question" :title="$t('question')"></i>
                            </td>
                            <td class="text-center">
                                {{ answer2Text(answers[question.id]) }}
                            </td>
                            <td class="text-center">
                                {{ compare(answers[question.id], results[index]['info']['votes'][question.id]) }}
                            </td>
                            <td class="text-center">
                                {{ answer2Text(results[index]['info']['votes'][question.id]) }}
                            </td>
                            <td class="comment">
                                <small>
                                    {{ shortenText(results[index]['info']['details'][question.id]) }}
                                    <i class="fa fa-info-circle more-info" v-if="shortened(results[index]['info']['details'][question.id])" type="button" data-container="body" data-toggle="popover"  :data-content="getComment(question.id)"></i>
                                </small>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg mt-2" data-dismiss="modal">{{ $t('close') }}</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['index', 'questions', 'results', 'answers', 'weights'],
        mounted: function () {
            // eslint-disable-next-line
            if ($ !== undefined) {
                // eslint-disable-next-line
                $(function () {
                    // eslint-disable-next-line
                  $('[data-toggle="popover"]').popover()
                })
            }
        },
        computed: {
            stars: function () {
                var full = Math.floor(this.results[this.index].rating)
                var half = 0
                if (full < this.results[this.index].rating) {
                    half = 1
                }
                var empty = 5 - full - half
                return {
                    full,
                    half,
                    empty
                }
            }
        },
        methods: {
            send: function (s) {
                return s
            },
            createImageLink: function (name) {
                return this.$settings['cdn'] + this.$settings['path'] + this.$settings['pic_path_large'] + name
            },
            answer2Text: function (a) {
                if (a === 1) return this.$t('yes')
                if (a === -1) return this.$t('no')
                if (a === 0) return this.$t('dont_know')
                return '--'
            },
            compare: function (a, b) {
                if ((a * b) === -1) return 'x'
                else return ''
            },
            compared: function (a, b) {
                if (a === undefined) return 'text-muted'
                if ((a * b) === -1) return 'text-danger'
                if ((a * b) === 1) return 'text-success'
                else return ''
            },
            weighted: function (w) {
                if (w) return 'strong'
                else return ''
            },
            getComment: function (questionId) {
                return this.results[this.index]['info']['details'][questionId]
            },
            shortenText: function (t) {
                if (!t) { return '' }
                var w = window.innerWidth
                var n = 0
                if (w < 576) n = 20
                else n = 400
                if (t.length > n) {
                    return t.substr(0, n - 3) + '...'
                }
                return t
            },
            shortened: function (t) {
                if (!t) return false
                var w = window.innerWidth
                var n = 0
                if (w < 576) n = 20
                else n = 400
                if (t.length > n) {
                    return true
                }
                return false
            }
        },
        components: {
        }
    }
</script>

<style scoped>
    .card {
    }
    .card-title {
        margin-bottom: 0;
    }
    .picture {
        height: 90px;
        border-radius: 50%;
    }
    .strong {
        font-weight: bold;
    }
    .comment {
        line-height: 100%;
    }
    .more-info {
        font-size: 1.5em;
    }
    .more-question:hover,.more-info:hover {
        cursor: pointer;
    }
    @media (min-width: 992px) {
        .modal-lg {
            max-width: 70%;
        }
    }
    .stars {
        color: #ffc107;
    }
    @media (min-width: 576px) {
        .stars {
            font-size: 1.75rem;
        }
    }
</style>
