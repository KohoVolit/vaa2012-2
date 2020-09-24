<template>
    <div class="result-table">
        <div class="py-1 col-md-8 result-text">
            {{ $t('clicking_detailed_match')}}
        </div>
        <div class="list m-1">
            <div class="list-group" v-for="(result, index) in results" :key="index">
                <div class="list-group-item list-group-item-action flex-column align-items-start" @click="clicked('result_table', {rank: index, id: result.info.id})" data-toggle="modal" data-target="#modal">
                    <div class="d-flex">
                        <!-- <div>
                            <img :src="createImageLink(result.info.picture)" class="picture mr-2" />
                        </div> -->
                        <div>
                            <h3 class="pl-2">{{ result.info.abbreviation }}</h3>
                            <div class="pl-2">{{ result.info.name }}</div>
                        </div>
                        <div class="rating ml-auto pt-1">
                            <!-- <component-stars :stars="result.rating"></component-stars> -->
                            <h4 class="text-center">{{ result.result_percent }}%</h4>
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
    // import Stars from './Stars.vue'
    import ResultsModal from './ResultsModal.vue'

    export default {
        props: ['questions', 'results'],
        data: function () {
            return {
                index: 0
            }
        },
        computed: {
            ...mapGetters({
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
            // 'component-stars': Stars,
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
        min-width: 155px;
    }
    @media (min-width: 576px) {
        .rating {
            padding-right: 1.5rem
        }
    }
</style>
