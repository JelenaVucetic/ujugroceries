<div id="myGroceriesModal" class="myGroceriesmodal animated slideInUp">
        <!-- Modal content -->
        <div class="modal-content">
           <span class="close">&times;</span>
   
           <img src="/images/Logo_sideways.svg" alt="logo">
           <h3>1.Odaberite željene namirnice za dostavu</h3>


           
        <div class="container box">
            {{-- @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss='alert'>x</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
    
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss='alert'>x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
  
   
        <form  method="post" action="/send-order-groceries-email">
            @csrf
          <div class="myForm">
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
                  <input name="name1" type="text" placeholder="Ime i Prezime" required>
                  <input name="phone1" type="text" placeholder="Broj telefona">
              </div>

              <div>
                  <input name="adress1" type="text" placeholder="Adresa">
                  <input name="email1" type="text" placeholder="E-Mail">
              </div>

              <div class="time">
              <label for="time">Željeno vrijeme dostave: </label>
              <div class="ordertime">
                  <div>
                    <span>OD: </span>
                    <select id="choosedTime" name="time1"  onclick="change()">
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
                          <input type="text" id="autofill" name="autoTime1">
                  </div>
              </div>
                
              </div>
              <button class="modalbtn" type="submit">Naruči</button>
              <p>***Cijena namirnica su za 10% visočije u odnosu na cijnu u marketima.</p>
              <p>***U slučaju ne dostavljanja namirnica na vrijeme , nijeste dužni da platite iste.</p>
          </div>
      </div>              
    </form>
  </div>       
</div>
   