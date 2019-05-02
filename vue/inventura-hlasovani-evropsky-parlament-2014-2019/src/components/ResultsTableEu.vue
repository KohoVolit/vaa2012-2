<template>
    <div class="result-table pt-4">
        <h2>{{ $t('all_meps') }}</h2>
        <div class="py-1 col-md-8 result-text">
            {{ $t('clicking_detailed_match')}}
        </div>
        <div class="list m-1">
            <div class="list-group" v-for="(result, index) in resultsEu">
                <div class="list-group-item list-group-item-action flex-column align-items-start" @click="clicked('result_table_eu', {rank: index, id: result.info.id})" data-toggle="modal" data-target="#modal-eu">
                    <div class="d-flex">
                        <div>
                            <!-- <img :src="result.info.picture" class="picture mr-2" /> -->
                        </div>
                        <div>
                            <h5 class="pl-2">{{ result.info.name }}</h5>
                            <div class="pl-2">{{ result.info.party }}</div>
                            <div class="pl-2"><img :src="result.info.political_group_logo" /><small> {{ result.info.political_group }}</small></div>
                            <div class="pl-2"><img :src="result.info.country_logo" /><small> {{ result.info.country }}</small></div>
                        </div>
                        <div class="rating ml-auto pt-1">
                            <!-- <component-stars :stars="result.rating"></component-stars> -->
                            <div class="text-center">{{ result.result_percent }}%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-eu" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <component-results-modal
                :index="index"
                :questions="questions"
                :results="resultsEu"
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
                resultsEu: 'getResultsEu',
                answers: 'getAnswers',
                weights: 'getWeights'
            })
        },
        methods: {
            clicked: function (campaign, attributes) {
                this.openingModal(attributes['rank'])
                this.$clicked(campaign, attributes)
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
        padding-right: 0.5rem
    }
    @media (min-width: 576px) {
        .rating {
            padding-right: 1.5rem
        }
    }
</style>
