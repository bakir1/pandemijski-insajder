<template>
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Više Informacija</div>

          <router-link to="/" class="nav-link" exact>
            <i class="fas fa-hospital-symbol"></i>
            <!-- <span>Početna</span> -->
            <span style="margin-left: 10px">Početna</span>
          </router-link>

          <router-link to="/mjere" class="nav-link" exact>
            <i class="fas fa-gavel"></i>
           <span style="margin-left: 10px">Mjere</span>
          </router-link>

          <router-link to="/testiranje" class="nav-link" exact>
            <i class="fas fa-comment-medical"></i>
            <span style="margin-left: 10px">Testiranje</span>
          </router-link>

          <router-link to="/zastita" class="nav-link" exact>
            <i class="fas fa-user-shield"></i>
           <span style="margin-left: 10px">Zaštita</span>
          </router-link>

          <router-link to="/simptomi" class="nav-link" exact>
            <i class="fas fa-viruses"></i>
            <span style="margin-left: 10px">Simptomi</span>
          </router-link>

          <router-link to="/vakcine" class="nav-link" exact>
            <i class="fas fa-check-double"></i>
            <span style="margin-left: 10px">Vakcine</span>
          </router-link>

          <router-link to="/statistika" class="nav-link" exact>
            <i class="far fa-chart-bar"></i>
            <span style="margin-left: 10px">Statistika</span>
          </router-link>
        </div>
      </div>
    </nav>
  </div>
</template>