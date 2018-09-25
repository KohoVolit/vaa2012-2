<template>
    <div class="stars" :class="muted_class">
        <i v-for="n in full" class="fa fa-star"></i><i v-for="n in half" class="fa fa-star-half-full"></i><i v-for="n in empty" class="fa fa-star-o"></i>
    </div>
</template>

<script>
    import 'font-awesome/css/font-awesome.css'

    export default {
        props: ['stars', 'muted'],
        computed: {
            full: function () {
                return Math.floor(this.stars)
            },
            half: function () {
                if (this.full < this.stars) {
                    return 1
                }
                else {
                    return 0
                }
            },
            empty: function () {
                return 5 - this.full - this.half
            },
            muted_class: function () {
                if ((this.muted !== undefined) && this.muted) {
                    return 'text-muted'
                }
            }
        }
    }
</script>
<style scoped>
    .stars {
        color: #ffc107;
    }
    @media (min-width: 576px) {
        .stars {
            font-size: 1.75rem;
        }
    }
</style>
