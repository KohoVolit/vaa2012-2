<template>
    <div class="result-table pt-4">
        <h2>{{ $t('local_meps') }}</h2>
        <div class="py-1 col-md-8 result-text">
            {{ $t('clicking_detailed_match')}}
        </div>
        <div class="list m-1">
            <div class="list-group" v-for="(result, index) in results">
                <div class="list-group-item list-group-item-action flex-column align-items-start" @click="clicked('result_table', {rank: index, id: result.info.id})" data-toggle="modal" data-target="#modal">
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <img :src="result.info.picture" class="picture mr-2" />
                            <div class="rating d-block d-sm-none">{{ result.result_percent }}%</div>
                        </div>
                        <div class="col-8 col-sm-6">
                            <h3 class="pl-2">{{ result.info.name }}</h3>
                            <div class="pl-2">{{ result.info.party }}</div>
                            <div class="pl-2"><img :src="result.info.political_group_logo" /><small> {{ result.info.political_group }}</small></div>
                        </div>
                        <div class="rating pt-1 col-sm-4 d-none d-sm-block">
                            <component-stars :stars="result.rating"></component-stars>
                            <div class="">{{ result.result_percent }}%</div>
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
            createImageLink: function (name) {
                // console.log(this.$store.setttings)
                return this.$settings['cdn'] + this.$settings['path'] + this.$settings['pic_path_small'] + name
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
    .picture {
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
        padding-right: 0.5rem;
        font-size: 1.5rem;
        text-align: center;
    }
    h3 {
        font-size: 1em;
    }
    @media (min-width: 576px) {
        h3 {
            font-size: 2rem;
        }
        .rating {
            padding-right: 1.5rem;
            font-size: 2rem;
            text-align: right;
        }
    }
</style>
