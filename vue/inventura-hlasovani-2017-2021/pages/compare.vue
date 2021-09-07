<template>
  <div class="page">
    <div class="container">
      <h4 class="p-2">
        Vyberte poslance, s kterými se chcete porovnat:<br/>
        <small>(svůj výběr můžete později změnit)</small>
      </h4>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 list-group-item list-group-item-action m-1">
          <label class="checkbox inline">
           <input v-model="radio" type="radio" class="form-check-input" name="options" id="1" autocomplete="off" value="1" checked>
             Předsedové/-kyně stran a klubů
          </label>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="list-group-item list-group-item-action m-1">
          <label class="checkbox inline">
           <input v-model="radio" type="radio" class="form-check-input" name="options" id="1" autocomplete="off" value="2">
             Všichni poslanci a poslankyně
          </label>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 d-grid">
          <button @click="next" class="btn btn-lg btn-primary" >>> Dále >></button>
        </div>
      </div>

    </div>
    <Analytics />
  </div>
</template>

<script>
import Analytics from "~/components/Analytics.vue"

export default {
  async asyncData ({ $content }) {
    const answers = await $content('answers').only(['id']).fetch()
    return { answers }
  },

  data: function() {
    return {
      radio: 1
    }
  },

  head: function() {
    return {
      title: 'Inventura hlasování 2017-2021 - výběr poslanců',
      meta: [
        {
          hid: 'compare',
          name: 'Výběr poslanců',
          description: 'Inventura hlasování 2017-2021 - výběr poslanců'
        }
      ]
    }
  },
  methods: {
    next: function () {
      let payload = false
      // fake selection
      // if (parseInt(this.radio) == 1) {
      //   this.answers.forEach(item => {
      //     if(parseInt(item.id) < 5000) {
      //       payload.push(item.id)
      //     }
      //   })
      // } else {
      //   this.answers.forEach(item => {
      //     payload.push(item.id)
      //   })
      // }
      if (parseInt(this.radio) == 2) {
        payload = true
      }
      this.$store.commit('storeComparableSwitch', payload)
      this.$router.push({ path: '/results' })
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
  }
</style>