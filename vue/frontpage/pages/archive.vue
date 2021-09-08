<template>
  <div class="page container">
    <h2 class="pt-2">Archiv Volebních kalkulaček</h2>
    <div class="alert alert-secondary">
       Upozornění: Starší Volební kalkulačky nemusejí fungovat z důvodu přechodu z <em>http</em> na <em>https</em>. <br/>
       Provoz starších kalkulaček je také omezet s ohledem na lepší funkčnost aktuálních kalkulaček.<br/>
       Pro starší kalkulačky můžete použít <a href="https://web.archive.org/web/20120928033314/http://volebnikalkulacka.cz/">Archive.org</a>
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
  head: function() {
    return {
      title: 'Archiv Volebních kalkulaček',
      meta: [
        {
          hid: 'archive',
          name: 'Archiv Volebních kalkulaček',
          description: 'Archiv Volebních kalkulaček od roku 2006.'
        }
      ]
    }
  },
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