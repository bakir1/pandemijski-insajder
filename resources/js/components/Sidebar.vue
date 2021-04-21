<template>
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Više Informacija</div>

          <router-link to="/" class="nav-link" exact>
            <i class="fas fa-tachometer-alt"></i>
            <span>Početna</span>
          </router-link>

          <router-link to="/mjere" class="nav-link" exact>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Mjere</span>
          </router-link>

          <router-link to="/testiranje" class="nav-link" exact>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Testiranje</span>
          </router-link>

 
        </div>
      </div>
    </nav>
  </div>
</template>