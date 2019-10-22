@extends('layouts.master')

@section('modalcss')
    <link rel="stylesheet" href="/css/modal.css">
@endsection

@section('content')   
    <div class="jumbotron text-center myHeader" style="margin-bottom:0">
        <h1>MI DOSTAVLJAMO NAMIRNICE  <br>   KOJE VAM SVAKOG JUTRA TREBAJU</h1>
        <p>Hljeb, mlijeko, jogurt i/ili novine</p> 
        <button id="ujupaketi">UJU PAKETI</button>
        <div class="info">
            <p>06-12h DOSTAVA</p>
            <p>ONLINE/TEL. PORUČIVANJE</p>
            <p>UŠTEDA VREMENA</p>
            <p>DOSTAVA NA VRIJEME</p>
        </div>
    </div>
        <div>
            <div class="title">
                <h1>IZABERITE <span>HLJEB, MLIJEKO, JOGURT I/ILI NOVINE</span></h1>
                <p>Po vašoj želji, a ponudu pogledajte ispod.</p>
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
                <button id="myBtn"> NARUČI ŽELJENE NAMIRNICE</button>
                <p>...i ujutru će biti dostavljene na vratima vašeg doma.</p>
            </div>

            @include('layouts.modal')
                
  
            <div class="jumbotron">
                <div class="aboutuju">
                    <h2>KAKO UJU FUNKCIONIŠE?</h2>      
                    <p>Pratite sledeće korake</p>
                </div>
                <div class="steps">
                    <div class="part">
                        <img src="/images/Ikonice-02 copy.svg" alt="img">
                        <div>1</div>
                        <p>Izaberite željeni <br> paket usluga</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-01 copy.svg" alt="">
                        <div>2</div>
                        <p>Pošaljite zahtjev <br> za željeni paket</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-03 copy.svg" alt="">
                        <div>3</div>
                        <p>Odaberite vrijeme kada <br> želite da izvršimo dostavu</p>
                    </div>
                    <div class="part">
                        <img src="/images/Ikonice-04 copy.svg" alt="">
                        <div>4</div>
                        <p>Namirnice su na putu <br>  ka vama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modaljs')
    <script src="/js/modal.js" defer></script>
@endsection