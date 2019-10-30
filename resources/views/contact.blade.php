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

    <div class="container box">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss='alert'>x</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(session('succes_message')))
        <div class="alert alert-success alert-block">
            {{ session('succes_message') }}
        </div> 
        @endif
    </div>

    <form class="contactForm" method="post" action="/send-email">
       @csrf
            <h4>Kontaktirajte nas</h4>
            <div class="contactInput">
                <input type="text" name="name" placeholder="Ime i Prezime" required>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
        
            <textarea name="message" id="" cols="30" rows="10" placeholder="Vaša Poruka" required></textarea>
            <button id="contactBtn" type="submit">Pošalji poruku</button>
    </form>
@endsection