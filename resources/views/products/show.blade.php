@extends('layouts.master')

@section('content')
    <div style="margin:200px;">
        <h1>{{ $product->name }}</h1>  
        <h2>{{ $product->description }}</h2>  
    </div>    
@endsection