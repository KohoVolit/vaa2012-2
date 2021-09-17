<template>
  <div class="page container">

    <div v-if="noAnswer" class="alert alert-warning mt-2">
      Není zodpovězená ani jedna otázka, všichni tedy mají 50% shodu a jsou seřazeni náhodně.
      <br/>
      Můžete: 
      <ul>
        <li><NuxtLink to="/question/1/"><strong>Spustit Volební kalkulačku od začátku</strong></NuxtLink></li>
        <li v-if="storedExist"><NuxtLink to="/me/"><strong>Načíst svoje uložené vyplněné kalkulačky</strong></NuxtLink></li>
      </ul>
    </div>

    <div class="hstack">
      <div class="form-check form-switch ms-auto pe-2 pt-2">
        <label class="form-check-label" for="flexSwitchCheckChecked"> {{ switchText }}</label>
        <input v-model="swi" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" @change="saveSwitch">
        
      </div>
    </div>
    <ResultsTable :results="results" />
    <hr/>
    <div class="container p-2 ">
      <em>Tip: kliknutím na stranu přejdete na podrobné srovnání a komentáře stran k otázkám</em>
    </div>
    <hr/>
      <a class="btn btn-info" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSEeatMK1UN_7JZiOSF7DeHxiEns-y1FDaGp28OUGe0hCcQDepfxzK2xouO20dfIIz6Sutyx0MidWM9/pubhtml" target="_blank">Tabulka všech otázek a odpovědí</a>
    <hr/>
    <div class="container p-2 ">
      <button type="button" class="btn" :class="{'disabled btn-secondary': !isChanged, 'btn-primary': isChanged}" @click="store()">{{ saveResultText }}</button>
      <NuxtLink to="/me/">Moje kalkulačky</NuxtLink>
    </div>
    <hr/>

    <Darujme />
    <Analytics />
  </div>
</template>

<script>
import Darujme from "~/components/Darujme.vue"
import Analytics from "~/components/Analytics.vue"
import axios from 'axios'

export default {
  async asyncData ({ $content }) {
    const candidates = await $content('answers_futurist').fetch()
    return { candidates }
  },

  head: function() {
    return {
      title: 'Volební kalkulačka 2021 - 🚀 "2050" - výsledky',
      meta: [
        {
          hid: 'results',
          name: 'Výsledky volební kalkulačky',
          description: 'Volební kalkulačka 2021 - 🚀 "2050" - výsledky'
        }
      ]
    }
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
        return 'Všechny kandidující strany'
      } else {
        return 'Devět největších stran dle Mandáty.cz'
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
    },

    noAnswer: function() {
      let noAnswer = true
      for (let k in this.answers) {
        if (Math.abs(this.answers[k]) == 1) {
          noAnswer = false
        }
      }
      return noAnswer
    },

    storedExist: function() {
      let storedExist = false
      let storedCalcs = []
      if (process.browser) {
        if (typeof(window.localStorage.calcs) != 'undefined') {
          storedCalcs = JSON.parse(window.localStorage.calcs)
        }
      }
      // console.log(storedCalcs.length)
      if (storedCalcs.length > 0) {
        storedExist = true
      }
      // console.log(storedExist)
      return storedExist
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
        name: 'Volební kalkulačka 2021 - 🚀 "2050"',
        date: today.toISOString(),
        calc: 'cz_psp_2021_2050',
        path: '/cs/volby-2021-2050/',
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

    saveToApi: function() {
      let c = this.$cookies.get('vkid', {parseJSON: false})
      if (typeof(c) == 'undefined') {
        c = 'vk.' + Date.now() + '.' + Math.round(Math.random() * 1000000000000000)
        this.$cookies.set('vkid', c, {path: '/', maxAge: 60 * 60 * 24 * 5000})
      }
      let params = {
        vkid: c,
        calc: 'volby_2021_2050',
        answer: JSON.stringify({ answers: this.answers, weights: this.weights })
      }
      axios.get("https://a.volebnikalkulacka.cz/volby-2021/results.php", { params: params })
    },

    scrollToTop() {
      // console.log('scrolling')
      window.scrollTo(0,0)
    }

  },

  mounted: function() {
    // console.log(this.candidates)
    // store results
    if (!this.isStored()) {
      if ((!this.$store.getters.getLocalStored) & (!this.noAnswer)) {
        this.store()
        this.saveToApi()
        this.$store.commit('storeLocalStored', true)
        this.$store.commit('storeLocalChanged', false)
      } else {
        this.$store.commit('storeLocalChanged', true)
      }
    }
    this.scrollToTop()
  },

  components: {
    Darujme,
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