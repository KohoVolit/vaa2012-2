<template>
  <div class="page container">
    <h2 class="p-2">
        Porovnat <small>(max. 3 osoby)</small>
    </h2>

    <div class="row">
      <div class="col-12 col-md-8">
        <select v-model="added" @change="addId" class="form-select form-select-lg mb-3" aria-label="select candidates">
          <option v-for="candidate in alphabetically" :key="candidate.id" v-bind:value="{id: candidate.id}">
            {{ candidate.family_name }} {{ candidate.given_name }}
            ({{ candidate.group}})
          </option>
        </select>
      </div>

      <div class="col-12 col-sm-4">
        <input v-model="me" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Moje odpovědi
        </label>
      </div>

    </div>

    <hr/>

    <nav class="navbar sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-4" v-for="(sel, index) in selected" :key="index">
              <div class="text-center">
                <button type="button" class="btn-close bg-warning" aria-label="Close" @click="removeId(index)"></button>
                <br/>
                {{ sel.family_name }}
                <small>{{ sel.given_name }}</small>
                <br/>
                <small>{{ sel.group }}</small>
                <br/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav> 


    <div v-for="question in questions" :key="question.id">
      <div class="card" :class="{' border-success': weights[question.id]}">
        <div class="card-body">

          <h5 class="card-title">{{ question.name }}</h5>
          <h6 class="card-subtitle mt-2">{{ question.question }}</h6>
          <p class="text-muted"><small>{{ question.description }}</small> <br/>
          <small><a :href="voting(question.id)" target="_blank">Hlasování ve sněmovně</a></small></p>
          <div class="row">
            <div class="col-4" v-for="(sel, index) in selected" :key="index">
              <div class="text-center">
                <h5>
                <!-- {{ showVote(sel.votes[question.id]) }} -->
                <svg height="50" width="50"><circle cx="25" cy="25" r="20" stroke="grey" stroke-width="1" :fill="showVote(sel.votes[question.id])" /></svg><br/>
                <small>{{ showTextVote(sel.votes[question.id]) }}</small>
                </h5>
              </div>
            </div>
          </div>
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
    const candidates = await $content('answers').fetch()
    const questions = await $content('questions').fetch()
    return { candidates, questions }
  },

  data: function() {
    return {
      selectedCandidateIds: [],
      me: true,
      added: false
    }
  },
  
  head: function() {
    return {
      title: 'Inventura hlasování 2017-2021 - porovnání',
      meta: [
        {
          hid: 'comparison',
          name: 'Porovnání',
          description: 'Inventura hlasování 2017-2021 - porovnání'
        }
      ]
    }
  },

  computed: {
    selected: function() {
      // console.log('running selected')
      let selected = []
      let s = 0
      if (this.me) {
        const item = {
          id: 0,
          family_name: 'Moje odpovědi',
          votes: this.$store.getters.getAnswers
        }
        selected.push(item)
        s = 1
      }
      if ((this.selectedCandidateIds.length + s) > 3) {
        this.selectedCandidateIds.pop()
      }
      let filteredCandidates = this.candidates.filter(candidate => (this.selectedCandidateIds.indexOf(candidate.id) != -1 ))
      selected = selected.concat(filteredCandidates)
      return selected
    },

    alphabetically: function() {
      let s = this.candidates.sort((a, b) => {
        return a.family_name.toLocaleLowerCase('cs').localeCompare(b.family_name.toLocaleLowerCase('cs'), 'cs')
      })
      return s
    },

    weights: function() {
      return this.$store.getters.getWeights
    },

  },
  mounted: function() {
    if (typeof(this.$route.params.candidateId) != 'undefined') {
      this.selectedCandidateIds.push(this.$route.params.candidateId)
    }
    this.scrollToTop()
  },

  methods: {
    addId: function() {
      // console.log('adding', this.added.id)
      if (this.selectedCandidateIds.indexOf(this.added.id) == -1) {
        if ((this.selectedCandidateIds.length >= 2 & this.me) | (this.selectedCandidateIds.length >= 3 & !this.me)) {
          this.selectedCandidateIds.pop()
        }
        this.selectedCandidateIds.push(this.added.id)
      }
    },

    removeId: function(i) {
      // console.log('removing', i)
      if (this.me & (i == 0)) {
        this.me = !this.me
      } else {
        const id = this.selected[i].id
        const index = this.selectedCandidateIds.indexOf(id)
        this.selectedCandidateIds.splice(index, 1)
      }
    },

    showVote: function(value) {
      switch (value) {
        case 1:
          return  'green' //'🟢'
        case -1: 
          return 'red' //'🔴'
        case 0:
          return 'grey' //'⚪'
        default:
          return 'white'
      } 
    },

    showTextVote: function(value) {
      switch (value) {
        case 1:
          return  'Pro' //'🟢'
        case -1: 
          return 'Proti' //'🔴'
        case 0:
          return 'Zdržel/a se' //'⚪'
        default:
          return 'Nehlasoval/a'
      } 
    },

    voting: function(id) {
      return "https://www.psp.cz/sqw/hlasy.sqw?G=" + id
    },

    scrollToTop() {
      window.scrollTo(0,0)
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
    max-width: 666px;
  }
</style>