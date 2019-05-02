<template>
    <div class="stars" :class="muted_class">
        <font-awesome-icon v-for="n in full" icon="star" /><font-awesome-icon v-for="n in half" icon="star-half-alt" /><font-awesome-icon v-for="n in empty" :icon="['far', 'star']" />
    </div>
</template>

<script>
    // import 'font-awesome/css/font-awesome.css'
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faStar, faStarHalfAlt } from '@fortawesome/free-solid-svg-icons'
    import { faStar as farStar } from '@fortawesome/free-regular-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faStar, faStarHalfAlt, farStar)

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
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon
        }
    }
</script>
<style scoped>
    .stars {
        color: #ffc107;
        white-space: nowrap;
    }
    @media (min-width: 576px) {
        .stars {
            font-size: 1.75rem;
        }
    }
</style>
