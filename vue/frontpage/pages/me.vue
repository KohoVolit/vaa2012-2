<template>
  <div class="container page">
    <h2 class="pt-4">
      <span>Moje uložené vyplněné kalkulačky</span>
      <small><small>
        <sup class="badge rounded-pill bg-secondary">Experimentální</sup>
      </small></small>
    </h2>
    <p class="alert alert-info">
      Tyto výsledky kalkulaček jsou uložené pouze v prohlížeči, nikam se neposílají.
    </p>
    <StoredCalcs />
  </div>
</template>
<script>



export default {
}
</script>
<style scoped>
  .page {
    /* size depends on sizes of header */
    min-height: calc(100vh - 40px - 18px);
    max-width: 666px;
  }
</style>