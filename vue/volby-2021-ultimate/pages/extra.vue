<template>
  <div class="page">
    <div class="container">
      <h4 class="p-2">
        Vyberte otázky, které jsou pro vás extra důležité:
      </h4>

      <div v-if="!zeroAnswers">
        <div class="d-grid p-2">
          <NuxtLink to="/compare/" class="btn btn-secondary" @click.native="next" >>> Přeskočit >></NuxtLink>
        </div>
        <div class="list-group" v-for="question in questions" v-bind:key="question.id">
          <div v-if="answered[question.id]" class="list-group-item list-group-item-action m-1">
          <!-- <div class="list-group-item list-group-item-action m-1"> -->
            <label class="checkbox inline">
              <input type="checkbox" class="custom-control-input" v-model="weights[question.id]">
                {{ question.name }} <small>({{ answer(question.id) }})</small>
            </label>
          </div>
        </div>
      </div>

      <div v-if="zeroAnswers">
        <div class="alert alert-warning" role="alert">
          Nejsou odpovězené žádné otázky:<br/>
          <NuxtLink to="/question/1/">Spustit Volební kalkulačku od začátku</NuxtLink>
        </div>
      </div>

      <div class="d-grid p-2">
        <NuxtLink to="/compare/" class="btn btn-primary" @click.native="next" >>> Dále >></NuxtLink>
      </div>
    </div>

    <Analytics />
  </div>
</template>

<script>
import Analytics from "~/components/Analytics.vue"

export default {
  async asyncData ({ $content }) {
    const questions = await $content('questions_ultimate').fetch()
    return { questions }
  },

  head: function() {
    return {
      title: 'Volební kalkulačka 2021 - důležité otázky',
      meta: [
        {
          hid: 'extra',
          name: 'Důležité otázky',
          description: 'Volební kalkulačka 2021 - důležité otázky'
        }
      ]
    }
  },

  computed: {
    answered: function() {
      let $this = this
      let out = {}
      this.questions.forEach(question => {
        let a = $this.$store.getters.getAnswer(question.id)
        if (Math.abs(a) == 1) {
          out[question.id] = true
        } else {
          out[question.id] = false
        }
      })
      return out
    },
    weights: function() {
      return this.$store.getters.getWeights
    },
    zeroAnswers: function () {
      if (Object.keys(this.$store.getters.getAnswers) == 0) {
        return true
      } else {
        return false
      }
    }
  },

  methods: {
    answer: function(id) {
      let a = this.$store.getters.getAnswer(id)
      if (a == 1) {
        return 'Ano'
      }
      if (a == -1) {
        return 'Ne'
      }
      return ''
    },
    next: function() {
      this.$store.commit('storeWeights', this.weights)
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
