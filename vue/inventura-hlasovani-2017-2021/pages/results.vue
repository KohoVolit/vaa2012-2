<template>
  <div class="page container">
    <div class="hstack">
      <div class="form-check form-switch ms-auto pe-2 pt-2">
        <label class="form-check-label" for="flexSwitchCheckChecked"> {{ switchText }}</label>
        <input v-model="swi" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" @change="saveSwitch">
        
      </div>
    </div>
    <ResultsTable :results="results" />
    <hr/>
    <div class="container p-2 ">
      <button type="button" class="btn" :class="{'disabled btn-secondary': !isChanged, 'btn-primary': isChanged}" @click="store()">{{ saveResultText }}</button>
      <NuxtLink to="/me">Moje kalkulačky</NuxtLink>
    </div>
    <hr/>
    <Darujme />
  </div>
</template>

<script>
import Darujme from "~/components/Darujme.vue"

export default {
  async asyncData ({ $content }) {
    const candidates = await $content('answers').fetch()
    return { candidates }
  },

  data: function() {

    return {
      swi: this.$store.getters.getComparableSwitch
    }
  },

  computed: {
    answers: function() {
      return this.$store.getters.getAnswers
    },
    weights: function() {
      return this.$store.getters.getWeights
    },
    comparables: function() {
      let comparables = []
      this.candidates.forEach(item => {
        if (this.swi) {
          comparables.push(item.id)
        } else {
          if (item.vip) {
            comparables.push(item.id)
          }
        }
      })
      return comparables
    },
    results: function() {
      // console.log('recalculating')
      return this.sortMatch(this.answers, this.weights, this.candidates)
    },
    switchText: function() {
      if (this.swi) {
        return 'Všichni poslanci a poslankyně'
      } else {
        return 'Předsedové stran a klubů'
      }
    },
    isChanged: function() {
      return this.$store.getters.getLocalChanged
    },
    saveResultText: function() {
      if (this.isChanged) {
        return "Uložit si svůj výsledek"
      } else {
        return "Výsledek uložen"
      }
    }

  },

  methods: {
    sortMatch: function(answers, weights, candidates) {
      let results = this.calcMatch(answers, weights, candidates)
      results.sort(function (a, b) {
        return b.random - a.random
      })
      results.sort(function (a, b) {
        return b.result - a.result
      })
      return results
    },
    calcMatch: function (answers, weights, candidates, extra = 2) {
      let results = []
      let event = new Date()
      // console.log('start', event.toISOString())
      for (let key in candidates) {
        let candidate = candidates[key]
        if (this.comparables.indexOf(candidate.id) != -1) {
          let r = this.calcOneMatch(answers, weights, candidate['votes'], extra)
          r['random'] = Math.random()
          r['id'] = candidate['id']
          r['info'] = candidate
          results.push(r)
        }
      }
      event = new Date()
      // console.log('end', event.toISOString())
      return results
    },
    calcOneMatch: function (answers, weights, singleVotes, extra) {
      let sum = 0
      let count = 0
      let w = 0
      for (let key in answers) {
        if (Math.abs(answers[key]) > 0) {
          w = 1
          if (weights[key]) {
            w = extra
          }
          if (singleVotes[key] !== undefined) {
            sum = sum + Math.sign(answers[key]) * singleVotes[key] * w
            count = count + w
          }
          else {
            count = count + w
          }
        }
      }
      if (count === 0) {
          count = 1
      }

      let result = {
          result: (1 + sum / count) / 2,
          result_percent: Math.round((100 + 100 * sum / count) / 2),
          rating: Math.round((1 + sum / count) / 2 * 10) / 2,
          rating5: Math.round((1 + sum / count) / 2 * 5),
          random: Math.random()
      }
      return result
    },
    // whether the results are stored in localStorage
    isStored: function() {
      let isStored = false
      let storedCalcs = []
      if (process.browser) {
        if (typeof(window.localStorage.calcs) != 'undefined') {
          storedCalcs = JSON.parse(window.localStorage.calcs)
        }
      }
      storedCalcs.forEach(calc => {
        // quick comparison ** fix later: not using stringify
        if ((typeof(calc['answers']) != 'undefined') & (typeof(calc['weights']) != 'undefined')) {
          if ((JSON.stringify(calc['answers']) == JSON.stringify(this.$store.getters.getAnswers) ) & (JSON.stringify(calc['weights']) == JSON.stringify(this.$store.getters.getWeights) ))  {
            isStored = true
          }
        }
      })
      return isStored
    },
    // store results in localStorage
    store: function() {
      let storedCalcs = []
      if (process.browser) {
        if (typeof(window.localStorage.calcs) != 'undefined') {
          storedCalcs = JSON.parse(window.localStorage.calcs)
        }
      }
      if (typeof(storedCalcs) == 'undefined') {
        storedCalcs = []
      }
      // console.log('storedCalcs', storedCalcs)
      const timeElapsed = Date.now()
      const today = new Date(timeElapsed)
      const thisCalc = {
        answers: this.answers,
        weights: this.weights,
        name: 'Inventura hlasování 2017-2021',
        date: today.toISOString(),
        calc: 'cz_psp_inventory_2017-2021',
        path: '/cs/inventura-hlasovani-2017-2021/',
        version: '0.1.1'
      }
      storedCalcs.push(thisCalc)
      if (process.browser) {
        window.localStorage.calcs = JSON.stringify(storedCalcs)
        this.$store.commit('storeLocalStored', true)
        this.$store.commit('storeLocalChanged', false)
      }
    },

    saveSwitch: function() {
      this.$store.commit('storeComparableSwitch', this.swi)
    },

    scrollToTop() {
      // console.log('scrolling')
      window.scrollTo(0,0)
    }

  },

  mounted: function() {
    // store results
    if (!this.isStored()) {
      if (!this.$store.getters.getLocalStored) {
        this.store()
        this.$store.commit('storeLocalStored', true)
        this.$store.commit('storeLocalChanged', false)
      } else {
        this.$store.commit('storeLocalChanged', true)
      }
    }
    this.scrollToTop()
  },

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