// see http://forum.quasar-framework.org/topic/193/quasar-vuex/2
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = {
    count: 1,
    answers: {},
    weights: {},
    results: [],
    resultsEu: []
}

// getters
const getters = {
    getCount (state) {
        return state.count
    },
    getAnswers: state => state.answers,
    getWeights: state => state.weights,
    getResults: state => state.results,
    getResultsEu: state => state.resultsEu,
    getAnswersStored: state => state.answers_stored
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
    storeResultsEu (state, payload) {
        state.resultsEu = payload
    },
    storeAnswersStored (state, payload) {
        state.answers_stored = payload
    }
}

// actions
const actions = {

}

const store = new Vuex.Store({state, mutations, actions, getters})
export default store
