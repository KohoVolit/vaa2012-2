<template>
    <div>
        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" :style="progressStyle" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['progress'],
    computed: {
        progressStyle () {
            return {
                width: this.progress + '%'
            }
        }
    }
}
</script>

<style scoped>
    .progress {
        height: 8px;
        border-radius: 0;
    }
</style>
