<template>
  <div class="container page">
    <h2 class="pt-4">
      Volební kalkulačka 2021 - 🚀 "2050"
    </h2>
    <div class="card border-info mb-3 p-4">
      Volební kalkulačka "2050" je kalkulačka se speciálním zaměřením na otázky přesahující jedno volební období.    </div>
    <hr/>
    <div class="d-grid gap-2">
      <NuxtLink to="/question/1/" class="btn btn-success btn-lg">🚀 SPUSTIT VOLEBNÍ KALKULAČKU 2021 - "2050"</NuxtLink>
    </div>
    <hr/>
    <h3>Uložené vyplněné kalkulačky</h3>
    <StoredCalcs />
    <hr/>
    <Darujme />
    <Analytics />
  </div>
</template>

<script>
import Darujme from "~/components/Darujme.vue"
import Analytics from "~/components/Analytics.vue"

export default {
  head: function() {
    return {
      title: 'Volební kalkulačka 2021 - 🚀 "2050"',
      meta: [
        {
          hid: 'index',
          name: 'Volební kalkulačka 2021 - 🚀 "2050"',
          description: 'Volební kalkulačka 2021 - 🚀 "2050"'
        }
      ]
    }
  },

  mounted: function () {
    // this.$store.dispatch('beep')
  },

  components: {
    Darujme, 
    Analytics
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