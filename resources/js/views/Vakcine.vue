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
        <p><b>Tehnologija:</b> RNK</p>
        <p><b>Efikasnost:</b> 94.1% prema studijama, zaštita od teških oblika bolesti 100%</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja završena</p>
        <p><b>Autorizirana:</b> u USA, EU, Kanadi, Izraelu i drugi...</p>
        <p><b>Doziranje:</b> 2 doze u razmaku 28 dan</p>
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
                      title="Vakcina Moderna"
                    >
                        <p>
                         <b> Opće informacije </b>
                          <b> Naziv: mRNA-1273 </b>

                          <b>Proizvođač: ModernaTX, Inc.

                          Tip vakcine: mRNA
                          </b>
                          Broj snimaka: 2 snimka, u razmaku od 28 dana

                          Kako dato: mišić nadlaktice

                          NE SADRŽI: Jaja, konzervanse, lateks, metale
                          Kompletna lista sastojaka

                          Ko se treba cijepiti
                          Moderna vakcina preporučuje se osobama starijim od 18 godina.
                          Saznajte više o tome kako CDC daje preporuke za cjepivo COVID-19.
                          Ko NE SMIJE Vakcinisati
                          Ako ste imali ozbiljnu alergijsku reakciju (anafilaksiju) ili neposrednu alergijsku reakciju, čak i ako nije bila ozbiljna, na bilo koji sastojak mRNA COVID-19 cjepiva (poput polietilen glikola), ne biste trebali dobiti mRNA COVID-19 vakcina.
                          Ako ste imali ozbiljnu ili trenutnu alergijsku reakciju nakon dobivanja prve doze mRNA COVID-19 cjepiva, ne biste trebali dobiti drugu dozu niti mRNA COVID-19 cjepiva (Moderna ili Pfizer-BioNTech).
                          Teška alergijska reakcija je ona koju treba liječiti epinefrinom ili EpiPenom ili medicinskom njegom. Saznajte o uobičajenim nuspojavama COVID-19 cjepiva i kada nazvati liječnika.
                          Neposredna alergijska reakcija znači reakciju u roku od 4 sata od pucanja, uključujući simptome poput košnice, otoka ili piskanja (respiratorni poremećaj).
                          Ako niste u mogućnosti dobiti mRNA COVID-19 cjepivo, možda ćete i dalje moći dobiti drugu vrstu COVID-19 cjepiva. Doznajte više informacija za ljude s alergijama.

                          Mogući neželjeni efekti
                          U ruku u kojoj ste dobili metak:

                          Bol
                          Crvenilo
                          Oticanje
                          U ostatku tijela:

                          Umor
                          Glavobolja
                          Mišićni bol
                          Jeza
                          Vrućica
                          Mučnina
                          Ovi neželjeni efekti se javljaju u roku od jednog ili dva dana od primanja vakcine. Oni su normalni znakovi da vaše tijelo gradi zaštitu i da bi trebali nestati u roku od nekoliko dana.

                          Saznajte više o mogućim neželjenim efektima nakon vakcinisanja protiv COVID-19.

                          Ostala odobrena i preporučena cjepiva COVID-19 u Sjedinjenim Državama.
                          Pfizer-BioNTech
                          Johnson & Johnson's Janssen
                          Trebali biste dobiti vakcinaciju protiv COVID-19 što je prije moguće. Sva trenutno odobrena i preporučena COVID-19 cjepiva su sigurna i učinkovita, a CDC ne preporučuje jedno cjepivo nad drugim.

                          Sažetak sigurnosnih podataka
                          U kliničkim ispitivanjima, simptomi reaktogenosti (nuspojave koje se javljaju u roku od 7 dana od cijepljenja) bili su česti, ali uglavnom su bili blagi do umjereni. Malo je ljudi imalo reakcije koje su utjecale na njihovu sposobnost obavljanja svakodnevnih aktivnosti.
                          Nuspojave u cijelom tijelu (poput vrućice, hladnoće, umora i glavobolje) bile su češće nakon druge doze cjepiva.
                          CDC će nastaviti pružati ažuriranja dok saznajemo više o sigurnosti moderne vakcine u stvarnim uvjetima.
                          Saznajte više o praćenju sigurnosti vakcine nakon što je vakcina odobrena ili odobrena za upotrebu.

                          Koliko dobro djeluje vakcina
                          Na osnovu dokaza iz kliničkih ispitivanja, kod ljudi starijih od 18 godina i više, Moderno cjepivo bilo je 94,1% učinkovito u prevenciji laboratorijski potvrđene infekcije COVID-19 kod ljudi koji su primili dvije doze i nisu imali dokaze da su prethodno zaraženi.
                          Vakcina je takođe bila visoko efikasna u kliničkim ispitivanjima u prevenciji COVID-19 među ljudima različite starosti, spola, rase i etničke pripadnosti i među ljudima sa osnovnim medicinskim stanjima.
                          CDC će nastaviti pružati ažuriranja dok saznajemo više o tome kako moderna vakcina djeluje u stvarnim uvjetima.
                          Demografske informacije o kliničkom ispitivanju
                          Klinička ispitivanja moderne vakcine obuhvatila su ljude iz sljedećih rasnih, etničkih, dobnih i spolnih kategorija:

                          Race

                          79% bijela
                          10% Afroamerikanaca
                          5% azijski
                          3% druge rase / etničke pripadnosti
                          1% Američki Indijanac ili Aljaska
                          1% domaći havajski ili drugi pacifički otočanin
                          Etnicitet

                          79% nije Latinoamerikanac
                          20% latinoamerikanca
                          1% nepoznato
                          Seks

                          53% mali
                          47% žena
                          Dob

                          75% od 18 do 64 godine
                          25% 65 godina i više
                          Dvadeset i dvoje (22%) ljudi koji su sudjelovali u kliničkim ispitivanjima imali su barem jedno stanje zbog kojeg su bili izloženi riziku od teške bolesti od COVID-19. Najčešća osnovna medicinska stanja među učesnicima bila su plućna bolest, bolesti srca, pretilost, dijabetes, bolest jetre ili HIV infekcija. Četiri procenta (4%) učesnika imalo je dva ili više stanja visokog rizika.
                          Za većinu ljudi koji su učestvovali u ispitivanjima (82%) smatralo se da imaju profesionalni rizik od izloženosti, od čega je 25% zdravstvenih radnika.
                        </p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Pfizer" img-src="https://c2.thejournal.ie/media/2021/04/2-57684007-390x285.jpg" img-alt="Image" img-top>
      <b-card-text>
        <p><b>Tehnologija:</b> RNK</p>
        <p><b>Efikasnost:</b> 95% prema studijama, zaštita od teških oblika bolesti 100%</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja završena</p>
        <p><b>Autorizirana:</b> u USA, EU, Kanadi, Švicarskoj i drugi...</p>
        <p><b>Doziranje:</b> 2 doze u razmaku 21 dan</p>
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
                      title="Vakcina Pfizer"
                    > 
                        <p>
                          <b> Opće informacije </b>
                          <b> Naziv: mRNA-1273 </b>

                          <b>Proizvođač: Pfizer, Inc.

                          Tip vakcine: mRNA
                          </b>
                          Broj snimaka: 2 snimka, u razmaku od 21 dan

NE SADRŽI: Jaja, konzervanse, lateks
Kompletna lista sastojaka [PDF - 7 stranica] vanjska ikona

Ko se treba cijepiti
Vakcina Pfizer-BioNTech preporučuje se osobama starijim od 12 godina.
Saznajte više o tome kako CDC daje preporuke za cjepivo COVID-19.
Ko NE SMIJE Vakcinisati
Ako ste imali ozbiljnu alergijsku reakciju (anafilaksiju) ili neposrednu alergijsku reakciju, čak i ako nije bila ozbiljna, na bilo koji sastojak mRNA COVID-19 cjepiva (poput polietilen glikola), ne biste trebali dobiti mRNA COVID-19 vakcina.
Ako ste imali ozbiljnu ili neposrednu alergijsku reakciju nakon dobivanja prve doze mRNA COVID-19 vakcine, ne biste trebali dobiti drugu dozu bilo koje od mRNA COVID-19 vakcina.
Alergijska reakcija smatra se ozbiljnom kada osoba treba liječiti epinefrinom ili EpiPen © -om ili ako mora dobiti medicinsku njegu. Saznajte o uobičajenim nuspojavama COVID-19 cjepiva i kada nazvati liječnika.
Neposredna alergijska reakcija znači reakciju u roku od 4 sata od izlaganja, uključujući simptome poput košnice, otoka ili piskanja (respiratorni poremećaj).
Ako niste u mogućnosti dobiti mRNA COVID-19 cjepivo, možda ćete i dalje moći dobiti drugu vrstu COVID-19 cjepiva. Doznajte više informacija za ljude s alergijama.

Mogući neželjeni efekti
U ruku u kojoj ste dobili metak:

Bol
Crvenilo
Oticanje
U ostatku tijela:

Umor
Glavobolja
Mišićni bol
Jeza
Vrućica
Mučnina
Ovi neželjeni efekti se javljaju u roku od jednog ili dva dana od primanja vakcine. Oni su normalni znakovi da vaše tijelo gradi zaštitu i da bi trebali nestati u roku od nekoliko dana.

Potražite savjete o mogućim neželjenim efektima nakon vakcinisanja covid-19.

Ostala odobrena i preporučena cjepiva COVID-19 u Sjedinjenim Državama
Moderna
Johnson & Johnson's Janssen
Trebali biste dobiti prvo cjepivo protiv COVID-19 koje vam je dostupno. Ne čekajte određenu marku. Sva trenutno odobrena i preporučena cjepiva COVID-19 su sigurna i učinkovita, a CDC ne preporučuje jedno cjepivo nad drugim.

Sažetak sigurnosnih podataka
U kliničkim ispitivanjima, simptomi reaktogenosti (nuspojave koje se javljaju u roku od 7 dana od cijepljenja) bili su česti, ali uglavnom su bili blagi do umjereni.
Nuspojave (poput vrućice, mrzlice, umora i glavobolje) u cijelom tijelu bile su češće nakon druge doze vakcine.
Većina nuspojava bila je blaga do umjerena. Relativno malo ljudi imalo je reakcije koje su utjecale na njihovu sposobnost obavljanja svakodnevnih aktivnosti.
CDC će nastaviti pružati ažuriranja dok saznajemo više o sigurnosti cjepiva Pfizer-BioNTech u stvarnim uvjetima.
Saznajte više o praćenju sigurnosti vakcine nakon što je vakcina odobrena ili odobrena za upotrebu.

Koliko dobro djeluje vakcina
Na osnovu dokaza iz kliničkih ispitivanja kod ljudi starijih od 16 godina i više, vakcina Pfizer-BioNTech bila je 95% efikasna u prevenciji laboratorijski potvrđene bolesti COVID-19 kod ljudi bez dokaza o prethodnoj infekciji.
U kliničkim ispitivanjima, vakcina Pfizer-BioNTech bila je takođe visoko efikasna u prevenciji laboratorijski potvrđene bolesti COVID-19 kod adolescenata u dobi od 12 do 15 godina, a imunološki odgovor kod ljudi u dobi od 12 do 15 godina bio je najmanje jednako jak kao i imuni odgovor kod ljudi starih 16-25 godina.
CDC će nastaviti pružati ažuriranja dok saznajemo više o tome koliko dobro djeluje cjepivo Pfizer-BioNTech u stvarnim uvjetima.
Demografske informacije o kliničkom ispitivanju
Klinička ispitivanja cjepiva Pfizer-BioNTech na osobama starijim od 16 godina uključivale su ljude iz sljedećih rasnih i etničkih, dobnih i spolnih kategorija:

Race

82% bijela
10% Afroamerikanaca
4% azijski
3% ostalih rasa, multirasa ili rasa nije prijavljeno
1% domaći havajski ili drugi pacifički otočanin
1% Američki Indijanac ili Aljaska
Etnicitet

73% nisu latinoamerikanci
26% latinoamerikanca
1% nije prijavljeno
Seks

51% muškaraca
49% žena
Dob

58% od 16 do 55 godina
42% 55 godina i više
21% 65 godina i više
4% 75 godina i više
Najčešća osnovna medicinska stanja bila su gojaznost (35%), dijabetes (8%) i plućne bolesti (8%).

Klinička ispitivanja cjepiva Pfizer-BioNTech na ljudima u dobi od 12 do 15 godina obuhvatila su ljude iz sljedećih rasnih, etničkih i spolnih kategorija:

Race

86% bijela
5% Afroamerikanaca
6% azijski
3% druge rase, multirase ili rase nije prijavljeno
1% domaći havajski ili drugi pacifički otočanin
1% Američki Indijanac ili Aljaska
Etnicitet

88% nije Latinoamerikanac
12% latinoamerikanca
1% nije prijavljeno
Seks

51% muškaraca
49% žena
Saznajte više o demografskim informacijama za ljude koji su sudjelovali u ispitivanjima:

Star 16 godina i stara ikona
U dobi od 12 do 15 godina vanjska ikona
                          </p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="AstreZeneca" img-src="https://img2.thejournal.ie/article/5464218/listing/?width=600&version=5464231" img-alt="Image" img-top>
      <b-card-text>
        <p><b>Tehnologija:</b> adenovirusni vektor</p>
        <p><b>Efikasnost:</b> 62% prema studijama, zaštita od teških oblika bolesti 100%</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja završena</p>
        <p><b>Autorizirana:</b> u UK, EU, Indiji, Argentini i drugi...</p>
        <p><b>Doziranje:</b> 2 doze u razmaku od 4 sedmice</p>      </b-card-text>
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
                      title="Vakcina AstreZeneca"
                    >
                    <p>
                                      <b>Kako djeluje vakcina Oxford-AstraZeneca?
                Napravljen je od oslabljene verzije virusa prehlade (poznatog kao adenovirus) od šimpanza. Izmijenjen je tako da sadrži genetski materijal koji dijeli koronavirus - iako ne može uzrokovati bolest.
                </b>
                Jednom ubrizgan, podučava imunološki sistem tijela kako se boriti protiv pravog virusa.

                Kako znamo da su Covid cjepiva sigurna?
                Kako se uspoređuju Covid vakcine?
                Grafikon: Kako djeluje vakcina Oxford
                Da li vakcina štiti od novih varijanti?
                Stručnjaci proučavaju sva trenutna cjepiva protiv koronavirusa kako bi provjerili koliko dobro djeluju protiv novih, mutiranih verzija virusa.

                Vladin zamjenik glavnog medicinskog službenika Jonathan Van Tam kaže da postoji "puno dokaza" da se čini da su vakcine efikasne protiv varijante Kenta koja je dominantna u Velikoj Britaniji.

                Manje je dokaza o zaštiti od drugih varijanti, poput onih identificiranih u Brazilu i Južnoj Africi.

                Međutim, studija na oko 2.000 ljudi sugerira, dok cjepivo Oxford-AstraZeneca može ponuditi ograničeniju zaštitu protiv blage i umjerene bolesti uzrokovane južnoafričkom varijantom. i dalje treba štititi od teške bolesti.
                    </p>
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
        <p><b>Tehnologija:</b> adenovirusni vektor</p>
        <p><b>Efikasnost:</b> 91.6% prema studijama, zaštita od teških oblika bolesti 100%</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja završena</p>
        <p><b>Autorizirana:</b> u Rusiji, Argentini, Srbiji i drugi...</p>
        <p><b>Doziranje:</b> 2 doze u razmaku od 3 sedmice </p>
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
                      title="Vakcina Sputnik V"
                    >
                    <p>
                     <b> Sputnik V (ruski: Sputnik V) je adenovirusno virusno vektorsko cjepivo protiv COVID-19, koje je razvio Istraživački institut za epidemiologiju i mikrobiologiju Gamaleya. Registrirano je 11. avgusta 2020. od strane Ministarstva zdravlja Rusije kao Gam-COVID-Vac (ruski: Gam-KOVID-Vak, romanizirano: Gam-KOVID-Vak). "V" u njegovom imenu znači "Pobjeda nad COVID-19" prema Kirillu Dmitrievu, izvršnom direktoru Ruskog fonda za direktna ulaganja.
                       </b>
                            Gam-COVID-Vac prvobitno je odobren za distribuciju u Rusiji, a zatim i u 59 drugih zemalja (od aprila 2021.) na preliminarnim rezultatima studija faze I – II na kraju objavljenim 4. septembra 2020. Odobrenje početkom avgusta kompanije Gam-COVID- Vac je naišao na kritike medija u masovnim medijima i rasprave u znanstvenoj zajednici da li je odobrenje opravdano u odsustvu snažnih znanstvenih istraživanja koja potvrđuju sigurnost i djelotvornost. 2. februara 2021. u The Lancet objavljena je privremena analiza iz ispitivanja, koja ukazuje na 91,6% efikasnosti bez neobičnih nuspojava.

                        Hitna masovna distribucija vakcine započela je u decembru 2020. u zemljama uključujući Rusiju, Argentinu, Bjelorusiju, Mađarsku, Srbiju i Ujedinjene Arapske Emirate. Do februara 2021. preko milijarde doza vakcine naručena je za trenutnu distribuciju širom svijeta.
                    </p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Sinopharm" img-src="https://cdnuploads.aa.com.tr/uploads/Contents/2021/05/27/thumbs_b_c_8517db6f24692a86230fd94adabc0ff7.jpg?v=175407" img-alt="Image" img-top>
      <b-card-text>
        <p><b>Tehnologija:</b> inaktivirani virus</p>
        <p><b>Efikasnost:</b> 79.3% podaci nisu zvanično objavljeni u naučnoj literaturi</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja</p>
        <p><b>Autorizirana:</b> u Kini, UAE, Egiptu, Srbiji i drugi...</p>
        <p><b>Doziranje:</b> 2 doze u razmaku od 3 sedmice </p>
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
                      title="Vakcina Sinopharm"
                    >
                    <p>
                      <b>
                       Sinopharm COVID-19 vakcina, jedno je od dva inaktivirana virusna COVID-19 cjepiva koja je razvio Sinopharmov Pekinški institut za biološke proizvode. Završila je ispitivanja faze III u Argentini, Bahreinu, Egiptu, Maroku, Pakistanu, Peruu i Ujedinjenim Arapskim Emiratima (UAE) sa preko 60 000 učesnika. BBIBP-CorV dijeli sličnu tehnologiju sa CoronaVac-om i Covaxinom, drugim inaktiviranim virusnim cjepivima protiv COVID-19.  Naziv proizvoda je SARS-CoV-2 vakcina (Vero Cell), a ne bi ga trebalo zamijeniti sa sličnim nazivom proizvoda CoronaVac. 
                      </b>
                      Recenzirani rezultati objavljeni u JAMA ispitivanjima faze III u Ujedinjenim Arapskim Emiratima i Bahreinu pokazali su da je BBIBP-CorV 78,1% efikasan protiv simptomatskih slučajeva i 100% protiv teških slučajeva (21 slučaj u cijepljenoj grupi naspram 95 slučajeva u placebo grupi). [9 ] U decembru 2020. UAE su prethodno objavili privremene rezultate koji pokazuju učinkovitost od 86%.

                      Iako su mRNA vakcine poput vakcine Pfizer – BioNTech COVID-19 i Moderna COVID-19 pokazale veću efikasnost od preko 90%, one predstavljaju izazov distribucije za neke nacije jer im trebaju postrojenja za duboko zamrzavanje i kamioni. BIBP-CorV se mogao transportirati i skladištiti na normalnim hladnjačama.

                      BBIBP-CorV se koristi u kampanjama vakcinacije u određenim zemljama Azije,  Afrike, Južne Amerike,  i Evrope. Sinopharm očekuje da će proizvesti milijardu doza BBIBP-CorV 2021. godine.  Do maja, Sinopharm je isporučio 200 miliona doza.

                      Svjetska zdravstvena organizacija odobrila je vakcinu za upotrebu u COVAX-u 7. maja 2021.

                      Druga inaktivirana virusna vakcina koju je razvio Sinopharm je WIBP-CorV.
                    </p>
                    </b-modal>
                  </td>
        </small>
      </template>
    </b-card>

    <b-card title="Johnson&Johnson(Jenssen)" img-src="https://s.france24.com/media/display/e6eab602-ac1d-11eb-acc7-005056a964fe/w:400/p:3x2/000_9927ZZ.jpg" img-alt="Image" img-top>
      <b-card-text>
        <p><b>Tehnologija:</b> adenovirusni vektor</p>
        <p><b>Efikasnost:</b> 57-72% (mala efikasnost na južnoafrički soj), efikasnost protiv teških oblika bolesti 100%</p>
        <p><b>Klinička ispitivanja:</b> faza 3 klinička ispitivanja</p>
        <p><b>Autorizirana:</b> u Kini, UAE, Egiptu, Srbiji i drugi...</p>
        <p><b>Doziranje:</b> 1 doze,testira se i kombinacija sa 2 doze </p>
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
                      title="Vakcina Johnson&Johnson(Jenssen)"
                    >
                    <p>

                     <b> Opće Informacije</b>
<b>Ime: JNJ-78436735</b>
<b>
Proizvodi: Janssen Pharmaceuticals Companies of Johnson & Johnson
</b>
Tip cjepiva: virusni vektor
Broj hitaca: 1 hitac
Kako dato: Pucanj u nadlakticu
NE SADRŽI: Jaja, konzervanse, lateks
Kompletna lista sastojaka [242 KB, 7 stranica] vanjska ikona

Ko treba vakcinisati
Vakcina J & J / Janssen COVID-19 preporučuje se osobama starijim od 18 godina.
Saznajte više o tome kako CDC daje preporuke za COVID-19.
Koji NE SMIJU biti cijepljeni
Ako ste imali ozbiljnu alergijsku reakciju (anafilaksiju) ili neposrednu alergijsku reakciju - čak i ako nije bila ozbiljna - na bilo koju vanjsku ikonu u J & J / Janssen COVID-19 (kao što je polisorbat), ne biste trebali dobiti J&J / Janssen Covid19 vakcina.
Ozbiljna alergijska reakcija je ona koju treba liječiti epinefrinom ili EpiPen © ili medicinskom njegom. Saznajte o uobičajenim neželjenim efektima COVID-19 cjepiva i kada nazvati liječnika.
                          Neposredna alergijska reakcija znači reakciju u roku od 4 sata nakon izlaganja, uključujući simptome poput košnice, otoka ili piskanja (respiratorni poremećaj).
                          Ako ne možete dobiti J&J / Janssen COVID-19 cjepivo, možda ćete i dalje moći dobiti drugu vrstu COVID-19 cjepiva. Saznajte više informacija za osobe s alergijama.

                          Moguće nuspojave
                          U ruci u koju ste primili metak:

                          Bol
                          Crvenilo
                          Oticanje
                          U ostatku tijela:

                          Umor
                          Glavobolja
                          Mišićni bol
                          Bes
                          Vrućica
                          Mučnina
                          Ovi neželjeni efekti se javljaju u roku od jednog ili dva dana od primanja vakcine. Oni su normalni znakovi da vaše tijelo gradi zaštitu i da bi trebali nestati u roku od nekoliko dana.

                          Nesvjestica nakon vakcinacije
                          Nesvjestica (sinkopa) i drugi događaji koji mogu biti povezani s anksioznošću, poput ubrzanog disanja, niskog krvnog pritiska, utrnulosti ili trnaca mogu se javiti nakon uzimanja bilo koje vakcine. Iako neobični, ovi događaji nisu neočekivani i uglavnom nisu ozbiljni.

                          Prema informacijama iz sistema za prijavljivanje neželjenih događaja vakcine (VAERS), zabilježena su 653 izvještaja o onesviještenosti (nesvjestici i nesvjesti) među gotovo 8 miliona doza cjepiva J&J / Janssen COVID-19 primijenjenih u Sjedinjenim Državama u ožujku i aprilu 2021. godine. znači da stopa otprilike 8 nesvjestica ide na svakih 100 000 primijenjenih cjepiva J&J / Janssen COVID-19. Ovi događaji dogodili su se tokom preporučenog 15-minutnog čekanja nakon cijepljenja. Trenutno nije jasno jesu li ti događaji povezani s cjepivom ili anksioznošću, što može biti povezano s već postojećim problemima nekih ljudi koji su odlučili dobiti J&J / Janssen COVID-19 cjepivo o iglama ili injekcijama.

                          Za usporedbu, stopa nesvjestice nakon cijepljenja protiv gripa u periodu 2019–2020. Bilo je 0,05 na 100.000 doza.

                          Saznajte više o mogućim nuspojavama nakon cijepljenja protiv COVID-19.

                          Ostala odobrena i preporučena COVID-19 cjepiva u Sjedinjenim Državama
                          Pfizer-BioNTech
                          Moderno
                          Trebali biste dobiti prvu dostupnu vakcinu protiv COVID-19. Ne čekajte određenu marku. Sva trenutno odobrena i preporučena cjepiva protiv COVID-19 su sigurna i učinkovita, a CDC ne preporučuje jedno cjepivo nad drugim.

                          Sažetak sigurnosnih podataka
                          U kliničkim ispitivanjima, nuspojave su bile česte unutar 7 dana od cijepljenja, ali su uglavnom bile blage do umjerene.
                          Neželjeni efekti bili su češći kod osoba starih 18-59 godina u poređenju sa osobama starijim od 60 godina.
                          Postoji vjerojatna uzročno-posljedična veza između J & J / Janssen COVID-19 i rijetkog i ozbiljnog neželjenog događaja - niskih krvnih ugrušaka trombocita (tromboza sa sindromom trombocitopenije ili TTS).
                          Pojavljuje se stopom od oko 7 na 1 milion vakcinisanih žena u dobi od 18 do 49 godina.
                          Kod žena starijih od 50 godina i muškaraca svih dobnih skupina ovaj je nuspojava još rjeđi.
                          Pronađite najnovije vijesti o J&J / Janssen COVID-19 cjepivu i krvnim ugrušcima s niskim nivoom trombocita.
                          CDC će nastaviti pružati ažuriranja dok saznajemo više o sigurnosti cjepiva J&J / Janssen COVID-19 u stvarnom životu.
                          Saznajte više o praćenju sigurnosti vakcine nakon što je vakcina odobrena ili odobrena za upotrebu.

                          Koliko dobro djeluje vakcina
                          Vakcina J&J / Janssen COVID-19 imala je 66,3% efekata
                    </p>
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
