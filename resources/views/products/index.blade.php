@extends('layouts.master')

@section('content')   
    <div class="jumbotron text-center myHeader" style="margin-bottom:0">
        <h1>MI DOSTAVLJAMO NAMIRNICE KOJE VAM SVAKOG JUTRA TREBAJU</h1>
        <p>Hljeb, mlijeko, jogurt i/ili novine</p> 
        <button>UJU PAKETI</button>
        <div class="info">
            <p>06-12h DOSTAVA</p>
            <p>ONLINE/TEL. PORUČIVANJE</p>
            <p>UŠTEDA VREMENA</p>
            <p>DOSTAVA NA VRIJEME</p>
        </div>
    </div>
        <div>
           
            <div class="products">
                @foreach ($products as $product)
                <div>
                    <a href="/products/{{ $product->id }}"> <h2>{{ $product-> name}}</h2> </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
