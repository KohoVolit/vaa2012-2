<template>
  <div class="container page">
    <h2 class="pt-4">
      Volební kalkulačka 2021
    </h2>
    <div class="card border-info mb-3 p-4">
      Volební kalkulačka pro volby do poslanecké sněmovny 2021 ukazuje vaši shodu s kandidujícími stranami v parlamentních volbách.    </div>
    <hr/>
    <div class="d-grid gap-2">
      <NuxtLink to="/question/1/" class="btn btn-success btn-lg">SPUSTIT VOLEBNÍ KALKULAČKU 2021</NuxtLink>
    </div>
    <hr/>
    <h3>Uložené vyplněné kalkulačky</h3>
    <StoredCalcs />
    <hr/>
    <!-- <Givt /> -->
    <Darujme />
    <Analytics />
  </div>
</template>

<script>
// import Givt from "~/components/Givt.vue"
import Darujme from "~/components/Darujme.vue"
import Analytics from "~/components/Analytics.vue"

export default {
  head: function() {
    return {
      title: 'Volební kalkulačka 2021',
      meta: [
        {
          hid: 'index',
          name: 'Volební kalkulačka 2021',
          description: 'Volební kalkulačka 2021'
        }
      ]
    }
  },

  mounted: function () {
    // this.$store.dispatch('beep')
  },

  components: {
    // Givt,
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