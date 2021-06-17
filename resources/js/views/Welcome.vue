<template>
  <div class="container-fluid">
    <h1 class="mt-4">Početna</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Prikaz</li>
    </ol>


    <main v-if="!loading">
      <DataTitle :text="title" :dataDate="dataDate" />
      <DataBoxes :stats="stats" />
      <CountrySelect @get-country="getCountryData" :countries="countries" />

      <b-button
        @click="clearCountryData"
        v-if="stats.Country"
        variant="outline-primary"
        >Novi Podaci</b-button
      >
    </main>

<!-- mapa, statistika, itd... -->
<div>
    <hr>
  <h1>Mapa Covid-19</h1>
  <h5>Ukupno zabilježenih slučajeva</h5>
<iframe src="https://public.domo.com/cards/dG1jy" width="100%" height="800" marginheight="0" marginwidth="0" frameborder="0"></iframe>
</div>   


<h4>Ukupni COVID-19 testovi na 1.000 ljudi</h4>
<p>Na ovoj tabeli možete provjeriti koliki je ukupni broj COVID-19 testova na 1.000 ljudi u vašoj državi i možete uporediti tako što dodate više država.</p>
<p>Da bi uporedili više država pritisnite dugme(Add country) i pritiskom na polje pored države odabrali ste državu.</p>
<iframe src="https://ourworldindata.org/grapher/full-list-cumulative-total-tests-per-thousand?country=BIH+HRV+SRB+MNE+MKD" style="width: 100%; height: 600px; border: 0px none;"></iframe>

<hr>
<h4>Potvrđeni slučajevi COVID-19</h4>
<p>Broj potvrđenih slučajeva manji je od broja stvarnih slučajeva; glavni razlog tome je ograničeno testiranje.</p>
<iframe src="https://ourworldindata.org/grapher/covid-confirmed-cases-since-100th-case?country=BIH+HRV+SRB+MNE+MKD" style="width: 100%; height: 600px; border: 0px none;"></iframe>

  </div>
</template>

<script>
import DataTitle from "../components/DataTitle.vue";
import DataBoxes from "../components/DataBoxes.vue";
import CountrySelect from "../components/CountrySelect.vue";

export default {
  name: "pocetna",
  components: {
    DataTitle,
    DataBoxes,
    CountrySelect,
  },
  data() {
    return {
      loading: true,
      title: "Svijet",
      dataDate: "",
      status: {},
      countries: [],
      //      loadingImage: require('')
    };
  },
  methods: {
    async fetchCovidData() {
      const res = await fetch("https://api.covid19api.com/summary");
      const data = await res.json();
      return data;
    },
    getCountryData(country) {
      this.stats = country;
      this.title = country.Country;
    },
    async clearCountryData() {
      this.loading = true;
      const data = await this.fetchCovidData();
      this.title = "Global";
      this.stats = data.Global;
      this.loading = false;
    },
  },
  async created() {
    const data = await this.fetchCovidData();

    this.dataDate = data.Date;
    this.stats = data.Global;
    this.countries = data.Countries;
    this.loading = false;
  },
};
</script>