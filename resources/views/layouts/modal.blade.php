<div id="myModal" class="mymodal animated slideInUp">
     <!-- Modal content -->
     <div class="modal-content">
        <span class="close">&times;</span>

        <img src="/images/Logo_sideways.svg" alt="logo">
        <h3>1.Odaberite željene namirnice za dostavu</h3>

        <form action="">
            <div class="myForm">
                        {{--   <div class="left">
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
                        </div> --}}


        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button onclick="changeBreadCss()" id="bread" class="btn btn-link mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Hljeb 
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                 <textarea name="" id="" cols="4" placeholder="Unesite željenu/e vrste hljeba."></textarea>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button  onclick="changeMilkCss()" id="milk" class="btn btn-link collapsed mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Mlijeko
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <textarea name="" id="" cols="4" placeholder="Unesite željenu/e vrste mlijeka."></textarea>  
                </div>
               </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button onclick="changeYogurtCss()" id="yogurt" class="btn btn-link collapsed mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Jogurt
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <textarea name="" id="" cols="4" placeholder="Unesite željenu vrstu jogurta (Proizvođač, masnoća...)"></textarea> 
                </div>              
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button onclick="changePapersCss()" id="papers" class="btn btn-link collapsed mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      Novine
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                      <textarea name="" id="" cols="4" placeholder="Unesite željenu/e novine."></textarea>      
                  </div>         
                </div>
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
                <div class="ordertime">
                    <div>
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
                    </div>
                    <div>
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
                </div>
                  
                </div>
                <button class="modalbtn">Naruči</button>
                <p>***Cijena namirnica su za 10% visočije u odnosu na cijnu u marketima.</p>
                <p>***U slučaju ne dostavljanja namirnica na vrijeme , nijeste dužni da platite iste.</p>
            </div>
        </div>
           
        </form>
    </div>
    
</div>
