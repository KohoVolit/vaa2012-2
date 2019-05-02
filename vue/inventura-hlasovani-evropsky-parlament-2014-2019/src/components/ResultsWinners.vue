<template>
    <div class="row result-winners justify-center m-1">
        <div class="card-group">
            <div v-for="(result, index) in results.slice(0,3)" class="card" @click="clicked('result_winners', {rank: index, id: result.info.id})" data-toggle="modal" data-target="#modal-winners">
                <div class="card-body">
                    <img :src="result.info.picture" class="picture mr-2" />
                    <h5 class="card-title">{{ result.info.name }}</h5>
                    <h6 class="card-title">{{ result.info.party }}</h6>
                </div>
                <div class="card-footer">
                    <component-stars :stars="result.rating"></component-stars>
                    <div class="card-text text-muted">{{ $t('match') }}: {{ result.result_percent }}%</div>
                    <span class="badge badge-secondary">{{ index + 1 }}</span>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-winners" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <component-results-modal
                :index="index"
                :questions="questions"
                :results="results"
                :answers="answers"
                :weights="weights">
            </component-results-modal>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import Stars from './Stars.vue'
    import ResultsModal from './ResultsModal.vue'

    export default {
        props: ['questions'],
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
            clicked: function (campaign, attributes) {
                this.openingModal(attributes['rank'])
                this.$clicked(campaign, attributes)
            },
            getResults: function () {
                return this.$store.state.results
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
    .col-4 {
        padding-left: 5px;
        padding-right: 5px;
    }
    .card-title {
        margin-bottom: 0;
    }
    .picture {
        height: 90px;
        border-radius: 50%;
    }
    .badge {
        font-size: 1.5em;
    }
    .card {
        cursor: pointer;
    }
    .card:hover {
        background-color: #f8f9fa;
    }
    @media (max-width: 576px) {
        .card {

        }
        .card-body {
            padding: 0.25rem;
        }
        .card-title {
            font-size: 1.1rem;
        }
        .badge {
            font-size: 1em;
        }
    }
</style>
