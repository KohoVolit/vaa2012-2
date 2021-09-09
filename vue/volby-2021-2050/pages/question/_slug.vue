<template>
  <div class="">

    <div class="progress">
      <div class="progress-bar bg-warning" role="progressbar" :style="progressStyle" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="container page card border-light pt-3">
      <div class="card-header">{{ question.slug }} / {{ nquestions }}  {{ question.name }}</div>
      <div class="card-body">
        <h2 class="card-title">{{ question.question }}</h2>
        <p class="card-text">{{ question.description }}</p>
      </div>
    </div>


    <div class="">
      <div class="row container position-absolute bottom-0 start-50 translate-middle-x">
        <div class="col-4 d-grid">
          <button @click="next(1)" class="btn btn-lg" :class="{'btn-primary': isActive[1], 'btn-outline-primary': !isActive[1]}" >ANO</button>
        </div>
        <div class="col-4 d-grid">
          <button @click="next(-1)" class="btn btn-lg" :class="{'btn-primary': isActive[-1], 'btn-outline-primary': !isActive[-1]}">NE</button>
        </div>
        <div class="col-4 d-grid gap-1">
          <button @click="next(0)" class="btn btn-lg text-muted" :class="{'btn-dark': isActive[0], 'btn-outline-secondary': !isActive[0]}" ><small>Neutrální</small></button>
        </div>
        <div class="row pt-2">
          <div class="col-6 d-grid d-flex justify-content-start">
            <button v-if="notFirst" @click="back(null)" class="btn btn-link text-muted">&lt; Zpět</button>
          </div>
          <div class="col-6 d-grid d-flex justify-content-end">
            <button @click="next(null)" class="btn btn-link text-muted" :class="{'btn-dark': isActive[null], '': !isActive[null]}">Přeskočit ></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>

export default {
  // load jsou using content
  async asyncData ({ $content, params }) {
    const question = await $content('questions_futurist', params.slug).fetch()
    const questions = await $content('questions_futurist').fetch()
    return { question, questions }
  },
  data: function() {
    return {
      isActive: {
        1: false,
        '-1': false,
        0: false
      }
    }
  },

  head: function() {
    return {
      title: 'Volební kalkulačka 2021 - 🚀 "2050" - ' + this.question.name,
      meta: [
        {
          hid: 'question ' + this.question.slug,
          name: this.question.name,
          description: this.question.question
        }
      ]
    }
  },

  mounted: function() {
    // active buttons
    let currentAnswer = this.$store.getters.getAnswer(this.question.id)
    if (typeof(currentAnswer) != 'undefined') {
      this.isActive[currentAnswer] = true
    }
  },

  computed: {
    nquestions: function() {
      return this.questions.length
    },
    progress: function() {
      return parseInt(this.$route.params.slug) / this.nquestions * 100
    },
    progressStyle: function() {
      return "width: " + this.progress + "%"
    },
    nextTo: function() {
      if (parseInt(this.$route.params.slug) == this.questions.length) {
        return "/extra/"
      } else {
        return "/question/" + (parseInt(this.$route.params.slug) + 1) + "/"
      }
    },
    backTo: function() {
      return "/question/" + (parseInt(this.$route.params.slug) - 1) + "/"
    },
    notFirst: function() {
      let notFirst = true
      if (parseInt(this.$route.params.slug) == 1) {
        notFirst = false
      }
      return notFirst
    }
  },

  methods: {
    next: function(answer) {
      if (answer != null) {
        var payload = {'key': this.question['id'], 'value': answer}
        this.$store.commit('addAnswer', payload)
      }
      this.$router.push({ path: this.nextTo })
    },
    back: function(answer) {
      this.$router.push({ path: this.backTo })
    }
  },

  transition(to, from) {
    // console.log('from', from)
    if (!from) {
      return 'show'
    }
    if (from['name'] == null) {
      // console.log('from name null')
      return 'show'
    }
    return +to.params.slug < +from.params.slug ? {name:'page-right', mode: ''} : {name: 'page', mode: ''}
  }
}
</script>

<style scoped>
  @media (min-width: 768px) {
    .card {
      margin-top: 66px;
    }
    .card-text {
      font-size: 1.25em;
    }
  }

  .page {
    /* size depends on sizes of header */
    min-height: calc(100vh - 40px - 18px);
    max-width: 999px;
  }

  .container {
    background-color: #fff;
  }

  body {
    overflow-x: hidden;
  }

  .row {
    padding: 2px;
    --bs-gutter-x: 0.25rem;
  }

  /* transition during entering and leaving : */
  .page-enter-active, .page-leave-active, .page-right-enter-active, .page-right-leave-active {
    transition: transform 0.2s ease 0.25s, opacity 0.2s ease 0.25s;
  }
  .show-enter-active, .show-leave-active { 
    transition: opacity .1s;
  }
  .show-enter, .show-leave-active { 
    opacity: 0;
  }
  .page-enter {
    transform: translate(100%, -100%);
    opacity: 0.25
  }
  .page-enter-to {
    transform: translate(0, -100%);
    opacity: 1
  }
  .page-leave-to {
    transform: translate(-100%, 0);
    opacity: 0;
  }
  .page-right-enter {
    transform: translate(-100%, -100%);
    opacity: 0.25 
  }
  .page-right-enter-to {
    transform: translate(0, -100%);
    opacity: 1
  }
  .page-right-leave-to {
    transform: translate(100%, 0);
    opacity: 0;
  }
</style>