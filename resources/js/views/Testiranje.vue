<template>
  <div>
    <div class="container-fluid">
      <h1 class="mt-4">Testiranje</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
          <router-link to="/">Početna</router-link>
        </li>
        <li class="breadcrumb-item active">Testiranje</li>
      </ol>

      <div class="row">
        <div class="col-xl-12"></div>
      </div>
   <p>Ovlaštene laboratorije koje u datim državama vrše testiranje SARS-COV-2 virusa i koje posjeduju ISO standarde</p>

      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          Testiranje po državama
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
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable
                      >Testiranje na (COVID-19) Bosna i Hercegovina</b-button
                    >

                    <b-modal
                      id="modal-scrollable"
                      scrollable
                      title="Informacije o labaratorijama BIH"
                    >
                      <p>
                        Ovlaštene laboratorije u BiH koje vrše testiranje
                        SARS-COV-2 virusa i koje posjeduju ISO standarde
                        08.02.2021 Federacija BiH PCR detekciju SARS-CoV-2
                        virusa (COVID-19) mogu obavljati samo laboratoriji
                        zdravstvenih ustanova koji su verificirani od strane
                        Federalnog ministarstva zdravstva. Za obavljanje
                        predmetne djelatnosti od strane Federalnog ministarstva
                        zdravstva do sada su verificirani: 
                                              </p>

<p>
                        http://mcp.gov.ba/Publication/Read/ovlastene-laboratorije-u-bih-koje-vre-testiranje-sars-cov-2-virusa-i-koje-posjeduju-iso-standarde
</p>

                    </b-modal>
                  </td>
                  <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollables
                      >Testiranje na (COVID-19) SRBIJI</b-button
                    >

                    <b-modal
                      id="modal-scrollables"
                      scrollable
                      title="Informacije o labaratorijama Srbija"
                    >
                       <p>Ovlaštene laboratorije koje u datim državama vrše testiranje SARS-COV-2 virusa i koje posjeduju ISO standarde</p>

                      <p >
                        https://www.danas.rs/bbc-news-serbian/korona-virus-i-srbija-kad-gde-i-kako-mozete-da-se-testirate-i-koliko-to-kosta/
                      </p>
                    </b-modal>
                  </td>
                  <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollabless
                      >Testiranje na (COVID-19) HRVATSKA</b-button
                    >

                    <b-modal
                      id="modal-scrollabless"
                      scrollable
                      title="Informacije o labaratorijama Hrvatska"
                    >
                     <p>Ovlaštene laboratorije koje u datim državama vrše testiranje SARS-COV-2 virusa i koje posjeduju ISO standarde</p>
                      <p>
                        https://www.koronavirus.hr/svi-testni-centri-u-republici-hrvatskoj/763
                      </p>
                    </b-modal>
                  </td>
                  <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollablesss
                      >Testiranje na (COVID-19) CRNA GORA</b-button
                    >

                    <b-modal
                      id="modal-scrollablesss"
                      scrollable
                      title="Informacije o labaratorijama Crna Gora"
                    >
            <p>Ovlaštene laboratorije koje u datim državama vrše testiranje SARS-COV-2 virusa i koje posjeduju ISO standarde</p>
                      <p>
                        https://www.covidodgovor.me/me/testiranje-na-covid-19-i-procedure
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
  </div>
</template>
