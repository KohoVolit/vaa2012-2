import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// state
const state = {
  count: 1,
  answers: {},
  weights: {},
  // results: [],
  // comparables: [],
  comparableSwitch: false, //all: true, only selected: false
  localStored: false,
  localChanged: false
}

// getters
const getters = {
  getCount (state) { return state.count },
  getAnswers: state => state.answers,
  getWeights: state => state.weights,
  // getResults: state => state.results,
  getAnswer: (state) => (id) => state.answers[id],
  // getComparables: state => state.comparables,
  getComparableSwitch: state => state.comparableSwitch,
  getLocalStored: state => state.localStored,
  getLocalChanged: state => state.localChanged
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
  // storeResults (state, payload) {
  //   state.results = payload
  // },
  // storeComparables (state, payload) {
  //   state.comparables = payload
  // },
  storeComparableSwitch (state, payload) {
    state.comparableSwitch = payload
  },
  storeLocalStored (state, payload) {
    state.localStored = payload
  },
  storeLocalChanged (state, payload) {
    state.localChanged = payload
  },
  // OUTSIDE STORE
}

// actions for API
const actions = {
  
  beep () {
    console.log("beep")
  },

}

export default () => new Vuex.Store({state, mutations, actions, getters})
