<template>
  <div class="page container">
    <h2 class="p-2">
        Porovnat <small>(max. 3 strany)</small>
    </h2>

    <div class="row">
      <div class="col-12 col-md-8">
        <select v-model="added" @change="addId" class="form-select form-select-lg mb-3" aria-label="select candidates">
          <option v-for="candidate in alphabetically" :key="candidate.id" v-bind:value="{id: candidate.id}">
            {{ candidate.abbreviation }}
            ({{ candidate.name }})
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
                {{ sel.abbreviation }}
                <!-- <small>{{ sel.name }}</small> -->
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
          <div class="text-muted">
            <small>
              <span class="text-muted" type="button" data-bs-toggle="collapse" :data-bs-target="'#q-' + collapseTarget(question.id)" aria-expanded="false" aria-controls="collapseExample">
                {{ shortDescription(question.description) }}
              </span>
              <div class="collapse" :id="'q-' + collapseTarget(question.id)">
                <div class="card card-body">
                  {{ question.description }}
                </div>
              </div>

            </small>
            <br/>
          </div>
          <div class="row">
            <div class="col-4" v-for="(sel, index) in selected" :key="index">
              <div class="text-center">
                <h5>
                <svg height="50" width="50"><circle cx="25" cy="25" r="20" stroke="grey" stroke-width="1" :fill="showVote(sel.votes[question.id])" /></svg><br/>
                <small>{{ showTextVote(sel.votes[question.id]) }}</small>
                </h5>
              </div>
            </div>
          </div>

          <div v-for="(sel, index) in selected" :key="index">
            <div v-if="commentExist(sel, question.id)" class="alert alert-secondary">
              <strong> {{ sel.abbreviation }}</strong>:
              {{ sel['comments'][question.id] }}
            </div>
          </div>

        </div>
      </div>  
    </div>

    <hr/>
    <div class="">
      <a class="btn btn-info" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSEeatMK1UN_7JZiOSF7DeHxiEns-y1FDaGp28OUGe0hCcQDepfxzK2xouO20dfIIz6Sutyx0MidWM9/pubhtml" target="_blank">Tabulka všech otázek a odpovědí</a>
    </div>
    
    <Analytics />
  </div>
</template>
<script>
import Analytics from "~/components/Analytics.vue"

import candidates from "../content/answers_futurist.json";
import questions from "../content/questions_futurist.json";


export default {

  data: function() {
    return {
      selectedCandidateIds: [],
      me: true,
      added: false,
      // selected: [],
      candidates,
      questions
    }
  },
  
  head: function() {
    return {
      title: 'Volební kalkulačka 2021 - 🚀 "2050" - porovnání',
      meta: [
        {
          hid: 'comparison',
          name: 'Porovnání',
          description: 'Volební kalkulačka 2021 - 🚀 "2050" - porovnání'
        }
      ]
    }
  },

  computed: {
    selected: function() {
      let selected = []
      let s = 0
      if (this.me) {
        const item = {
          id: 0,
          abbreviation: 'Moje odpovědi',
          votes: this.$store.getters.getAnswers,
          comments: {}
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
        return a.abbreviation.toLocaleLowerCase('cs').localeCompare(b.abbreviation.toLocaleLowerCase('cs'), 'cs')
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
          return 'Neutrální' //'⚪'
        default:
          return 'Žádná odpověď'
      } 
    },

    voting: function(id) {
      return "https://www.psp.cz/sqw/hlasy.sqw?G=" + id
    },

    collapseTarget: function(key) {
      return "collapseTarget-" + key
    },

    shortDescription: function(s) {
      if (typeof(s) == 'undefined') {
        return ''
      }
      if (s.length > 0) {
        if (s.length > 42) {
          return s.slice(0, 42) + " ..."
        } else {
          return s
        }
      }
      return s
    },
    longDescription: function(s, i) {
      if (typeof(s[i]) == 'undefined') {
        return ''
      }
      return s[i]
    },

    commentExist: function(sel, qid) {
      // console.log('sel, qid', sel, qid)
      if (typeof(sel.comments[qid]) == 'undefined') {
        // console.log('exist', 'undefined')
        return false
      }
      if (sel.comments[qid] == '') {
        return false
      }
      // console.log('exist', 'true')
      return true
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