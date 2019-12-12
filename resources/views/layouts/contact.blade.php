<div class="container box" id="contactForm">
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

    <form method="post" action="/send-email">
       @csrf
       <div class="contactForm">
            <h4>Kontaktirajte nas</h4>
            <p>Za sva pitanja stojimo vam na raspolaganju</p>

            <input type="email" name="email" placeholder="E-mail" required>
        
            <textarea name="message" id="" cols="30" rows="10" placeholder="Vaša Poruka" required></textarea>
            <button id="contactBtn" type="submit">Pošalji poruku</button>
        </div>
    </form> 