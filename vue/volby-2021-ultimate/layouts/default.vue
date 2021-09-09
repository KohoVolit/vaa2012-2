<template>
  <div>
    <div id="on-screen">
      <Header />
      <Nuxt />
      <br/>
    </div>
    <div id="off-screen">
      <Footer />
      <!-- <Analytics /> -->
    </div>
  </div>
</template>

<script>
import Header from "~/components/Header.vue"
import Footer from "~/components/Footer.vue"
// import Analytics from "~/components/Analytics.vue"

export default {
  components: {
    Header,
    Footer,
    // Analytics
  }
};
</script>

<style>
  #on-screen {
    min-height: 100vh;
  }
  /* CSS styly pro mobilní zobrazení */

@media screen and (max-width: 490px) {

.navbar-brand {
    width: 70%;
    font-size: 1rem;
    line-height: 1rem;
}

.container {
    padding: 0;
}

.h2, h2 {
    font-size: 1.1rem;
}

.card-text {
    font-size: 0.8rem;
}

.col-4 {
    width: 30%;
    }
}
</style>