<template>
  <div class="page container">
    <h2 class="pt-2">Archiv Volebních kalkulaček</h2>
    <div class="alert alert-secondary">
       Upozornění: Některé starší Volební kalkulačky nemusejí fungovat z důvodu přechodu z http na https. 
    </div>
    <ul v-for="(array, index) in reordered" :key="index" class="list-group">
      <h3>{{ index }}</h3>
      <li v-for="(item, i) in array" :key="i" class="list-group-item">
        <a :href="item.link">{{ item.name }}</a>
      </li>
    </ul>
    <div class="alert alert-info mt-4">
      <a href="https://volebnakalkulacka.sk/archive/" class="alert-link">Archív slovenských Volebných kalkulačiek.</a>
    </div>

    <hr/>

    <Darujme />
  </div>
</template>

<script>
export default {
  async asyncData ({ $content }) {
    const list = await $content('list').fetch()
    return { list }
  },
  computed: {
    reordered: function() {
      let reordered = {}
      let last = 0
      this.list.body.forEach(item => {
        if (item.year != last) {
          last = item.year
          reordered[last] = []
        }
        reordered[last].push(item)
      })
      return reordered
    }
  }
}
</script>

<style scoped>
  .page {
    /* size depends on sizes of header */
    min-height: calc(100vh - 40px - 18px);
    max-width: 666px;
  }
</style>