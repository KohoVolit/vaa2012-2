<template>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Mladí volí, Volební kalkulačka 2021</a>
    
      <Menu />
      
    </div>
  </nav>
</template>

<script>
import Menu from "~/components/Menu.vue";

export default {
  components: {
    Menu
  }
};
</script>
