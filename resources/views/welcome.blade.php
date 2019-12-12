@extends('layouts.master')

@section('modalcss')
    <link rel="stylesheet" href="/css/modal.css">
@endsection

@section('content')   
    <div class="jumbotron text-center myHeader" style="margin-bottom:0" id="start">
        <h1  class="animated fadeIn">MI DOSTAVLJAMO NAMIRNICE  <br>   KOJE VAM SVAKOG JUTRA TREBAJU</h1>
        <p>Hljeb, mlijeko, jogurt i/ili novine</p> 
            <button id="ujupaketi" class="offerBtn">Pogledajte ponudu</button>
        <div class="info">
            <p>06-12h DOSTAVA</p>
            <p>ONLINE/TEL. PORUČIVANJE</p>
            <p>UŠTEDA VREMENA</p>
            <p>DOSTAVA NA VRIJEME</p>
        </div>
    </div>




        <div class="main" id="main">
            <div class="servicesTitle">
                <h1>UJU nudi dostavu osnovnih namirnica na vratima vašeg doma</h1>
                <p>Kroz odabir unaprijed kreiranih mjesečnih paketa ili porudžbinu pojedinačnih namirnica.</p>
            </div>
            <div class="jumbotron servicesHeader"> 
                <div class="package">
                    <div class="packageLeft">
                        <h4>5 &euro; / Mjesečno</h4>
                        <div style="backround-color: blue;"></div>
                        <h3>UJU NEDELJOM</h3>
                        <p>
                            <span>UJU Nedeljom</span>
                            je paket kojim dobijate dostavu hljeba i mlijeka po vašoj želji u poslednjem danu u sedmici u vrijeme
                            kada vama odgovara do 12h. Želimo da vaša nedelja počne bez presija i obaveza, prepustite se tom danu i 
                            uzmite ga samo za sebe!
                        </p>
                    </div>
                
                    <div class="packageRight">
                        <h4>15 &euro; / Mjesečno</h4>
                        <div style="backround-color: blue;"></div>
                        <h3>UJU BASIC</h3>
                        <p>
                            UJU BASIC
                            je paket kreiran za sve one kojima su hljeb i novine prva stvar koju požele kad se probude.
                            Ne morate se preznojavati na visokim temperaturama, niti kvasiti i smrzavati na kišnim i vjetrovitim
                            danima, samo se pretplatite na <span> UJU Basic </span> i olakšajte sebi život!
                        </p>
                    </div>
                </div>
            </div>
            
                <div class="servicesSingle">
                    <h1>UJU pojedinačne namirnice</h1>
                    <h3>Kroz ovu uslugu vam nudimo da izaberete namirnice koje vama odgovaraju i zakažete vrijeme dostave.</h3>
                    <p>
                        Sve namirnice koje odaberete možete poručiti najkasnije jedan dan prije željenog dana dostave do 22h. U ovom trenutku,
                        možete izabrati hljeb, mlijeko, jogurt i novine, a uskoro očekujte još mnogo više toga!
                    </p> 
                </div>
            
                <div class="servicesProducts">
                    <div>
                        <h3>Hljeb</h3>
                        <img src="/images/85.jpg" alt="">
                        <p>Da li volite kada vas ujutru na stolu za doručak dočeka topao, svjež hljeb?</p>
                    </div>
                    <div>
                        <h3>Mlijeko</h3>
                        <img src="/images/89.jpg" alt="">
                        <p>Ne dozvolite sebi da Vi ili vaša djeca ostanete bez mlijeka za doručak.</p>
                    </div>
                    <div>
                        <h3>Jogurt</h3>
                        <img src="/images/364.jpg" alt="">
                        <p>Za sve one kojima jogurt predstavlja primarno piće uz jutanje obroke.</p>
                    </div>
                    <div>
                        <h3>Novine</h3>
                        <img src="/images/145.jpg" alt="">
                        <p>Budite u toku sa svakodnevnim vijestima čak i kada je toliko hladno ili pada kiša, da vam se ne izlazi do prodavnice.</p>
                    </div>
                </div>
                    
            
            
            
                    <div class="petTitle">
                        <h1>UJU Pet - Namirnice za kućne ljubimce</h1>
                        <h3>Ne smijemo zapostaviti zdravlje niti ishranu nijednog ukućana, tako vam UJU Pet nudi sve što vam je potrebno
                            za vaše najslađe članove domaćinstva.
                        </h3>
                        <p>
                            Sve namirnice koje odaberete možete poručiti najkasnije jedan dan prije željenog dana dostave do 18h. Još informacija
                            o dostupnoj hrani za kućne ljubimce <span>USKORO!</span>
                        </p> 
                    </div>
            
            
                    <div class="petProducts">
                        <div>
                            <h3>Granule</h3>
                            <img src="/images/Granule.jpg" alt="">
                            <p>Uskoro više detalja.</p>
                        </div>
                        <div>
                            <h3>Keksići</h3>
                            <img src="/images/Keksici.jpg" alt="">
                            <p>Uskoro više detalja.</p>
                        </div>
                        <div>
                            <h3>Uskoro još</h3>
                            <img src="/images/Uskoro.jpg" alt="">
                            <p>Uskoro više detalja.</p>
                        </div>
                        <div>
                            <h3>Uskoro još</h3>
                            <img src="/images/Uskoro.jpg" alt="">
                            <p>Uskoro više detalja.</p>
                        </div>
                    </div>
                
        
            
            <div class="ordering">
               <button id="myBtn"> Naruči namirnice po želji</button>
                <p>Ujutru će biti dostavljene na vratima vašeg doma.</p>
            </div>

            @include('layouts.modal')
                
  
            <div class="jumbotron about" id="about">
                <div class="aboutuju">
                    <h1>KAKO UJU FUNKCIONIŠE?</h1>      
                    <p>Pratite sledeće korake, veoma je jednostavno!</p>
                </div>
                <div class="steps">
                    <div class="part" id="test">
                        <img src="/images/Ikonice-02 copy.svg" alt="img">
                        <p>Izaberite željene namirnice ili ukoliko želite uštedjeti novac, možete odabrati svoj mjesečni paket namirncia.</p>
                        <p>(Npr. paket "Dostava Nedeljom".)</p>
                    </div>
                    <span id="span1">........................</span> 
                    <div class="part" id="test1">
                        <img src="/images/Ikonice-01 copy.svg" alt="">
                        <p>Nakon što ste izabrali željenu uslugu, ispunite obilježena polja za dodatne želje, ukoliko ih ima.</p>
                        <p>(Npr.Želim mlijeko od 2.8% masnoće)</p>
                    </div>
                    <span id="span2">........................</span>
                    <div class="part" id="test2">
                        <img src="/images/Ikonice-03 copy.svg" alt="">
                        <p>Odaberite željeno vrijeme dostave u jutarnjim časovima. Vaša porudžbina će biti dostavljena u periodu od sat vremena.</p>
                        <p>(Npr.od 7h do 8h)</p>
                    </div>
                    <span id="span3">........................</span>
                    <div class="part" id="test3">
                        <img src="/images/Ikonice-04 copy.svg" alt="">
                       <p>Klikom na dugme "Naruči", vaša porudžbina je kompletna i sledećeg jutra na putu ka vratima vašeg doma.</p>
                        <p>(Hvala što koristite UJU)</p>
                    </div>
                </div>
            </div>
    </div>

    <div class="whyus" id="whyus">
        <div class="whyusTitle">
            <h1>ZAŠTO NAS LJUDI VOLE?</h1>
            <p>Najpopularniji razlozi</p>
        </div>

        <div class="reasons">  
            <div class="reasonsLeft">
                <div>
                    <img src="/images/RedniBrojevi-01 copy.svg" alt="">
                    <p>Zato što dostavljamo najsvježije namirnice u gradu.</p>
                </div>
                <div>
                    <img src="/images/RedniBrojevi-02 copy.svg" alt="">
                    <p>Zato što garantujemo dostavu vaših namirnica svakog jutra na vrijeme.</p>
                </div>
                <div>
                    <img src="/images/RedniBrojevi-03 copy.svg" alt="">
                    <p>Zato što je kupovina najpotrebniji namirnica preko UJU veb-sajta veoma jednostavna.</p>
                </div>
            </div>

            <div class="reasonsRight">
                <div>
                    <img src="/images/RedniBrojevi-04 copy.svg" alt="">
                    <p>Zato što vam štedimo vrijeme potrošeno na kupovinu namirnica ujutru.</p>
                </div>
                <div>
                    <img src="/images/RedniBrojevi-05 copy.svg" alt="">
                    <p>Zato što možete doručkovati u pidžami, kod kuće i prije posla.</p>
                </div>
                <div style="padding-top: 30px;">
                        <img src="/images/RedniBrojevi-06 copy.svg" alt="">
                    <p>Zato što možemo olakšati osobama koje nijesu u mogućnosti.</p>
                </div>
            </div>
        </div>
    </div>

    

<div class="container coupons coupons1">
        <h1>Osvoji popuste, ne propusti priliku</h1>
        <form action="">
                @csrf
            <div class="formElem">
                <input type="email" placeholder="Vaša Email adresa">
                <button>Prijavi se</button>
                <button>Naruči</button>
            </div>
        </form>
    </div>
    
    <div class="idk">
        <p>Tražite cjenovnik? Paketi dostave namirnica počinju od samo 5 &euro; /mj. <a href="">Pogledaj UJU pakete</a></p>
    </div>


    <div class="questions">
        <h3>Često postavljana pitanja</h3>
        <p>Naučite iz pitanja postavljenih od strane drugih. Sigurni smo da se odgovor na vaše pitanje nalazi upravo tu.</p>

    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingOne1">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0">
                Koje brendove proizvođača UJU dostavlja? <i class="fas fa-plus" ></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
              labore sustainable VHS.
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->
      
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingTwo2">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
              aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0">
                Na koji način pretplate funkcionišu? <i class="fas fa-plus"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
              labore sustainable VHS.
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->
      
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingThree3">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
              aria-expanded="false" aria-controls="collapseThree3">
              <h5 class="mb-0">
               Na koji način je moguće platiti za naručene namirnice? <i class="fas fa-plus"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
              labore sustainable VHS.
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->

         <!-- Accordion card -->
         <div class="card">
      
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFour4">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
                    aria-expanded="false" aria-controls="collapseThree3">
                    <h5 class="mb-0">
                     Da li se dostava naplaćuje dodatno <i class="fas fa-plus"></i>
                    </h5>
                  </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
            
              </div>
              <!-- Accordion card -->
            
               <!-- Accordion card -->
        <div class="card">
      
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFive5">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
                    aria-expanded="false" aria-controls="collapseFive5">
                    <h5 class="mb-0">
                     Šta se dešava kada ima plaćenu pretplatu, a tog mjeseca sam na putovanju? <i class="fas fa-plus"></i>
                    </h5>
                  </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
            
              </div>
              <!-- Accordion card -->
            
      
      </div>
      <!-- Accordion wrapper -->

    </div>



    {{-- Kontakt --}}


  @include('layouts.contact')

@endsection

@section('modaljs')
    <script src="/js/modal.js"></script>
@endsection