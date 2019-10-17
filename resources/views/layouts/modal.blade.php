<div id="mymodal" class="mymodal animated bounceInUp">
     <!-- Modal content -->
     <div class="modal-content">
        <span class="close"  onclick="openModal('mymodal');">&times;</span>
        
        <img src="/images/Logo_sideways.svg" alt="logo">
        <h3>1.Odaberite željene namirnice za dostavu</h3>

        <form action="">
            <div class="myForm">
            <div class="left">
                <input type="text" placeholder="Hljeb">
                <textarea name="" rows="4" placeholder="Unesite željenu/e vrste hljeba."></textarea>
                <input type="text" placeholder="Mlijeko">
                <textarea name="" rows="4" placeholder="Unesite željenu/e vrste mlijeka.
-Proizvođač, masnoća"></textarea>
            </div>

            <div class="right">
                    <input type="text" placeholder="Jogurt">
                    <textarea name="" rows="4" placeholder="Unesite željenu vrstu jogurta (Proizvođač, masnoća...)"></textarea>
                    <input type="text" placeholder="Novine">
                    <textarea name="" rows="4" placeholder="Unesite željenu/e novine."></textarea>
            </div>
        </div>

            <h3>2.Ispunite informacije o dostavi</h3>

            <div class="personalInfo">
                <div>
                    <input type="text" placeholder="Ime i Prezime">
                    <input type="text" placeholder="Broj telefona">
                </div>

                <div>
                    <input type="text" placeholder="Adresa">
                    <input type="text" placeholder="E-Mail">
                </div>

                <div class="time">
                    <label for="time">Željeno vrijeme dostave: </label>
                  <span>OD: </span><input  type="time" value="13:00" step="900">
                  <span>DO: </span><input  type="time" value="13:00" step="900">
                </div>
                <button class="modalbtn">Naruči</button>
                <p>***Cijena namirnica su za 10% visočije u odnosu na cijnu u marketima.</p>
                <p>***U slučaju ne dostavljanja namirnica na vrijeme , nijeste dužni da platite iste.</p>
            </div>
            
            
        </form>
    </div>
    
</div>