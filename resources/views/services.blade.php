@extends('layouts.master')
@section('modal1css')
    <link rel="stylesheet" href="/css/modal1.css">
@endsection

@section('content')
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
            
    
        <div class="servicesOrdering">
            <button id="servicesBtn"> Naručite namirnice po želji</button>
            <p>Ujutru će biti dostavljene na vratima vašeg doma.</p>
        </div>
    @include('layouts.modal1')



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

        <div class="container coupons coupons2">
                <h1 id="serviceCupons">Kada ste poslednji put propustili doručak jer vam je bilo teško poći do prodavnice?</h1>
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

@section('modal1js')
    <script src="/js/modal1.js" defer></script>
@endsection