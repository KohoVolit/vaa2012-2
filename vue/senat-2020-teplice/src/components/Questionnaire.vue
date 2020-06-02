<template>
    <div>
        <component-header />
        <div class="selection">
            <button class="btn btn-outline-secondary btn-lg btn-block mb-3" @click="goVAA('top')">
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
                Pokračovat
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
            </button>
            <h4 class="p-2">Jsem z volebního obvody Teplice, <small>takže se mně tyto volby týkají:</small></h4>
            <div class="list-group" v-for="(option, index) in ['Ano', 'Ne']" v-bind:key="index">
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <label class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" v-model="local" :id="option" :value="option">
                        <span class="custom-control-indicator"></span>
                        <div class="custom-control-description">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ option }}</h5>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <h4 class="p-2">Chystám se jít volit:</h4>
            <div class="list-group" v-for="(option) in ['Ano', 'Nevím', 'Ne']" v-bind:key="option">
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <label class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" v-model="participation" :id="option" :value="option">
                        <span class="custom-control-indicator"></span>
                        <div class="custom-control-description">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ option }}</h5>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <h4 class="p-2">Uvažuji nad volbou: <small>(můžete vybrat více kandidátů/tek)</small></h4>
            <div class="list-group" v-for="(candidate) in candidates" v-bind:key="candidate.name">
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" v-model="checked[candidate.id]">
                        <span class="custom-control-indicator"></span>
                        <div class="custom-control-description">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ candidate['name'] }} ({{ candidate['abbreviation']}})</h5>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <h4 class="p-2">Bydlím v:</h4>
            <div class="list-group" v-for="(option) in places" v-bind:key="option.name">
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <label class="custom-control custom-checkbox">
                    <input type="radio" class="custom-control-input" v-model="checked_place" :id="option" :value="option">
                        <span class="custom-control-indicator"></span>
                        <div class="custom-control-description">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ option['name'] }}</h5>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <button class="btn btn-success btn-lg btn-block mt-3" @click="goVAA('bottom')">
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
                    Pokračovat
                <font-awesome-icon icon="spinner" class="fa-spin" v-if="spinning" />
                <span v-else>></span>
            </button>
        </div>
        <component-footer />
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import axios from 'axios'

    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faSpinner } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faSpinner)

    export default {
        data: function () {
            let candidates =
                [{"id": 1, "name": "B. Ježek", abbreviation: "SPD"},
                {"id": 2, "name": "Z. Schwarz Bařtipánová", abbreviation: "ANO"},
                {"id": 3, "name": "E. S. Freimann", abbreviation: "Rozumní"},
                {"id": 4, "name": "O. Bubeníček", abbreviation: "KSČM"},
                {"id": 5, "name": "H. Hanza", abbreviation: "ODS"},
                {"id": 6, "name": "J. Syslová", abbreviation: "STAN"},
                {"id": 8, "name": "Z. Pešek", abbreviation: "Trikolóra"},
                {"id": 9, "name": "Z. Bergman", abbreviation: "SEN 21"},
                {"id": 10, "name": "Z. Šimbera", abbreviation: "ČSSD"}]
            let places = [
                {"name": "Teplice"},
                {"name": "Bílina"},
                {"name": "Krupka"},
                {"name": "Dubí"},
                {"name": "Jinde"}

            ]
            var checked = {}
                for (var i = 0; i < candidates.length; i++) { checked[candidates[i].id] = false }
            return {
                candidates,
                checked,
                local: "",
                participation: "",
                places,
                checked_place: "",
                spinning: false
            }
        },
        mounted: function() {
            this.$action('questionnaire_started')
            this.$getSetCookie(this.$settings['cookie'])
        },
        methods: {
            goVAA: function (position) {
                this.scrollToTop()
                this.spinning = true
                this.saveValues(position)
                this.$router.push({path: '/'})

                // this.$router.push({ path: '/results', query: { q: JSON.stringify(this.$store.state.answers), w: JSON.stringify(this.$store.state.weights) } })
            },
            scrollToTop() {
                window.scrollTo(0,0)
            },
            saveValues(position) {
                var c = this.$getSetCookie(this.$settings['cookie'])
                let data = {
                    vkid: c,
                    position: position,
                    local: this.local,
                    participation: this.participation,
                    candidates: this.checked,
                    place: this.checked_places
                }
                // console.log(data)
                axios.get(this.$settings['url'] + this.$settings['save_path'] + 'match/questionnaire.php', { params: data })
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
