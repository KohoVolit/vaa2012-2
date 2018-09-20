<template>
    <div v-if="exist" class="noreply pt-3">
        <p>
            {{ $t('no_replies') }}
        </p>
        <!-- <div class="list">
            <div class="list-group" v-for="(result, index) in noreply">
                <div class="list-group-item list-group-item-action flex-column align-items-start bg-white">
                    <div class="d-flex">
                        <div>
                            <img :src="createImageLink(result.picture)" class="picture mr-2" />
                        </div>
                        <div>
                            <h3 class="pl-2 text-muted">{{ result.family_name }}</h3>
                            <div class="pl-2 text-muted">{{ result.given_name }}</div>
                        </div>
                        <div class="rating ml-auto pt-1">
                            <component-stars :stars="0" :muted="true"></component-stars>
                            <div class="text-center">? %</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>

<script>
    import noreply from '../data/noreply.json'
    import Stars from './Stars.vue'

    export default {
        props: ['questions'],
        data: function () {
            return {
                exist: false,
                noreply
            }
        },
        mounted: function () {
            if (this.noreply.length > 0) {
                this.exist = true
            }
        },
        methods: {
            createImageLink: function (name) {
                // console.log(this.$store.setttings)
                return this.$settings['cdn'] + this.$settings['path'] + this.$settings['pic_path_small'] + name
            }
        },
        components: {
            'component-stars': Stars
        }
    }
</script>

<style>
    .rating {
        padding-right: 0.5rem
    }
    @media (min-width: 576px) {
        .rating {
            padding-right: 1.5rem
        }
    }
    .picture {
        height: 64px;
        border-radius: 50%;
    }
</style>
