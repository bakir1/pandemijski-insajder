<template>
  <div class="container-fluid">
    <h1 class="mt-4">Simptomi</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
          <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Simptomi</li>
    </ol>

<!-- 
   <div class="row">
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-gavel"></i>
            Simptomi
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
    </div>
-->
    
     <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          Svi simptomi
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
                  <th>Najčešći simptomi:</th>
                  <th>Manje česti simptomi:</th>
                  <th>Ozbiljni simptomi:</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <tr>vrućica</tr>
                    <tr>suhi kašalj</tr>
                    <tr>umor</tr>
                  </td>

                  <td>
                    <tr>bolovi</tr>
                    <tr>Upala grla</tr>
                    <tr>dijareja</tr>
                    <tr>konjunktivitis</tr>
                    <tr>glavobolja</tr>
                    <tr>gubitak okusa ili mirisa</tr>
                    <tr>osip na koži</tr>
                    <tr>promjena boje prstiju na rukama i nogama</tr>
                  </td>

                  <td>
                    <tr>otežano disanje ili nedostatak daha</tr>
                    <tr>bolovi u prsima ili pritisak</tr>
                    <tr>gubitak govora ili pokreta</tr>
                  </td>

                </tr>
              </tbody>              

            </table>
            <td>
      <th><font color="#af002a">Upozorenje:</font></th>
<hr>
                    <tr>Odmah potražite medicinsku pomoć ako imate ozbiljne simptome. </tr>
                    <tr>Uvijek nazovite prije posjeta liječniku ili zdravstvenoj ustanovi.</tr>
                    <tr>Osobe s blagim simptomima, koje su inače zdrave, trebaju upravljati svojim simptomima kod kuće.</tr>
                    <tr>U prosjeku je potrebno 5-6 dana od trenutka kada je neko zaražen virusom da bi se simptomi pokazali, no to može potrajati i do 14 dana.</tr>
                  </td>
          </div>
        </div>
      </div>

  </div>
</template>