@extends('layouts.master')

@section('modalcss')
    <link rel="stylesheet" href="/css/modal.css">
@endsection

@section('content')   
    <div class="jumbotron text-center myHeader" style="margin-bottom:0">
        <h1  class="animated fadeIn">MI DOSTAVLJAMO NAMIRNICE  <br>   KOJE VAM SVAKOG JUTRA TREBAJU</h1>
        <p>Hljeb, mlijeko, jogurt i/ili novine</p> 
        <div class="buttons">
            <button id="ujupaketi">UJU paketi namirnica</button>
            <button>Pojedinačne namirnice</button>
        </div>
        <div class="info">
            <p>06-12h DOSTAVA</p>
            <p>ONLINE/TEL. PORUČIVANJE</p>
            <p>UŠTEDA VREMENA</p>
            <p>DOSTAVA NA VRIJEME</p>
        </div>
    </div>
        <div class="main">
            <div class="title">
                <h1>IZABERITE <span>HLJEB, MLIJEKO, JOGURT I/ILI NOVINE</span></h1>
                <p>Po vašoj želji, a ponudu pogledajte ispod.</p>
            </div>

            <h1 style="text-align: center">Pojedinačne namirnice</h1>
            <div class="products">
                <div id="test">
                    <h3 >Hljeb</h3>
                    <img src="/images/85.jpg" alt="">
                    <p>Da li volite kada vas ujutru na stolu za doručak dočeka topao, svjež hljeb?</p>
                </div>
                <div id="test1">
                    <h3>Mlijeko</h3>
                    <img src="/images/89.jpg" alt="">
                    <p>Ne dozvolite sebi da Vi ili vaša djeca ostanete bez mlijeka za doručak.</p>
                </div>
                <div  id="test2">
                    <h3>Jogurt</h3>
                    <img src="/images/364.jpg" alt="">
                    <p>Za sve one kojima jogurt predstavlja primarno piće uz jutanje obroke.</p>
                </div>
                <div  id="test3">
                    <h3>Novine</h3>
                    <img src="/images/145.jpg" alt="">
                    <p>Budite u toku sa svakodnevnim vijestima čak i kada je toliko hladno ili pada kiša, da vam se ne izlazi do prodavnice.</p>
                </div>

            </div>

            <h1 style="text-align: center">Namirnice za pse</h1>
             <div class="petProducts" style="background: none; margin-top: -50px; ">
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
            
            <h1 style="text-align: center; padding-top:100px;">Paketi</h1>
            <div class="products">
                <div  style="background: #4b9f48;">
                    <h3 style="color:white;">Paket 1</h3>
                    <img src="/images/Uskoro.jpg" alt="">
                    <p style="color:white;">Uskoro više detalja.</p>
                </div>
                <div  style="background: #4b9f48; color:white">
                    <h3 style="color:white;">Paket 2</h3>
                    <img src="/images/Uskoro.jpg" alt="">
                    <p style="color:white;" >Uskoro više detalja.</p>
                </div>
            </div>
        
            
            <div class="ordering">
               <button id="myBtn"> Naruči namirnice po želji</button>
                <p>Ujutru će biti dostavljene na vratima vašeg doma.</p>
            </div>

            @include('layouts.modal')
                
  
            <div class="jumbotron about">
                <div class="aboutuju">
                    <h1>KAKO UJU FUNKCIONIŠE?</h1>      
                    <p>Pratite sledeće korake</p>
                </div>
                <div class="steps">
                    <div class="part">
                        <img src="/images/Ikonice-02 copy.svg" alt="img">
                        <p>Izaberite željene namirnice ili ukoliko želite uštedjeti novac, možete odabrati svoj mjesečni paket namirncia.</p>
                        <p>(Npr. paket "Dostava Nedeljom".)</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-01 copy.svg" alt="">
                        <p>Nakon što ste izabrali željenu uslugu, ispunite obilježena polja za dodatne želje, ukoliko ih ima.</p>
                        <p>(Npr.Želim mlijeko od 2.8% masnoće)</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-03 copy.svg" alt="">
                        <p>Odaberite željeno vrijeme dostave u jutarnjim časovima. Vaša porudžbina će biti dostavljena u periodu od sat vremena.</p>
                        <p>(Npr.od 7h do 8h)</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-04 copy.svg" alt="">
                       <p>Klikom na dugme "Naruči", vaša porudžbina je kompletna i sledećeg jutra na putu ka vratima vašeg doma.</p>
                        <p>(Hvala što koristite UJU)</p>
                    </div>
                </div>
            </div>
    </div>

    <div class="whyus">
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
@endsection

@section('modaljs')
    <script src="/js/modal.js"></script>
@endsection