<template>
    <div class="result-table">
        <div class="pt-1 pb-1 col-md-8 result-text">
            {{ $t('clicking_detailed_match')}}
        </div>
        <div class="list">
            <div class="list-group" v-for="(result, index) in results">
                <div class="list-group-item list-group-item-action flex-column align-items-start" @click="openingModal(index)" data-toggle="modal" data-target="#modal">
                    <div class="d-flex">
                        <div>
                            <img :src="createImageLink(result.info.picture)" class="picture mr-2" />
                        </div>
                        <div>
                            <h3 class="pl-2">{{ result.info.family_name }}</h3>
                            <div class="pl-2">{{ result.info.given_name }}</div>
                        </div>
                        <div class="rating ml-auto pt-1">
                            <component-stars :stars="result.rating"></component-stars>
                            <div class="text-center">{{ result.result_percent }}%</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <component-results-modal
                :index="index"
                :questions="questions"
                :results="results"
                :answers="answers"
                :weights="weights"
                :settings="settings">
            </component-results-modal>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import Stars from './Stars.vue'
    import ResultsModal from './ResultsModal.vue'

    export default {
        props: ['questions', 'settings'],
        data: function () {
            return {
                index: 0
            }
        },
        computed: {
            ...mapGetters({
                results: 'getResults',
                answers: 'getAnswers',
                weights: 'getWeights'
            })
        },
        methods: {
            getResults: function () {
                return this.$store.state.results
            },
            createImageLink: function (name) {
                // console.log(this.$store.setttings)
                return this.settings['cdn'] + this.settings['path'] + 'statics/pictures/48x64/' + name
            },
            openingModal: function (index) {
                this.index = index
            }
        },
        components: {
            'component-stars': Stars,
            'component-results-modal': ResultsModal
        }
    }
</script>

<style scoped>
    .result-table {
        max-width: 576px;
        margin-left: auto;
        margin-right: auto;
    }
    .picture {
        float: left;
        height: 64px;
        border-radius: 50%;
    }
    .list-group-item {
        border: 0;
    }
    .list-group:hover {
        cursor: pointer;
    }
    .list {
        border: 1px solid rgba(0,0,0,.125);
    }
    .rating {
        padding-right: 0.5rem
    }
    @media (min-width: 576px) {
        .rating {
            padding-right: 1.5rem
        }
    }
</style>
