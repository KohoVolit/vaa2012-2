<template>
    <div class="stars" :class="muted_class">
        <i v-for="n in full" class="fa fa-star"></i><i v-for="n in half" class="fa fa-star-half-full"></i><i v-for="n in empty" class="fa fa-star-o"></i>
    </div>
</template>

<script>
    import 'font-awesome/css/font-awesome.css'

    export default {
        props: ['stars', 'muted'],
        data: function () {
            return {
                full: 5,
                half: 0,
                empty: 0,
                muted_class: ''
            }
        },
        mounted: function () {
            this.full = Math.floor(this.stars)
            if (this.full < this.stars) {
                this.half = 1
            }
            else {
                this.half = 0
            }
            this.empty = 5 - this.full - this.half

            if ((this.muted !== undefined) && this.muted) {
                this.muted_class = 'text-muted'
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
