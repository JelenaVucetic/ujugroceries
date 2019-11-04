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
        <div classqpresija i obaveza, prepustite se tom danu i uzmite ga samo za sebe!
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
            <img src="/images/Bread.png" alt="">
            <p>Da li volite kada vas ujutru na stolu za doručak dočeka topao, svjež hljeb?</p>
        </div>
        <div>
            <h3>Mlijeko</h3>
            <img src="/images/Milk.png" alt="">
            <p>Ne dozvolite sebi da Vi ili vaša djeca ostanete bez mlijeka za doručak.</p>
        </div>
        <div>
            <h3>Jogurt</h3>
            <img src="/images/yogurt.png" alt="">
            <p>Za sve one kojima jogurt predstavlja primarno piće uz jutanje obroke.</p>
        </div>
        <div>
            <h3>Novine</h3>
            <img src="/images/Novine.png" alt="">
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
                <img src="/images/" alt="">
                <p>Uskoro više detalja.</p>
            </div>
            <div>
                <h3>Keksići</h3>
                <img src="/images/" alt="">
                <p>Uskoro više detalja.</p>
            </div>
            <div>
                <h3>Uskoro još</h3>
                <img src="/images/" alt="">
                <p>Uskoro više detalja.</p>
            </div>
            <div>
                <h3>Uskoro još</h3>
                <img src="/images/" alt="">
                <p>Uskoro više detalja.</p>
            </div>
        </div>

@endsection

@section('modal1js')
    <script src="/js/modal1.js" defer></script>
@endsection