<template>
  <div>
    <div id="on-screen">
      <Header />
      <Nuxt />
      <br/>
    </div>
    <div id="off-screen">
      <Footer />
      <Analytics />
    </div>
  </div>
</template>

<script>
import Footer from "~/components/Footer.vue"
import Analytics from "~/components/Analytics.vue"

export default {
  components: {
    Footer,
    Analytics
  }
};
</script>

<style scoped>
  #on-screen {
    min-height: 100vh;
  }
</style>