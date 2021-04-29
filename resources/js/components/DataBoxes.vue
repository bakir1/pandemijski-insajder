<template>

<!-- prva kartica -->
<div class="row">
<div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Pozitivni</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="medium text-white stretched-link" href="#">Novi: {{ numberWithCommas(stats.NewConfirmed) }}</a>
            <a class="medium text-white stretched-link" href="/#/statistika">Ukupno: {{ numberWithCommas(stats.TotalConfirmed) }}</a>
            
            <div class="medium text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Umrli</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="medium text-white stretched-link" href="#">Novi: {{ numberWithCommas(stats.NewDeaths) }}</a>
            <a class="medium text-white stretched-link" href="/#/statistika">Ukupno: {{ numberWithCommas(stats.TotalDeaths) }}</a>
            <div class="medium text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Oporavljeni</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="medium text-white stretched-link" href="#">Novi: {{ numberWithCommas(stats.NewRecovered) }}</a>
            <a class="medium text-white stretched-link" href="/#/statistika">Ukupno: {{ numberWithCommas(stats.TotalRecovered) }}</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>


    </div> 
</template>

<script>
export default {
    name: 'DataBoxes',
    props: ['stats'],
    methods: {
        numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }
    }
}
</script>
