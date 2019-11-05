<div id="myModal" class="mymodal animated slideInUp" >
    <!-- Modal content -->
    <div class="modal-content">
       <span class="close">&times;</span>

       <img src="/images/Logo_sideways.svg" alt="logo">
       <h3>Korak br.  1</h3>
       <h4> Odaberite željene namirnice za dostavu</h4>



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


   <form method="post" action="/send-order-email">
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
                <textarea name="breadMessage" id="" cols="4" placeholder="Unesite željenu/e vrste hljeba."></textarea>
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header" id="headingTwo">
               <h2 class="mb-0">
                 <button  onclick="changeMilkCss()" id="milk" class="btn btn-link collapsed mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="">
                   Mlijeko
                 </button>
               </h2>
             </div>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
               <div class="card-body">
                   <textarea name="milkMessage" id="" cols="4" placeholder="Unesite željenu/e vrste mlijeka."></textarea>  
               </div>
              </div>
           </div>
            <div class="card">
             <div class="card-header" id="headingThree">
               <h2 class="mb-0">
                 <button onclick="changeYogurtCss()" id="yogurt" class="btn btn-link collapsed mymodalbtn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style=" background: #ed674a;">
                   Jogurt
                 </button>
               </h2>
             </div>
             <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
               <div class="card-body">
                   <textarea name="yogurtMessage" id="" cols="4" placeholder="Unesite željenu vrstu jogurta (Proizvođač, masnoća...)"></textarea> 
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
                     <textarea name="papersMessage" id="" cols="4" placeholder="Unesite željenu/e novine."></textarea>      
                 </div>         
               </div>
             </div>
       </div> 



           <h3>Korak br.2</h3>
           <h4>Ispunite informacije o dostavi</h4>

           <div class="personalInfo">
               <div>
                   <input name="name" type="text" placeholder="Ime i Prezime" required>
                   <input name="phone" type="text" placeholder="Broj telefona" required>
                   <input name="adress" type="text" placeholder="Adresa" required>
 
               </div>

               <div class="time">
               <label for="time">Željeno vrijeme dostave: </label>
               <div class="ordertime">
                   <div style="display:flex; flex-direction: row;">
                     <span>Od: </span> 
                       <select id="choosedTime" name="time" onclick="change()" required>
                           <option value="6">6.00h</option>
                           <option value="7">7.00h</option>
                           <option value="8">8.00h</option>
                           <option value="9">9.00h</option>
                           <option value="10">10.00h</option>
                           <option value="11">11.00h</option>
                           <option value="12">12.00h</option>
                       </select>
                     </div>
                     <div style="display:flex; flex-direction: row;">
                         <span>Do: </span>
                         <input type="text" id="autofill" name="autoTime" placeholder="7.00h" disabled>
                     </div>
                 </div>

                 <button class="modalbtn" type="submit">Naruči</button>
                 <p>***Cijena dostave iznosi 1&euro;.</p>
                 <p>***U slučaju kašnjena namirnica duže od 45min, nijeste dužni da platite.</p>
                 
               </div>
 
           </div>
       </div>   
   </form>
 </div>
</div>
