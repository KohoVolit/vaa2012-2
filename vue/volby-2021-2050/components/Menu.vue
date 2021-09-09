<template>
  <div>
   <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Volební kalkulačka</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.volebnikalkulacka.cz/">🏡 Volební kalkulačka 2021</a>
          </li>
          <li class="nav-item">
            <NuxtLink class="nav-link active" aria-current="page" to="/">🚀 Volební kalkulačka "2050"</NuxtLink>
          </li>
          <li class="nav-item">
            <NuxtLink class="nav-link" to="/me/"><span class="text-success">Moje kalkulačky 🔥</span></NuxtLink>
          </li>
          <li class="nav-item">
            <NuxtLink class="nav-link" to="/heroes/"><span class="text-light">Podporovatelé 💓</span></NuxtLink>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.volebnikalkulacka.cz/about/"><span class="text-light">O projektu</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .offcanvas-end {
    width: 275px;
    background-color: #222;
  }
</style>