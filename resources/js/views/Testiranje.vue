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
                      title="Scrollable Contentx"
                    >
                      <p>
                        Ovlaštene laboratorije u BiH koje vrše testiranje
                        SARS-COV-2 virusa i koje posjeduju ISO standarde
                        08.02.2021 Federacija BiH PCR detekciju SARS-CoV-2
                        virusa (COVID-19) mogu obavljati samo laboratoriji
                        zdravstvenih ustanova koji su verificirani od strane
                        Federalnog ministarstva zdravstva. Za obavljanje
                        predmetne djelatnosti od strane Federalnog ministarstva
                        zdravstva do sada su verificirani: Klinički centar
                        Univerziteta Sarajevo • Univerzitetski klinički centar
                        Tuzla • Sveučilišna klinička bolnica Mostar • Opća
                        bolnica „Prim. dr. Abdulah Nakaš“ Sarajevo • Kantonalna
                        bolnica Zenica • Opća bolnica Tešanj • Kantonalna
                        bolnica „Dr Irfan Ljubijankić“ Bihać • Privatna
                        Zdravstvena ustanova “Alea“ Dr Kandić Sarajevo • PZU
                        Plava poliklinika Tuzla • PZU
                        „Eurofarm-Centar-Poliklinika„ Sarajevo • PZU Privatni
                        mikrobiološko parazitološki laboratorij Sarajevo • Zavod
                        za biomedicinsku dijagnostiku i ispitivanje „Nalaz“,
                        Sarajevo • PZU Poliklinika i Dnevna bolnica „Dr.
                        Al-Tawil“ Veterinarski fakultet Univerziteta u Sarajevu.
                        Akreditacija BAS EN ISO 17025-2006. Akreditiran je za
                        molekularno-biološka ispitivanja (područje LI 19) prema
                        BAS EN ISO 17025-2006 (potpodručje LI 19.2 - Molekularno
                        dijagnostički pregled u veterini, Certifikat o
                        akreditaciji LI-43 -01, dostupno na:
                        http://www.bata.gov.ba/Akreditirana_tijela/Certifikati/LI/Certifikat-LI-43-01.pdf).
                        Ova laboratorija je završila postupak obnove
                        akredatacije u skladu sa 17025:2018, te su podaci o
                        istom dostupni na web stranici BAS EN ISO
                        http://www.bata.gov.ba Trenutno rade i komercijalna
                        testiranja, a izvještaj o analizi (tzv. nalaz) izdaje se
                        dvojezično (bosanski i engleski) unutar 24h od prijema
                        odgovarajuceg uzorka na analizu. Više informacija na
                        http://vfs.unsa.ba/web/index.php/info/vfs-vijesti/1707-informacija-o-testiranju-na-covid-19-na-veterinarskom-fakultetu-univerziteta-u-sarajevu
                        Više informacija o verificiranim laboratorijama za PCR
                        testiranje na COVID-19 u Federaciji BIH na:
                        https://covid19.fmoh.gov.ba/novost/252/verificirane-laboratorije-za-pcr-testiranje-na-covid-19-u-fbih
                        Republika Srpska 1) Za oblast mikrobiologije (PCR –
                        tehnika): JZU Univerzitetski klinički centar Republike
                        Srpske, JZU Univerzitetska bolnica Foča, JZU Bolnica „
                        Sveti Vračevi“ Bijeljina, JZU Institut za javno
                        zdravstvo Republike Srpske; akreditacija BAS EN ISO
                        17025; i posjeduje kontrolu kvaliteta iz Njemačke i JZU
                        Bolnica “Sveti apostol Luka” Doboj, usluge testiranja na
                        COVID-19 u komercijalne svrhe. 2) Za oblast
                        biohemije/imunologije (serološko testiranje na
                        antitijela na COVID-19. IgG i IgM): Laboratorije javnih
                        zdravstvenih ustanova-bolnica, JZU Zavod za
                        transfuzijsku medicinu Republike Srpske i Laboratorije
                        privatnih zdravstvenih ustanova Brčko distrikt
                        Laboratorij Odjeljenja za zdravstvo i ostale usluge -
                        Pododjeljenja za javno zdravstvo Laboratorij JZU „
                        Zdravstveni centar Brčko“ Brčko distrikt BiH PZU
                        Poliklinika dr Pajić Medical Brčko distrikt BiH-P.J.
                        "Laboratorija za mikrobiologiju i virusologiju" PZU
                        Laboratorija "Biomedica" Brčko
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
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollabless
                      >Testiranje na (COVID-19) HRVATSKA</b-button
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
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollablesss
                      >Testiranje na (COVID-19) CRNA GORA</b-button
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
  </div>
</template>
