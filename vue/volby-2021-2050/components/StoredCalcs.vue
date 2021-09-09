<template>
  <div>
    <div v-if="noCalc" class="alert alert-warning">
      Není uložena žádná vyplnění volební kalkulačka.
      <br/>
      <NuxtLink to="/question/1/"><strong>Spustit Volební kalkulačku</strong></NuxtLink>
    </div>
    <div v-for="(calc, index) in calcs" :key="index" class="list-group">
      <div class="list-group-item list-group-item-action flex-column align-items-start active mt-4">
        <small>
          <button type="button" class="btn-close bg-danger" aria-label="Close" @click="removeCalc(index)"></button>
          <span class="text-muted">Smazat</span>
        </small>
        <div class="text-white calc-inner" @click="loadCalc(index)">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ calc.name }}</h5>          
          </div>
          <p class="mb-1">
            {{ localDate(calc.date)[0] }} 
            <small>{{ localDate(calc.date)[1] }}</small>  
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    let thisCalc = 'cz_psp_2021_2050'
    let calcs = []
    if (process.browser) {
      if (typeof(window.localStorage.calcs) != 'undefined') {
        calcs = JSON.parse(window.localStorage.calcs).filter((element) => { 
          console.log('element.calc', element.calc)
          return (element.calc == thisCalc)
         } )
      }
    }
    return {
      calcs
    }
  },

  computed: {
    noCalc: function() {
      let noCalc = false
      if (this.calcs.length == 0) {
        noCalc = true
      }
      return noCalc
    }
  },

  methods: {
    removeCalc: function(i) {
      this.calcs.splice(i, 1)
      this.saveLocalStorage(this.calcs)
    },
    loadCalc: function(i) {
      this.$store.commit('storeAnswers', this.calcs[i].answers)
      this.$store.commit('storeWeights', this.calcs[i].weights)
      this.$router.push({ path: '/results' })
    },
    saveLocalStorage: function() {
      if (process.browser) {
        window.localStorage.calcs = JSON.stringify(this.calcs)
      }
    },
    localDate: function(s) {
      const d = Date.parse(s)
      const date = new Date(s)
      return [date.toLocaleDateString('cs-CZ'), date.toLocaleTimeString('cs-CZ')]
    },
    scrollToTop() {
      window.scrollTo(0,0)
    }
  },
  mounted: function() {
    this.scrollToTop()
  }

}
</script>

<style scoped>
  .page {
    /* size depends on sizes of header */
    min-height: calc(100vh - 40px - 18px);
    max-width: 666px;
  }
  .calc-inner {
    cursor: pointer;
  }
</style>