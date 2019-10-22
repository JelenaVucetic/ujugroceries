<div id="myModal" class="mymodal animated slideInUp">
     <!-- Modal content -->
     <div class="modal-content">
        <span class="close">&times;</span>

        <img src="/images/Logo_sideways.svg" alt="logo">
        <h3>1.Odaberite željene namirnice za dostavu</h3>

        <form action="">
            <div class="myForm">
            <div class="left">
                <label id="bread" onclick="showBreadTextarea()" for="bread"> Hljeb</label>
                <textarea name="" rows="4" placeholder="Unesite željenu/e vrste hljeba."
                             id="showbread" style="display:none" class="hide"></textarea>
                <label id="milk" onclick="showMilkTextarea()" for="milk">Mlijeko</label>
                <textarea name="" rows="4" placeholder="Unesite željenu/e vrste mlijeka.
-Proizvođač, masnoća"
                            id="showmilk" style="display:none" class="hide"></textarea>
            </div>

            <div class="right">
                    <label id="yogurt" onclick="showYogurtTextarea()" for="yogurt">Jogurt</label>
                    <textarea name="" rows="4" placeholder="Unesite željenu vrstu jogurta (Proizvođač, masnoća...)"
                                     id="showyogurt" style="display:none" class="hide"></textarea>
                    <label id="papers" onclick="showPapersTextarea()" for="papers">Novine</label>
                    <textarea name="" rows="4" placeholder="Unesite željenu/e novine."
                                     id="showpapers" style="display:none" class="hide"></textarea>
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
                  <span>OD: </span>
                  <select>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                  <span>DO: </span>
                  <select>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <button class="modalbtn">Naruči</button>
                <p>***Cijena namirnica su za 10% visočije u odnosu na cijnu u marketima.</p>
                <p>***U slučaju ne dostavljanja namirnica na vrijeme , nijeste dužni da platite iste.</p>
            </div>
            
            
        </form>
    </div>
    
</div>