<template>
  <div class="container-fluid">
    <h1 class="mt-4">Vakcine</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Vakcine</li>
    </ol>

<div>
  <b-card no-body class="overflow-hidden" style="max-width: 1300px;">
    <b-row no-gutters>
      <b-col md="6">
        <b-card-img src="https://media-exp1.licdn.com/dms/image/C4D12AQGTReZjmjn7Gw/article-cover_image-shrink_600_2000/0/1520105113913?e=1628726400&v=beta&t=c1U9nPcjVH2dKhYH_QLeDEJt-EZQBhSv26tcnaeS5KA" alt="Image" class="rounded-0"></b-card-img>
      </b-col>
      <b-col md="6">
        <b-card-body title="Zašto se vakcinisati?">
          <b-card-text>
            Recite – da li vam je draže pretrpiti malo bola od boce ili da danima ležite pod temperaturom, plačete, da vas sve boli? Neke od bolesti protiv kojih se vakcinišemo, poput krzamaka (morbili), polia, tetanusa, tuberkuloze i difterije su veoma opasne – zbog polia je nekada dosta djece stradalo jer, ako preživi, ostajali su hendikepirani, nisu mogli hodati.
Od tetanusa kojeg možemo dobiti nakon povreda i posjekotina ljudi dobijaju teške grčeve i mali su izgledi da prežive. Difterija je znala ugušiti ljude jer bakterija koja je izaziva proizvodi jedan opasan otrov, a lijeka za ovu bolest nema. Krzamak, koji se još naziva i ospice ili morbili može izazvati zapaljenje mozga i smrt. Nekada je postojala i užasna bolest zvana velike boginje, od koje su ljudi masovno umirali,a preživjelima su ostajali užasni ožiljci. Zahvaljujući sistemskim vakcinacijama, ove bolesti više nema.
          </b-card-text>
        </b-card-body>
      </b-col>
    </b-row>
  </b-card>
</div>

<hr>

<h1>Tipovi vakcina: </h1>

<div>
  <b-card-group deck>
    <b-card title="Moderna" img-src="https://www.gavi.org/sites/default/files/covid/pr/shutterstock_1891094320_h2.jpg" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
           <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable1
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable1"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Pfizer" img-src="https://c2.thejournal.ie/media/2021/04/2-57684007-390x285.jpg" img-alt="Image" img-top>
      <b-card-text>
        This card has supporting text below as a natural lead-in to additional content.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
          <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable2
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable2"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="AstreZeneca" img-src="https://img2.thejournal.ie/article/5464218/listing/?width=600&version=5464231" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
          <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable3
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable3"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td></small>
      </template>
    </b-card>

  </b-card-group>
</div>

<div>
  <b-card-group deck>
    <b-card title="Sputnik V" img-src="https://ba.n1info.com/wp-content/uploads/2020/12/sputnjik-v-vakcina-325646.jpeg" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
           <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable4
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable4"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Sinopharm" img-src="https://cdnuploads.aa.com.tr/uploads/Contents/2021/05/27/thumbs_b_c_8517db6f24692a86230fd94adabc0ff7.jpg?v=175407" img-alt="Image" img-top>
      <b-card-text>
        This card has supporting text below as a natural lead-in to additional content.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
          <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable5
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable5"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Johnson&Johnson(Jenssen)" img-src="https://s.france24.com/media/display/e6eab602-ac1d-11eb-acc7-005056a964fe/w:400/p:3x2/000_9927ZZ.jpg" img-alt="Image" img-top>
      <b-card-text>
        This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.
      </b-card-text>
      <template #footer>
        <small class="text-muted">
          <td>
                    <b-button
                      variant="text-white bg-info"
                      v-b-modal.modal-scrollable6
                      >Više informacija o ovoj vakcini...</b-button
                    >

                    <b-modal
                      id="modal-scrollable6"
                      scrollable
                      title="Scrollable Contentx"
                    ><p></p>
                    </b-modal>
                  </td></small>
      </template>
    </b-card>
    
  </b-card-group>
</div>

<hr>

<h2>Zemlje sa najviše ljudi vakcinisani na 100.000 stanovnika</h2>
<iframe src="https://public.domo.com/cards/2kO6J" width="900" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>
 
 <h2>Ljudi vakcinisani po zemljama na 100.000 stanovnika</h2>
<iframe src="https://public.domo.com/cards/31O7r" width="900" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>


  </div>
</template>
