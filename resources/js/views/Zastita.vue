<template>
  <div class="container-fluid">
    <h1 class="mt-4">Zaštita</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Zaštita</li>
    </ol>
<h2>Kako se zaštititi?</h2>
<h6>Pazite na svoje i zdravlje ljudi oko vas tako što ćete se pridržavati slijedećeg:</h6>
    <div class="row">
      <div class="col-xl-12">
      
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button
                  class="btn btn-link"
                  data-toggle="collapse"
                  data-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Potrebno je držati distancu najmanje 2 metra između vas i drugih ljudi.
                </button>
              </h5>
            </div>

            <div
              id="collapseOne"
              class="collapse show"
              aria-labelledby="headingOne"
              data-parent="#accordion"
            >
              <div class="card-body">
               Zašto? Kada neko kašlje, kiše ili govori on izbacuje male kapljice koje mogu sadržavati virus. Ako ste preblizu možete udahnuti te kapljice uključujući COVID-19 virus ako je osoba koja kašlje zaražena.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button
                  class="btn btn-link collapsed"
                  data-toggle="collapse"
                  data-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Često i temeljito perite ruke sapunom i vodom (najmanje 20 sekundi) ili sredstvima za čišćenje ruku na bazi alkohola (min. 70%).
                </button>
              </h5>
            </div>
            <div
              id="collapseTwo"
              class="collapse"
              aria-labelledby="headingTwo"
              data-parent="#accordion"
            >
              <div class="card-body">
Zašto? Pranje ruku sapunom i vodom ili sredstvima za čišćenje ruku na bazi alkohola uklanja viruse koji mogu biti na vašim rukama.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button
                  class="btn btn-link collapsed"
                  data-toggle="collapse"
                  data-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Izbjegavajte dodirivati oči, nos i usta rukama.
                </button>
              </h5>
            </div>
            <div
              id="collapseThree"
              class="collapse"
              aria-labelledby="headingThree"
              data-parent="#accordion"
            >
              <div class="card-body">
                Zašto? Dohvaćamo brojne površine i rukama možemo pokupiti i viruse. Kontaminiranim rukama virus možemo prenijeti do očiju, nosa i usta odakle virus može ući u organizam i izazvati oboljenje COVID-19.              </div>
            </div>
          </div>

           <div class="card">
            <div class="card-header" id="heading4">
              <h5 class="mb-0">
                <button
                  class="btn btn-link collapsed"
                  data-toggle="collapse"
                  data-target="#collapse4"
                  aria-expanded="false"
                  aria-controls="collapse4"
                >Prilikom kašljanja ili kihanja trebate prekriti usta i nos unutarnjom stranom lakta ili <br>
                  jednokratnom maramicom – nakon korištenja odmah baciti maramicu u kantu za otpatke i oprati ruke. 
                </button>
              </h5>
            </div>
            <div
              id="collapse4"
              class="collapse"
              aria-labelledby="heading4"
              data-parent="#accordion"
            >
              <div class="card-body">
                Zašto? Respiratorne kapljice šire virus. Pridržavajući se navedenog štitite ljude oko sebe od virusa koji izazivaju prehladu, gripu i COVID-19.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading5">
              <h5 class="mb-0">
                <button
                  class="btn btn-link collapsed"
                  data-toggle="collapse"
                  data-target="#collapse5"
                  aria-expanded="false"
                  aria-controls="collapse5"
                >
                 Izbjegavajte veće grupe ljudi, okupljanja i boravak u zatvorenim javnim prostorima. 
                </button>
              </h5>
            </div>
            <div
              id="collapse5"
              class="collapse"
              aria-labelledby="heading5"
              data-parent="#accordion"
            >
              <div class="card-body">
Zašto? Time smanjujete rizik od bolesti koje se prenose kapljičnim putem kao što su prehlada, gripa i COVID-19. 
              </div>
            </div>
          </div>

           <div class="card">
            <div class="card-header" id="heading6">
              <h5 class="mb-0">
                <button
                  class="btn btn-link collapsed"
                  data-toggle="collapse"
                  data-target="#collapse6"
                  aria-expanded="false"
                  aria-controls="collapse6"
                >
                 Izbjegavajte rukovanje, grljenje i poljupce 
                </button>
              </h5>
            </div>
            <div
              id="collapse6"
              class="collapse"
              aria-labelledby="heading6"
              data-parent="#accordion"
            >
              <div class="card-body">
Zašto? Rukovanje se smatra bliskim kontaktom za širenje bolesti koje se prenose kapljičnim putem, te se zbog toga preporučuje da se ljudi što manje rukuju, jer se time smanjuje rizik potencijalnog prijenosa bolesti kao što su gripa i novi koronavirus (COVID-19).              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</template>