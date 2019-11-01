@extends('layouts.master')
@section('modal1css')
    <link rel="stylesheet" href="/css/modal1.css">
@endsection

@section('content')
<div class="servicesTitle">
    <h1>UJU nudi dostavu osnovnih namirnica na vratima vašeg doma</h1>
    <p>Kroz odabir unaprijed kreiranih mjesečnih paketa ili porudžbinu pojedinačnih namirnica.</p>
</div>
<div class="jumbotron groceriesHeader"> </div>

<div class="groceriesTitle">
        <p>UJU dostava namirnica je namjenjena svima vama koji želite hljeb, mlijeko, jogurt ili novine na ulaznim
            vratima vašeg doma u jutarnjim časovima. Jasno nam je da se danas, u veoma brzom i živahnom stilu života, dešava 
            da zanemarujete jako bitne stvari koje direktno utiču na vaše zdravlje i zdravlje vaših porodica.
            Ukoliko ujutru radite, često imate mnogo obaveza i jednostavno bi vam vrijeme ušteđeno na odlazak do prodavnice
            i nazad mnogo značilo, prepustite taj dio nama, a vi samo navedite vrijeme kad i koje namirnice želite dostavljene direktno 
            na vašu adresu.
        </p>
        <h1>UVIJEK SVJEŽE</h1>
    </div>
    <div class="products">
        <div>
            <img src="/images/Bread.png" alt="">
            <h3>Hljeb</h3>
            <p> Na čekautu možete navesti koji hljeb želite.</p>
        </div>
        <div>
            <img src="/images/Milk.png" alt="">
            <h3>Mlijeko</h3>
            <p>Na čekautu možete navesti proizvođača i masnoću mlijeka.</p>
        </div>
        <div>
            <img src="/images/yogurt.png" alt="">
            <h3>Jogurt</h3>
            <p>Na čekautu možete navesti koji jogurt želite.</p>
        </div>
        <div>
            <img src="/images/Novine.png" alt="">
            <h3>Novine</h3>
            <p>Na čekautu možete navesti koje novine želite.</p>
        </div>
    </div>
    
    <div class="ordering">
        <button id="groceriesBtn"> NARUČI ŽELJENE NAMIRNICE</button>
        <p>...i ujutru će biti dostavljene na vratima vašeg doma.</p>
    </div>
    @include('layouts.modal1')

@endsection

@section('modal1js')
    <script src="/js/modal1.js" defer></script>
@endsection