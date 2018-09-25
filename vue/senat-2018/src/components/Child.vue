<template>
    <div>
        <h2>Child</h2>
        {{ test }}
    </div>
</template>
<script>
    export default {
        props: ['test']
    }
</script>
