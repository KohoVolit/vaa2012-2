<template>
  <div class="container page">
    <h2 class="pt-2">
      <span>Moje uložené vyplněné kalkulačky"</span>
      <small><small>
        <sup class="badge rounded-pill bg-secondary">Experimentální</sup>
      </small></small>
    </h2>
    <p class="alert alert-info">
      Info: Tyto výsledky kalkulaček jsou uložené pouze v prohlížeči, nikam se neposílají.
    </p>
    <StoredCalcs/>
    <Analytics />
  </div>
</template>
<script>
import Analytics from "~/components/Analytics.vue"

export default {
  head: function() {
    return {
      title: 'Mladí volí, Volební kalkulačka 2021 - moje vyplněné volební kalkulačky',
      meta: [
        {
          hid: 'me',
          name: 'Mladí volí, moje vyplněné volební kalkulačky',
          description: 'Mladí volí, Volební kalkulačka 2021 - moje vyplněné volební kalkulačky'
        }
      ]
    }
  },

  components: {
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