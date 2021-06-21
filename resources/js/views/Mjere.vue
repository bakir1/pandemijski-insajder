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
                  <b-button variant="primary" v-b-modal.modal-scrollablebih2
                    >Mjere (COVID-19) BIH OD 06.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablebih2"
                    scrollable
                    title="Mjere 15.06.2021"
                  >
                    <p>
Krizni stožer/štab Federalnog ministarstva zdravstva na današnjoj je sjednici predložio produženje aktualnih mjera za narednih 14 dana.                     </p>
                    <p>
Podaci Zavoda za javno zdravstvo Federacije BiH pokazuju da su svi indikatori u padu (broj oboljelih, hospitaliziranih, broj osoba na invazivnoj mehaničkoj ventilaciji, te broj smrtnih slučajeva).                    </p>
                    <p>                      
                      Sedmodnevna incidenca na nivou Federacije iznosi 7 slučajeva / 100.000 stanovnika. 

Međutim, iz Zavoda za javno zdravstvo Federacije BiH navode da je, usprkos značajnom poboljšanju epidemiološke situacije, i dalje potrebno pridržavanje higijensko-epidemioloških mjera, s ciljem spriječavanja daljnjeg prijenosa virusa u zajednici. 

Također, podaci Zavoda za javno zdravstvo FBiH pokazuju da su do sada u Federaciji BiH jednom dozom cijepljene 136.774 osobe, a drugom dozom 55.232 osobe.

Prijedlog produženja mjera biće dostavljen Vladi Federacije BiH na usvajanje.                  </p>
                  </b-modal>
                  <hr>
                  <b-button variant="primary" v-b-modal.modal-scrollablebih1
                    >Mjere (COVID-19) BIH OD 05.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablebih1"
                    scrollable
                    title="Mjere 30.04.2021"
                  >
                    <p>
Epidemiološka situacija u Federaciji BiH je povoljnija u odnosu na prethodne sedmice, zaključeno je na današnjoj sjednici Kriznog štaba/stožera Federalnog ministarstva zdravstva.
                    </p>
                    <p>
Prema podacima Zavoda za javno zdravstvo Federacije BiH, sedmodnevna incidenca na nivou Federacije iznosi 75 slučajeva/100.000 stanovnika. Iako je evidentiran pad broja oboljelih, najviša incidenca zabilježena je u Posavskom, Hercegovačko-neretvanskom i  Kantonu 10.                    </p>
                    <p>                      
                      Predložen je nastavak postepenog ublažavanja mjera, što se odnosi na pomjeranje ograničenja kretanja, od 22:00 do 05:00 sati narednog dana, te dozvoljeno okupljanje do 30 osoba na skupovima na otvorenom. 

Predložena je i naredba da se centri za mentalno zdravlje stave u punu funkciju, kako bi se zaštitilo mentalno zdravlje stanovništva.

Nove mjere predložene su na period od 14 dana, te će biti dostavljene Vladi Federacije BiH na usvajanje.

                    </p>
                  </b-modal>
                  <hr>
                  <b-button variant="primary" v-b-modal.modal-scrollable
                    >Mjere (COVID-19) BIH OD 04.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollable"
                    scrollable
                    title="Mjere 30.04.2021"
                  >
                    <p>
                      Federalno ministarstvo zdravstva poziva pučanstvo da se pridržava higijensko - epidemioloških mjera tijekom predstojećih praznika.
                    </p>
                    <p>
                      Izbjegavanjem većih okupljanja i poštivanjem epidemioloških mjera, smanjit ćemo mogućnost zaraze koronavirusom.
                    </p>
                    <p>                      
                      Ukoliko ipak odlučite provoditi vrijeme sa dragim osobama, izbjegavajte rukovanje, ljubljenje i grljenje, poštujte distancu i nosite zaštitne maske. Posebno moramo misliti na najranjivije među nama, a to su starije osobe i kronični bolesnici.
                      Pozivamo vjernike da sve vjerske aktivnosti obavljaju sukladno  preporukama nadležnih institucija, te da se i dalje pridržavaju epidemioloških mjera.
                    </p>
                  </b-modal>
                </td>
                <td>

                <b-button variant="warning" v-b-modal.modal-scrollables3
                    >Mjere (COVID-19) SRBIJI 06.2021</b-button
                  >
                  <b-modal
                    id="modal-scrollables3"
                    scrollable
                    title="Mjere Srbija"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.pravno-informacioni-sistem.rs/fp/covid19
                    </p>
                  </b-modal>

                  <hr>

                                    <b-button variant="warning" v-b-modal.modal-scrollables2
                    >Mjere (COVID-19) SRBIJI 05.2021</b-button
                  >
                  <b-modal
                    id="modal-scrollables2"
                    scrollable
                    title="Mjere Srbija"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.pravno-informacioni-sistem.rs/fp/covid19
                    </p>
                  </b-modal>

                  <hr>

                  <b-button variant="warning" v-b-modal.modal-scrollables
                    >Mjere (COVID-19) SRBIJI 04.2021</b-button
                  >
                  <b-modal
                    id="modal-scrollables"
                    scrollable
                    title="Mjere Srbija"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.pravno-informacioni-sistem.rs/fp/covid19
                    </p>
                  </b-modal>
                </td>

                <td>

                <b-button variant="info" v-b-modal.modal-scrollabless3
                    >Mjere (COVID-19) HRVATSKA OD 06.2021</b-button
                  >
                  <b-modal
                    id="modal-scrollabless3"
                    scrollable
                    title="Mjere Hrvatska"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.mvep.hr/hr/
                    </p>
                  </b-modal>

<hr>

                  <b-button variant="info" v-b-modal.modal-scrollabless2
                    >Mjere (COVID-19) HRVATSKA OD 05.2021</b-button
                  >
                  <b-modal
                    id="modal-scrollabless2"
                    scrollable
                    title="Mjere Hrvatska"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.mvep.hr/hr/
                    </p>
                  </b-modal>
<hr>
                  <b-button variant="info" v-b-modal.modal-scrollabless1
                    >Mjere (COVID-19) HRVATSKA OD 04.2021</b-button
                  >
<hr>
                  <b-modal
                    id="modal-scrollabless1"
                    scrollable
                    title="Mjere Hrvatska"
                  >
                  <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                      http://www.mvep.hr/hr/
                    </p>
                  </b-modal>
                </td>
                <td>

       <b-button variant="danger" v-b-modal.modal-scrollablesss3
                    >Mjere (COVID-19) CRNA GORA OD 06.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablesss3"
                    scrollable
                    title="Mjere Crna Gora"
                  >
                 <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                    https://www.covidodgovor.me/me/opste-mjere
                    </p>
                  </b-modal>

                  <hr>

               <b-button variant="danger" v-b-modal.modal-scrollablesss2
                    >Mjere (COVID-19) CRNA GORA OD 05.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablesss2"
                    scrollable
                    title="Mjere Crna Gora"
                  >
                 <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                    https://www.covidodgovor.me/me/opste-mjere
                    </p>
                  </b-modal>

                  <hr>

                  <b-button variant="danger" v-b-modal.modal-scrollablesss1
                    >Mjere (COVID-19) CRNA GORA OD 04.2021</b-button
                  >

                  <b-modal
                    id="modal-scrollablesss1"
                    scrollable
                    title="Mjere Crna Gora"
                  >
                 <p>Za sve mjere i aktuelnosti pratiti na linku ispod: </p>
                    <p>
                    https://www.covidodgovor.me/me/opste-mjere
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

