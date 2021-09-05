<template>
  <div class="container page">
    <h2 class="pt-4">
      Inventura hlasování 2017-2021
    </h2>
    <div class="card border-info mb-3 p-4">
      Inventura hlasování poslanecké sněmovny 2017-2021 ukazuje vaši shodu s poslankyněmi a poslanci na základě skutečných hlasování ze sněmovny.
    </div>
    <hr/>
    <NuxtLink to="/question/1/" class="btn btn-success btn-lg">✋ SPUSTIT INVENTURU HLASOVÁNÍ 2017-2021</NuxtLink>
    <hr/>
    <h3>Uložené vyplněné kalkulačky</h3>
    <StoredCalcs />
    <hr/>
    <Darujme />
  </div>
</template>

<script>
import Darujme from "~/components/Darujme.vue"

export default {
  components: {
    Darujme
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