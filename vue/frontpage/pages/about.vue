<template>
  <div class="container page">
    <nuxt-content :document="about" />

    <hr/>

    <Darujme />
  </div>
</template>

<script>

export default {
async asyncData ({ $content }) {
    const about = await $content('about').fetch()
    return { about }
  },
}
</script>

<style>
  a { 
    text-decoration: none; 
  }
</style>