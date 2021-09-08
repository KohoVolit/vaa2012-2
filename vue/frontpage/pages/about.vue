<template>
  <div class="container page">
    <nuxt-content :document="about" />

    <hr/>

    <Darujme />
  </div>
</template>

<script>

export default {
  head: function() {
    return {
      title: 'O Volební kalkulačce',
      meta: [
        {
          hid: 'about',
          name: 'O Volební kalkulačce',
          description: 'O Volební kalkulačce - od roku 2006.'
        }
      ]
    }
  },
  
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