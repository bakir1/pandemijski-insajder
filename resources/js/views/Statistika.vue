<template>
  <div class="container-fluid">
    <h1 class="mt-4">Statistika</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>          
      </li>
      <li class="breadcrumb-item active">Statistika</li>
    </ol>

    <!-- <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Primary Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">Warning Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Success Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Danger Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->



 <div id="welcome" class="container">
      <div class="row mt-5" v-if="arrPositive.length > 0">
        <div class="col">
          <h2>Positive</h2>
          <line-chart :chartData="arrPositive" :options="chartOptions" label="Positive" :chartColors="positiveChartColors"></line-chart>
        </div>
      </div>
      <div class="row mt-5" v-if="arrHopitalized.length > 0">
        <div class="col">
          <h2>Hopitalized</h2>
          <line-chart :chartData="arrHopitalized" :options="chartOptions" label="Hopitalized" :chartColors="hospitalizedChartColors"></line-chart>
        </div>
      </div>
      <div class="row mt-5" v-if="arrInIcu.length > 0">
        <div class="col">
          <h2>In ICU</h2>
          <line-chart :chartData="arrInIcu" :options="chartOptions" label="In ICU" :chartColors="inIcuColors"></line-chart>
        </div>
      </div>
      <div class="row mt-5" v-if="arrOnVentilators.length > 0">
        <div class="col">
          <h2>On Ventilators</h2>
          <line-chart :chartData="arrOnVentilators" :options="chartOptions" label="On Ventilators" :chartColors="onVentilatorsColors"></line-chart>
        </div>
      </div>
      <div class="row mt-5" v-if="arrRecovered.length > 0">
        <div class="col">
          <h2>Recovered</h2>
          <line-chart :chartData="arrRecovered" :options="chartOptions" label="Recovered" :chartColors="recoveredColors"></line-chart>
        </div>
      </div>
      <div class="row mt-5" v-if="arrDeaths.length > 0">
        <div class="col">
          <h2>Deaths</h2>
          <line-chart :chartData="arrDeaths" :options="chartOptions" label="Deaths" :chartColors="deathColors"></line-chart>
        </div>
      </div>
    </div>

  </div>
</template>



<script>
import axios from 'axios';
import moment from 'moment';

import LineChart from '../components/LineChart.vue';

export default {
  name: 'statistika',
  components: {
        LineChart
  },
  data(){
    return{
      arrPositive: [],
      positiveChartColors: {
        borderColor: "#077187",
        pointBorderColor: "#0E1428",
        pointBackgroundColor: "#AFD6AC",
        backgroundColor: "#74A57F"
      },
      arrHopitalized: [],
      hospitalizedChartColors: {
        borderColor: "#251F47",
        pointBorderColor: "#260F26",
        pointBackgroundColor: "#858EAB",
        backgroundColor: "#858EAB"
      },
      arrInIcu: [],
      inIcuColors: {
        borderColor: "#190B28",
        pointBorderColor: "#190B28",
        pointBackgroundColor: "#E55381",
        backgroundColor: "#E55381"
      },
      arrOnVentilators: [],
      onVentilatorsColors: {
        borderColor: "#784F41",
        pointBorderColor: "#784F41",
        pointBackgroundColor: "#BBE5ED",
        backgroundColor: "#BBE5ED"
      },
      arrRecovered: [],
      recoveredColors: {
        borderColor: "#4E5E66",
        pointBorderColor: "#4E5E66",
        pointBackgroundColor: "#31E981",
        backgroundColor: "#31E981"
      },
      arrDeaths: [],
      deathColors: {
        borderColor: "#E06D06",
        pointBorderColor: "#E06D06",
        pointBackgroundColor: "#402A2C",
        backgroundColor: "#402A2C"
      },
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false
      }
    };
  },
  async created(){
    const { data } = await axios.get("https://api.covidtracking.com/v1/us/daily.json");

    data.forEach(d => {
      const date = moment(d.date, "YYYYMMDD").format("DD/MM");

      const {
        positive,
        hospitalizedCurrently,
        inIcuCurrently,
        onVentilatorCurrently,
        recovered,
        death
      } = d;

      this.arrPositive.push({date, total: positive});
      this.arrHopitalized.push({date, total: hospitalizedCurrently});
      this.arrInIcu.push({date, total: inIcuCurrently});
      this.arrOnVentilators.push({date, total: onVentilatorCurrently});
      this.arrRecovered.push({date, total: recovered});
      this.arrDeaths.push({date, total: death});

     // console.log(this.arrPositive);
    })
  }
}
</script>