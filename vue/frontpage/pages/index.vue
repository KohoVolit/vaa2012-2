<template>
  <div class="container page">
    <h1 class="pt-4 name">
      Volební kalkulačka<sup><a href="https://isdv.upv.cz/webapp/resdb.print_detail.det?pspis=OZ/542865&amp;plang=CS" target="_blank">®</a></sup> 2022
    </h1>
    
    <hr/>

    <p class="teaser">
       Volební kalkulačka pro <strong>komunální a senátní volby 2022</strong> se právě připravuje ve spolupráci s <a href="https://cesko.digital/projects/volebni-kalkulacka" target="_blank">Česko.Digital</a> a bude spuštěna v <strong>v první polovině září</strong>.
      <div class="d-grid p-2">
        <!-- <a href="https://michalskop-gitlab-io.azureedge.net/svolby-2021.volebnikalkulacka.cz/question/1/" class="btn btn-success btn-lg"> SPUSTIT VOLEBNÍ KALKULAČKU 2021 <br/> 📄 </a> -->
        <a href="https://www.volebnikalkulacka.cz/cs/volby-2021/question/1/" class="btn btn-secondary btn-lg disabled"> SPUSTIT VOLEBNÍ KALKULAČKU 2022 - 1. POLOVINA ZÁŘÍ<br/> </a>
      </div>

    <hr/>
    <p class="teaser">
      <h2 class="pt-4">Starší volební kalkulačky z roku 2021</h2>

    <p class="teaser">
       Volební kalkulačka pro <strong>volby do Poslanecké sněmovny 2021</strong> ukazuje vaši shodu s kandidujícími stranami v parlamentních volbách.
      <div class="d-grid p-2">
        <!-- <a href="https://michalskop-gitlab-io.azureedge.net/svolby-2021.volebnikalkulacka.cz/question/1/" class="btn btn-success btn-lg"> SPUSTIT VOLEBNÍ KALKULAČKU 2021 <br/> 📄 </a> -->
        <a href="https://www.volebnikalkulacka.cz/cs/volby-2021/question/1/" class="btn btn-success btn-lg"> SPUSTIT VOLEBNÍ KALKULAČKU 2021 <br/> 📄 </a>
      </div>
    <hr/>

    <p class="teaser">
       Inventura <strong>hlasování poslanecké sněmovny 2017-2021</strong> ukazuje vaši shodu s&nbsp;poslankyněmi a poslanci na základě 40 skutečných hlasování ze sněmovny.
      <div class="d-grid p-2">
        <a href="https://www.volebnikalkulacka.cz/cs/inventura-hlasovani-2017-2021/question/1/" class="btn btn-success btn-lg">SPUSTIT INVENTURU HLASOVÁNÍ 2017-2021 <br/> ✋ </a>
      </div>

    <hr/>

    <p class="teaser">
        Volební kalkulačka "2050" je kalkulačka se speciálním zaměřením na otázky <strong>přesahující jedno volební období</strong>.
      <div class="d-grid p-2">
        <a href="https://www.volebnikalkulacka.cz/cs/volby-2021-2050/question/1/" class="btn btn-success btn-lg" >VOLEBNÍ KALKULAČKA "2050" <br/> 🚀 </a>
      </div>

    <hr/>

    <p class="teaser">
        Mladá volební kalkulačka se speciálně vybranými otázkami pro <strong>voličky a voliče pod 30</strong> ve spolupráci s <a href="https://youthspeakup.cz/" target="_blank">Youth, speak up</a>.
      <div class="d-grid p-2">
        <a href="https://www.volebnikalkulacka.cz/cs/volby-2021-young/question/1/" class="btn btn-success btn-lg" >MLADÍ VOLÍ, VOLEBNÍ KALKULAČKA PRO MLADÉ <br/> 🙋 </a>
      </div>

    <hr/>

    <p class="teaser">
        Ultimátní volební kalkulačka je <strong>nejdelší volební kalkulačka na světě</strong>. Obsahuje všechny otázky, které jsme předložili kandidujícím stranám.
      <div class="d-grid p-2">
        <a href="https://www.volebnikalkulacka.cz/cs/volby-2021-ultimate/question/1/" class="btn btn-success btn-lg">ULTIMÁTNÍ VOLEBNÍ KALKULAČKA <br/> ♥ </a>
      </div>

    <hr/>

    <p class="teaser">
        Zdravotní volební kalkulačka je tématická kalkulačka týkající se <strong>zdravotnictví</strong>.
      <div class="d-grid p-2">
        <a href="https://www.diagnozazdravotnictvi.cz/kalkulacka" class="btn btn-success btn-lg" target="_blank">ZDRAVOTNÍ VOLEBNÍ KALKULAČKA <br/> 😷 </a>
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