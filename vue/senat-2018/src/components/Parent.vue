<template>
    <div>
        <h1>Parent</h1>
        <Child :test="test"></Child>
        <Child test="15"></Child>
        <button @click="add()">ADD 1</button>
    </div>
</template>
<script>
    import Child from './Child.vue'

    export default {
        data: function () {
            return {
                test: 1
            }
        },
        methods: {
            add: function () {
                this.test++
            }
        },
        components: {
            Child
        }
    }
</script>
