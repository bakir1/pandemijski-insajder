<template>
  <div class="container-fluid">
    <h1 class="mt-4">Mjere</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Mjere</li>
    </ol>

    <!-- <div class="row">
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-gavel"></i>
            Mjere info
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                      <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Image</td>
                          <td>Action</td>
                      </tr>
                  </thead>
              </table>
         </div>
        </div>
      </div>     
    </div> -->

    <div class="row">
      <div class="col-xl-12"></div>
    </div>

    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Odnos mjera po državama
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table
            class="table table-bordered"
            id="dataTable"
            width="100%"
            cellspacing="0"
          >
            <thead>
              <tr>
                <th>Bosna i Hercegovina</th>
                <th>Srbija</th>
                <th>Hrvatska</th>
                <th>Crna Gora</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <b-button variant="primary" v-b-modal.modal-scrollable
                    >Mjere (COVID-19) BIH OD 23.4.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollable"
                    scrollable
                    title="Scrollable Contentx"
                  >
                    <p class="my-4" v-for="i in 20" :key="i">
                      Cras mattis consectetur purus sit amet fermentum. Cras
                      justo odio, dapibus ac facilisis in, egestas eget quam.
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros.
                    </p>
                  </b-modal>
                </td>
                <td>
                  <b-button variant="warning" v-b-modal.modal-scrollables
                    >Mjere (COVID-19) SRBIJI OD 23.4.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollables"
                    scrollable
                    title="Scrollable Contentas"
                  >
                    <p class="my-4" v-for="i in 20" :key="i">
                      Crass mattis consectetur purus sit amet fermentum. Cras
                      justo odio, dapibus ac facilisis in, egestas eget quam.
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros.
                    </p>
                  </b-modal>
                </td>
                <td>
                  <b-button variant="info" v-b-modal.modal-scrollabless
                    >Mjere (COVID-19) HRVATSKA OD 23.4.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollabless"
                    scrollable
                    title="Scrollable Contents"
                  >
                    <p class="my-4" v-for="i in 20" :key="i">
                      Crasa mattis consectetur purus sit amet fermentum. Cras
                      justo odio, dapibus ac facilisis in, egestas eget quam.
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros.
                    </p>
                  </b-modal>
                </td>
                <td>
                  <b-button variant="danger" v-b-modal.modal-scrollablesss
                    >Mjere (COVID-19) CRNA GORA OD 23.4.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablesss"
                    scrollable
                    title="Scrollable Contents"
                  >
                    <p class="my-4" v-for="i in 20" :key="i">
                      Crasa mattis consectetur purus sit amet fermentum. Cras
                      justo odio, dapibus ac facilisis in, egestas eget quam.
                      Morbi leo risus, porta ac consectetur ac, vestibulum at
                      eros.
                    </p>
                  </b-modal>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

