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

<style scoped>
  #on-screen {
    min-height: 100vh;
  }
</style>