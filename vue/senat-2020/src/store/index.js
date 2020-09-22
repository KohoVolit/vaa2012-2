import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// state
const state = {
  count: 1,
  answers: {},
  weights: {},
  results: []
}

// getters
const getters = {
  getCount (state) {
      return state.count
  },
  getAnswers: state => state.answers,
  getWeights: state => state.weights,
  getResults: state => state.results,
  getAnswersStored: state => state.answers_stored,
  getConstituency: state => state.constituency
}

// mutations
const mutations = {
  increment (state) {
      state.count++
  },
  decrement (state) {
      state.count--
  },
  addAnswer (state, payload) {
      state.answers[payload.key] = payload.value
  },
  storeWeights (state, payload) {
      state.weights = payload
  },
  storeAnswers (state, payload) {
      state.answers = payload
  },
  resetAnswers (state) {
      state.answers = {}
  },
  resetWeights (state) {
      state.weights = {}
  },
  storeResults (state, payload) {
      state.results = payload
  },
  storeAnswersStored (state, payload) {
      state.answers_stored = payload
  },
  storeConstituency (state, payload) {
      state.constituency = payload
  }
}

// actions
const actions = {

}

export default new Vuex.Store({state, mutations, actions, getters})
