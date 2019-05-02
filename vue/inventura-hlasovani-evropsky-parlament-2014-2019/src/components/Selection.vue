<template>
    <div>
        <component-header></component-header>
        <!-- <button class="btn btn-outline-primary btn-sm" @click="goVAA()"> < {{ $t('back') }}</button> -->
        <div class="selection">
            <h4 class="p-2">
                {{ $t('select_extra_important_questions') }}
            </h4>
            <button class="btn btn-outline-secondary btn-lg btn-block mb-3" @click="goResults()">
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
                    {{ $t('skip') }}
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
            </button>
            <div class="list-group" v-for="question in questions" v-if="answered[question.id]">
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" v-model="checked[question.id]" @change="storeWeights()">
                        <span class="custom-control-indicator"></span>
                        <div class="custom-control-description">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ question.name }} ({{ answers[question.id] }})</h5>
                            </div>
                            <small class="mb-1 text-muted">
                                {{ question.question }}
                            </small>
                        </div>
                    </label>
                </div>
            </div>
            <button class="btn btn-success btn-lg btn-block mt-3" @click="goResults()">
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
                    {{ $t('result') }}
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
            </button>
        </div>
        <component-footer></component-footer>
    </div>
</template>

<script>
    import questions from '../data/questions.json'
    import Header from './Header.vue'
    import Footer from './Footer.vue'

    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faSpinner } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faSpinner)

    export default {
        data: function () {
            var checked = {}
            for (var i = 0; i < questions.length; i++) { checked[questions[i].id] = false }
            var answered = {}
            var answers = {}
            var q = JSON.parse(this.$route.query.q)
            for (var k in questions) {
                var question = questions[k]
                if (Math.abs(q[parseInt(question.id)]) > 0) {
                    answered[question.id] = true
                    this.$store.state.answers[parseInt(question.id)] = q[parseInt(question.id)]
                }
                else {
                    answered[question.id] = false
                }
                if (q[parseInt(question.id)] === -1) {
                    answers[question.id] = this.$t('no')
                }
                if (q[parseInt(question.id)] === 1) {
                    answers[question.id] = this.$t('yes')
                }
            }

            return {
                questions,
                answered,
                answers,
                checked: checked,
                spinning: false
            }
        },
        methods: {
            addChecked: function () {
                this.checked.push({question_id: false})
            },
            storeWeights: function () {
                this.$store.commit('storeWeights', this.checked)
            },
            goResults: function () {
                this.spinning = true
                this.$router.push({ path: '/results', query: { q: JSON.stringify(this.$store.state.answers), w: JSON.stringify(this.$store.state.weights) } })
            }
        },
        components: {
            'component-header': Header,
            'component-footer': Footer,
            'font-awesome-icon': FontAwesomeIcon
        }
    }
</script>

<style scoped>
    button:hover {
        cursor: pointer;
    }
    .selection {
        max-width: 992px;
        margin-left: auto;
        margin-right: auto;
        min-height: calc(100vh - 56px);
    }
    .custom-control {
        position: relative;
        display: -ms-inline-flexbox;
        display: inline-flex;
        min-height: 1.5rem;
        padding-left: 1.5rem;
        margin-right: 1rem;
        min-width: 90vw;
    }
    .custom-control:hover {
        cursor: pointer;
    }
    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    }
    .custom-control-input:checked ~ .custom-control-indicator {
        color: #fff;
        background-color: #007bff;
    }
    .custom-checkbox .custom-control-indicator {
        border-radius: .25rem;
    }
    .custom-control-indicator {
        position: absolute;
        top: .25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #ddd;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 50% 50%;
    }
</style>
