<template>
  <div class="container-fluid">
    <h1 class="mt-4">Vakcine</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Vakcine</li>
    </ol>
    <div class="row">
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
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6">
          <div class="card mb-4">
            <div class="card-header d-flex">
             <span>
              <i class="fas fa-check-double"></i>
              Vakcine info
             </span>
             <button class="btn btn-primary btn-sm ml-auto" @click="showNewVakcineModal"><span class="fa fa-plus"></span>Create New</button>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Ime Vakcine</td>
                    <td>Količina</td>
                    <td>Efikasnost</td>
                    <td>Porijeklo</td>
                    <td>Uredi-Izbrisi</td>
                  </tr>
                  </thead>
                <tbody>
                 <tr>
                    <!-- <td>{{vakcine.id}}</td>
                    <td>{{vakcine.ime}}</td>
                    <td>{{vakcine.kolicina}}</td>
                    <td>{{vakcine.efikasnost}}</td>
                    <td>{{vakcine.porijeklo}}</td> -->
                    <td>1</td>
                    <td>ime</td>
                    <td>kolicina</td>
                    <td>efikasnost</td>
                    <td>porijeklo</td>
                    <td>
                      <button class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></button>
                    </td>
                    <td>
                      <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <b-modal ref="newVakcineModal" hide-footer title="Add New ">
            <div class="d-block">
              <form v-on:submit.prevent="createVakcine">
                <div class="form-group">
                  <label for="ime">Unesi ime</label>
                  <input type="text" v-model="vakcineData.ime" class="form-control" id="ime" placeholder="Unesi ime">
                </div>
               <div class="form-group">
                  <label for="kolicina">Unesi kolicinu</label>
                  <input type="text" v-model="vakcineData.kolicina" class="form-control" id="kolicina" placeholder="Unesi kolicinu">
                </div>
               <div class="form-group">
                  <label for="efikasnost">Unesi efikasnost</label>
                  <input type="text" v-model="vakcineData.efikasnost" class="form-control" id="efikasnost" placeholder="Unesi efikasnost">
                </div>
                <div class="form-group">
                  <label for="porijeklo">Unesi porijeklo</label>
                  <input type="text" v-model="vakcineData.porijeklo" class="form-control" id="porijeklo" placeholder="Unesi porijeklo">
                </div>
                <hr>
                <div class="text-right">
                 <button type="button" class="btn btn-default" v-on:click="hideNewVakcineModal">Cancel</button>
                 <button type="button" class="btn btn-primary" v-on:click="createVakcine"><span class="fa fa-check"></span>Save</button>
                </div>              
              </form>
            </div>
          </b-modal>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import * as  vakcineService from "../services/vakcine_service.js";
export default {
  name: "vakcine",
  data() {
    return {
      vakcines: [],
      vakcineData: {
        ime: "",
        kolicina: "",
        efikasnost: "",
        porijeklo: "",
      },
            errors: {},
    };
  },
  mounted() {
    this.loadVakcine();
  },
  methods: {
    loadVakcine: async function () {
      try {
        const response = await vakcineService.loadVakcine();
        console.log(response);
        this.vakcine = response.data.data;
        console.log(this.vakcines);
      } catch (error) {
        }
      },
    hideNewVakcineModal() {
      this.$refs.newVakcineModal.hide();
    },
    showNewVakcineModal() {
      this.$refs.newVakcineModal.show();
    },
    createVakcine: async function() {
      let formData = new FormData();
      formData.append('ime', this.vakcineData.ime);
      formData.append('kolicina', this.vakcineData.kolicina);
      formData.append('efikasnost', this.vakcineData.efikasnost);
      formData.append('porijeklo', this.vakcineData.porijeklo);

      try{
        const response = await vakcineService.createVakcine(formData);
        console.log(response);
      } catch(error){
        alert('some error');
      }
    },
  },
};
</script>

