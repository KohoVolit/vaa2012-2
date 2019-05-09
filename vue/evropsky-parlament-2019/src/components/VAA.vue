<template>
    <div>
        <div class="page">
            <component-header></component-header>
            <component-progress :progress="progress"></component-progress>
            <b-carousel id="carousel"
                        controls
                        indicators
                        :interval="0"
                        :wrap="false"
                        v-model="slide"
                        @sliding-start="onSlideStart"
                        ref="carousel"
            >
                <div v-for="(question, index) in questions" :key="index">
                    <b-carousel-slide :question="question" class="carousel-item">
                        <div class="row d-flex align-items-stretch item-inner item-inner-upper">
                            <div class="col-md-2 col-sm-1">

                            </div>
                            <div class="col-sm-10 col-md-8 align-self-center">

                                <div class="d-flex justify-content-center text-dark">
                                    <h2 class="h2 vaa-width">{{ question.question }}</h2>
                                </div>
                                <div class="d-flex justify-content-center text-dark">
                                    <p class="p-2 vaa-width vaa-description">{{ question.description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-stretch item-inner item-inner-lower">
                            <div class="col-sm-1 col-md-2"></div>
                            <div class="col-sm-10 col-md-8">
                                <div class="vaa-width" style="margin:auto;">
                                    <div class="row p-2" data-toggle="buttons">
                                        <div class="col-4">
                                            <label class="btn btn-outline-primary btn-lg btn-block" :class="checked(question.id, 1)" @click="addAnswer(question.id, 1)">
                                                <input type="radio" :name="radioName(index)" :id="radionId(question.id, 1)" class="vaa-btn">{{ $t("YES") }}
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label class="btn btn-outline-primary btn-lg btn-block" :class="checked(question.id, -1)" @click="addAnswer(question.id, -1)">
                                                <input type="radio" :name="radioName(index)" :id="radionId(question.id, -1)"  class="vaa-btn" checked="checked">{{ $t("NO") }}
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label class="btn btn-outline-secondary btn-lg btn-block" :class="checked(question.id, 0)" @click="addAnswer(question.id, 0)">
                                                <input type="radio" :name="radioName(index)" :id="radionId(question.id, 0)" class="vaa-btn" @click="addAnswer(question.id, 0)"><small>{{ $t("dont_know") }}</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </b-carousel-slide>
                </div>
            </b-carousel>
            <component-footer></component-footer>
            <Analytics></Analytics>
        </div>
    </div>
</template>

<script>

    import questions from '../data/questions.json'
    import Header from './Header.vue'
    import Footer from './Footer.vue'
    import Progress from './Progress.vue'
    import Analytics from './Analytics.vue'

    export default {
        data: function () {
            return {
                questions,
                progress: 1,
                slide: 0,
                sliding: null
            }
        },
        mounted: function () {
            this.$action('calc_started')
            this.$getSetCookie(this.$settings['cookie'])
            if (this.$route.query.s > 0) {
                this.slide = this.$route.query.s - 1
            }
            else {
                this.slide = 0
            }
            // this.onSlideEnd(this.slide)
        },
        methods: {
            onSlideStart (slide) {
                this.progress = 100 * (slide / this.questions.length)
                this.$router.push({path: '/', query: {s: slide + 1}})
            },
            // onSlideEnd (slide) {
            //     // console.log(slide)
            //     // if (slide === 0) {
            //     //     $('.carousel-control-prev').style.display = 'none'
            //     // }
            //     // else {
            //     //     $('.carousel-control-prev').style.display = 'flex'
            //     // }
            //     // if (slide === (this.questions.length - 1)) {
            //     //     $('.carousel-control-next').style.display = 'none'
            //     // }
            //     // else {
            //     //     $('.carousel-control-next').style.display = 'flex'
            //     // }
            // },
            radioName: function (slide) {
                return 'q-' + slide
            },
            radionId: function (slide, val) {
                return 'q-' + slide + '-' + val
            },
            addAnswer: function (id, value) {
                var payload = {'key': id, 'value': value}
                this.$store.commit('addAnswer', payload)
                setTimeout(() => {
                    if ((this.slide + 1) === this.questions.length) {
                    this.$router.push(
                        { path: '/selection', query: { q: JSON.stringify(this.$store.state.answers) }
                    })
                }
                else {
                    this.slide ++
                }
                    // this.$refs.carousel.next()
                }, 250)

                // for (var i = -1; i <= 1; i++) {
                //     this.answs[i.toString()] = false
                // }
            },
            checked: function (id, value) {
                if (this.$store.state.answers[id] === value) {
                    return 'active'
                }
                else {
                    return ''
                }
            }
        },
        computed: {
        },
        components: {
            'component-header': Header,
            'component-footer': Footer,
            'component-progress': Progress,
            Analytics
        }
    }
</script>

<style>
    .carousel-caption {
        left: 1%;
        right: 0%;
        text-align: left;
        bottom: 0;
        padding-bottom: 0;
    }
    .carousel-item-left, .carousel-item-right {
        text-align: left;
    }
    .carousel-item {
        height: calc(100vh - 56px - 8px);
        background-color: #f4f4f4;
    }
    .vaa-width {
        max-width: 960px;
    }
    .item-inner-upper {
        height: calc(7/10*(100vh - 56px - 8px));
    }
    .item-inner-lower {
        height: calc(3/10*(100vh - 56px - 8px));
    }
    .page {
        height: 100vh;
    }
    .progress {
        height: 8px;
        border-radius: 0;
    }
    .h2 {
        padding: 0 20px;
        font-weight: 700;
        font-size: 1.5rem;
    }
    p {
        font-size: 0.8rem;
    }
    .carousel-control-prev, .carousel-control-next {
        height: 70%;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: #bbb;
    }
    /**/
    /* 320x568, iphone 5, 6% */
    @media (min-width: 350px) {
        .h2 {
            border-left: 5px solid #027be3;
            font-size: 1.5rem;
        }
        p {
            font-size: 0.8rem;
        }
    }
    /* 360x640, e.g. Galaxy S5, 27% */
    /* 375x667, iPhone 6, 6% */
    @media (min-width: 576px) {
        .h2 {
            border-left: 5px solid #027be3;
            font-size: 2.2rem;
        }
        p {
            font-size: 1.1rem;
        }
    }
    /* 1366x768, 1920x1080, ..., laptop, >40% */
    @media (min-width: 960px) {
        .h2 {
            border-left: 5px solid #027be3;
            font-size: 3rem;
        }
        p {
            font-size: 1.25rem;
        }
    }
    .vaa-btn {
        position: absolute;
        clip: rect(0,0,0,0);
        pointer-events: none;
    }
</style>
