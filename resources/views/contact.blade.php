@extends('layouts.master')

@section('content')

    <div class="jumbotron contactHeader">
        <h1>KONTAKT</h1>
    </div>

    <div class="aboutContact">
        <div class="contactPhone">
            <h2>TELEFON</h2>
            <p>069 251 455</p>
        </div>
        <div class="contactEmail">
            <h2>Email</h2>
            <p>poruci@ujudelivery.me</p>
        </div>
    </div>

    <form class="contactForm" action="">
       
            <h4>Kontaktirajte nas</h4>
            <div class="contactInput">
                <input type="text" placeholder="Ime i Prezime">
                <input type="email" placeholder="E-mail">
            </div>
        
            <textarea name="" id="" cols="30" rows="10" placeholder="Vaša Poruka"></textarea>
            <button id="contactBtn">Pošalji poruku</button>
    </form>
@endsection