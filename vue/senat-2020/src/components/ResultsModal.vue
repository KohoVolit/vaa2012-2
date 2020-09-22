<template>
<div>
  <div v-if="show" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header row m-2">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="card col-12">
            <div class="card-body pb-1">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">{{ results[index].info.name }}</h4>
                        <div class="card-text">
                            <span>{{ results[index].info.party }}</span><br />
                        </div>
                        <div class="card-text text-muted">{{ $t('match') }}: {{ results[index].result_percent }}%</div>
                    </div>
                    <div class="col-4 text-right">
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
                      {{ results[index].info.name }}
                  </th>
                  <th class="text-center">
                      {{ $t('candidate_comment') }}
                  </th>
              </thead>
              <tbody>
                  <tr v-for="(question, ix) in questions" :key="ix" :class="[precompared(question, index), weighted(weights[question.id])]">
                      <td>
                          <i v-if="weights[question.id]" class="fa fa-star"></i>
                          <font-awesome-icon icon="star" v-if="weights[question.id]" />
                          {{ question.name }}
                          <font-awesome-icon icon="info-circle" v-b-popover.hover.top="question.question" />
                      </td>
                      <td class="text-center">
                          {{ answer2Text(answers[question.id]) }}
                      </td>
                      <td class="text-center">
                          {{ precompare(question, index) }}
                      </td>
                      <td class="text-center">
                          {{ preanswer2TextThem(question, index) }}
                      </td>
                      <td class="text-center comment p-2">
                          {{ preshortenText(question, index) }}
                          <font-awesome-icon icon="info-circle" v-b-popover.hover.top="hoverTop(question, index)" v-if="preshortened(question, index)"/>
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
</div>
</template>

<script>
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faEnvelope } from '@fortawesome/free-solid-svg-icons'
    import { faInfoCircle } from '@fortawesome/free-solid-svg-icons'
    import { faStar } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faEnvelope)
    library.add(faInfoCircle)
    library.add(faStar)

    export default {
        props: {
          index: Number, 
          questions: Array, 
          results: Array, 
          answers: Object, 
          weights: Object
        },
        mounted: function () {
            // eslint-disable-next-line
            if (typeof $ !== 'undefined') {
                // eslint-disable-next-line
                $(function () {
                    // eslint-disable-next-line
                  $('[data-toggle="popover"]').popover()
                })
            }
        },
        computed: {
            show: function () {
              // console.log('show', this.index, this.results)
              if ((typeof this.index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > this.index)) {
                return true
              } else {
                return false
              }
            },
            stars: function () {
              console.log("stars", this.index)
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
            answer2Text: function (a) {
                if (a === 1) return this.$t('yes')
                if (a === -1) return this.$t('no')
                if (a === 0) return this.$t('dont_know')
                return '--'
            },
            preanswer2TextThem: function(question, index) {
              // console.log('preanswer2TextThem', question.id, index, this.results.length)
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index) && (typeof this.results[index]['info']['votes'] !== 'undefined')) {
                return this.answer2TextThem(this.results[index]['info']['votes'][question.id])
              } else {
                return ''
              }
            },
            answer2TextThem: function (a) {
                if (a === 1) return this.$t('yes')
                if (a === -1) return this.$t('no')
                if (a === 0) return this.$t('dont_know_them')
                return '--'
            },
            precompare: function(question, index) {
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index) && (question.id in this.answers)) {
                return this.compare(this.answers[question.id], this.results[index]['info']['votes'][question.id])
              } else {
                return ''
              }
            },
            compare: function (a, b) {
                // console.log('compare', a, b)
                if ((a * b) === -1) return 'x'
                else return ''
            },
            precompared: function(question, index) {
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index) && (question.id in this.answers)) {
                return this.compared(this.answers[question.id], this.results[index]['info']['votes'][question.id])
              } else {
                return ''
              }
            },
            compared: function (a, b) {
              // console.log('compared', a, b)
                if (a === undefined) return 'text-muted'
                if ((a * b) === -1) return 'text-danger'
                if ((a * b) === 1) return 'text-success'
                else return ''
            },
            weighted: function (w) {
                if (w) return 'strong'
                else return ''
            },
            hoverTop: function(question, index) {
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index)) {
                return this.results[index]['info']['details'][question.id]
              } else {
                return ''
              }
            },
            preshortenText: function(question, index) {
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index) && (typeof this.results[index]['info']['votes'] !== 'undefined')) {
                return this.shortenText(this.results[index]['info']['details'][question.id])
              } else {
                return ''
              }
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
            preshortened: function(question, index) {
              if ((typeof index !== 'undefined') && (typeof this.results !== 'undefined') && (this.results.length > index) && (typeof this.results[index]['info']['votes'] !== 'undefined')) {
                return this.shortened(this.results[index]['info']['details'][question.id])
              } else {
                return false
              }
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
            'font-awesome-icon': FontAwesomeIcon
        }
    }
</script>

<style scoped>
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
