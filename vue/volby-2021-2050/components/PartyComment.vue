<template>
  <div>
    <!-- {{ exists }} -->
    <div v-for="(sel, index) in selected" :key="index">
      {{ sel.comments[qid] }}
      <!-- {{ sel.comments[qid] }} -->
      <!-- <div v-if="exists[index][qid]">
        Komentář&nbsp;&nbsp;<strong> {{ sel.abbreviation }}</strong>
      </div> -->
      <!-- <div v-if="exist(sel, qid)" class="accordion" id="accordion">
        Komentář&nbsp;&nbsp;<strong> {{ sel.abbreviation }}</strong>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" :data-bs-target="'#' + collapseTarget(sel.id, qid)" aria-expanded="true" aria-controls="collapseOne">
              Komentář&nbsp;&nbsp;<strong> {{ sel.abbreviation }}</strong>:
             </button>
          </h2>
          <div :id="collapseTarget(sel.id, qid)" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
            <div class="accordion-body">
               {{ sel.comments[qid]}}
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</template>

<script>
export default {
  props: ['selected', 'qid'],
  computed: {
    // exists: function() {
    //   let $this = this
    //   console.log('exists called')
    //   let exists = []
    //   for (let ksel in $this.selected) {
    //     console.log('ksel', ksel)
    //     console.log('$this.selected[ksel]',$this.selected[ksel])
    //     let item = {}
    //     for (let kc in $this.selected[ksel]['comments']) {
    //       console.log('kc', kc)
    //       let c = $this.selected[ksel]['comments'][kc]
    //       let ex = true
    //       if (typeof(c) == 'undefined') {
    //         ex = false
    //       }
    //       if (c == '') {
    //         ex = false
    //       }
    //       item[kc] = ex
    //     }
    //     exists.push(item)
    //   }
    //   return exists
    // }
  },
  methods: {
    // exist: function(sel, qid) {
    //   console.log('sel, qid', sel, qid)
    //   if (typeof(sel.comments[qid]) == 'undefined') {
    //     console.log('exist', 'undefined')
    //     return false
    //   }
    //   if (sel.comments[qid] == '') {
    //     return false
    //   }
    //   console.log('exist', 'true')
    //   return true
    // },
    // collapseTarget: function(s, key) {
    //   return "collapse-" + s + '-' + key
    // },
  }
}
 
</script>
