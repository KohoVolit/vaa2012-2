<template>
  <div class="container page">
    <h2 class="pt-2">Děkujeme za podporu!</h2>
    <h4>Bez vás by to nešlo.</h4>
    <h5>Všichni přispěvatelé a přispěvatelky mají čestné místo na nástěnce</h5>
    

    <div v-if="loading" class="alert alert-info">
      Načítám na nástěnku všechny, co přispěli na Volební kalkulačku. Je jich hodně!
    </div>
    <span v-for="(supporter, index) in supporters" :key="index"> 
      <span v-if="(supporter.date > '2020-10-10') & (supporter.amount > 0)" class="badge m-4 greater" :class="color(supporter.amount)">
        {{ supporter.given_name }} {{ supporter.family_name }}
      </span>
    </span>

    <hr/>

    <Darujme />
    <Analytics />
  </div>
</template>

<script>
import Darujme from "~/components/Darujme.vue"
import Analytics from "~/components/Analytics.vue"

export default {
  data: function() {
    return {
      supporters: [],
      loading: true,
    }
  },

  mounted: function() {
    let $this = this
    fetch ("https://projects.kohovolit.eu/api/?projectId=1200653")
    .then(function (response) {
      return response.json()
    })
    .then(function (response) {
      $this.$data.supporters = response.reverse().filter( function (item) {
        $this.loading = false
        return item.last
      })
    })
  },

  methods: {
    color: function(v) {
      if (v > 95000) {
        return "bg-success"
      } else {
        if (v > 9500) {
          return "bg-info"
        } else {
          return "bg-secondary"
        }
      }
    }
  },

  components: {
    Darujme, 
    Analytics
  }

}
</script>

<style scoped>
  .greater {
    font-size: 1.5em;
  }
</style>