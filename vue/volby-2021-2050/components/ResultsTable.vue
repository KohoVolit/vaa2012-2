<template>
  <div>
    <div class="container">
      <h4 class="p-2">Moje shoda:</h4>

      <ul class="list-group" v-for="(result, index) in results" :key="index">
        <!-- <li class="list-group-item d-flex" @click="showCandidate(result.info.id)"> -->
        <li class="list-group-item list-group-item-action d-flex" @click="comparison(result.info.id)">
          <div>
            <img :src="createImageLink(result.info.logo)" class="picture mr-2" />
          </div>
          <div class="ms-2 me-auto">
            <h3 class="fw-bold">
              {{ result.info.abbreviation }}
            </h3>
            {{ result.info.name }}
          </div>
          <div class="text-primary fw-bold">
            <h2>{{ result.result_percent}}&nbsp;%</h2>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'results'
  ],

  methods: {
    comparison: function(id) {
      // console.log("clicked", id)
      this.$router.push({ 
        name: 'comparison',
        params: {
          candidateId: id
        } 
      })
    },

    createImageLink: function (name) {
      // https://www.psp.cz/eknih/cdrom/2017ps/eknih/2017ps/poslanci/i6254.jpg
      // return "https://www.psp.cz/eknih/cdrom/2013ps/eknih/2013ps/poslanci/i" + name + ".jpg"
      return "/cs/volby-2021-2050/logos/" + name + ".webp"
      // CDN
      // return "https://michalskop-gitlab-io.azureedge.net/sinventura-2017-2021.volebnikalkulacka.cz/photos/" + name + ".webp"
    }
  }
}
</script>
<style scoped>
  .picture {
    height: 64px;
    border-radius: 50%;
    border: 1px solid #aaa;
   }
   .list-group {
     cursor: pointer;
   }
</style>