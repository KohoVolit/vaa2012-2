<template>
  <div class="container page">
    <h1 class="pt-4 name">
      Volební kalkulačka<sup><a href="https://isdv.upv.cz/webapp/resdb.print_detail.det?pspis=OZ/542865&amp;plang=CS" target="_blank">®</a></sup> 2021
    </h1>
    
    <hr/>

    <p class="teaser">
       Volební kalkulačka pro <strong>volby do poslanecké sněmovny 2021</strong> ukazuje vaši shodu s kandidujícími stranami v parlamentních volbách.
      <div class="d-grid p-2">
        <NuxtLink to="https://www.volebnikalkulacka.cz/cs/volby-2021/question/1/" class="btn btn-success btn-lg disabled" disabled>📄 VOLEBNÍ KALKULAČKA 2021 <br/> (Už brzy - ještě dnes!)</NuxtLink>
      </div>

    <hr/>

    <p class="teaser">
       Inventura <strong>hlasování poslanecké sněmovny 2017-2021</strong> ukazuje vaši shodu s&nbsp;poslankyněmi a poslanci na základě 40 skutečných hlasování ze sněmovny.
      <div class="d-grid p-2">
        <a href="https://www.volebnikalkulacka.cz/cs/inventura-hlasovani-2017-2021/question/1/" class="btn btn-success btn-lg">SPUSTIT INVENTURU HLASOVÁNÍ 2017-2021 <br/> ✋ </a>
      </div>

    <hr/>


    <p class="teaser">
        Mladá volební kalkulačka se speciálně vybranými otázkami pro <strong>voličky a voliče pod 30</strong>.
      <div class="d-grid p-2">
        <NuxtLink to="#" class="btn btn-success btn-lg disabled" disabled>🙋 MLADÍ VOLÍ, VOLEBNÍ KALKULAČKA PRO MLADÉ <br/> (Od ?.9.2021)</NuxtLink>
      </div>

    <hr/>

    <p class="teaser">
        Volební kalkulačka "2050" je kalkulačka se speciálním zaměřením na otázky <strong>přesahující jedno volební období</strong>.
      <div class="d-grid p-2">
        <NuxtLink to="#" class="btn btn-success btn-lg disabled" disabled>🚀 VOLEBNÍ KALKULAČKA "2050" <br/> (Od 9.9.2021 21:21)</NuxtLink>
      </div>

    <hr/>

    <p class="teaser">
        Zdravotnická volební kalkulačka je tématická kalkulačka týkající se <strong>zdravotnictví</strong>.
      <div class="d-grid p-2">
        <NuxtLink to="#" class="btn btn-success btn-lg disabled" disabled>😷 ZDRAVOTNICKÁ VOLEBNÍ KALKULAČKA <br/> (Od ?.9.2021)</NuxtLink>
      </div>

    <hr/>

    <p class="teaser">
        Ultimátní volební kalkulačka je <strong>nejdelší volební kalkulačka na světě</strong>. Obsahuje všechny otázky, které jsme předložili kandidujícím stranám.
      <div class="d-grid p-2">
        <NuxtLink to="#" class="btn btn-success btn-lg disabled" disabled>♥ ULTIMÁTNÍ VOLEBNÍ KALKULAČKA <br/> (Od 9.9.2021 21:21)</NuxtLink>
      </div>

    <hr/>

    <Darujme />
  </div>
</template>

<script>
// import Darujme from "~/components/Darujme.vue"

export default {
  // components: {
  //   Darujme
  // }
}
</script>

<style scoped>
  .page {
    /* size depends on sizes of header */
    min-height: calc(100vh - 40px - 18px);
    max-width: 666px;
  }
  .name {
    font-size: 3.5rem;
    font-weight: 700;
  }
  a { 
    text-decoration: none; 
  }
  @media (min-width: 576px) {
    p.teaser {
      font-size: 1.25rem;
    }
  }
</style>