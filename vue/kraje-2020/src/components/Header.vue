<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">{{ $t("header_name") }}
      <small>{{ regionHeader }}</small>
    </a>

  </nav>
</template>

<script>
  export default {
    computed: {
      regionHeader: function() {
        if (typeof this.$store.state.constituency != 'undefined') {
          return this.$store.state.constituency['name']
        } else {
          return ''
        }
      }
    }

  }
</script>

<style>

</style>
