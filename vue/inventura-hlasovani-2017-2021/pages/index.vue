<template>
  <div class="container page">
    <h2 class="pt-4">
      Inventura hlasování 2017-2021
    </h2>
    <div class="card border-info mb-3 p-4">
      Inventura hlasování poslanecké sněmovny 2017-2021 ukazuje vaši shodu s poslankyněmi a poslanci na základě skutečných hlasování ze sněmovny.
    </div>
    <hr/>
    <div class="d-grid gap-2">
      <NuxtLink to="/question/1/" class="btn btn-success btn-lg">✋ SPUSTIT INVENTURU HLASOVÁNÍ 2017-2021</NuxtLink>
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
      title: 'Inventura hlasování 2017-2021',
      meta: [
        {
          hid: 'index',
          name: 'Inventura hlasování',
          description: 'Inventura hlasování 2017-2021'
        }
      ]
    }
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