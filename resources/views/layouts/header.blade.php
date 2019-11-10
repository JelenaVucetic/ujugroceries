<nav class="navbar navbar-fixed-top" id="myNav">
        <div class="topHeader">
                <div class="meta">
                    <p class="truncate">Pozovite nas</p>
                    <p> <i class="fa fa-phone" aria-hidden="true" style="color:green; font-size: 18px; font-weight: bold; padding-right: 5px;"></i>069 251 455</p>
                </div>
                <div class="topRight">
                  <p>poruci@ujudelivery.me</p>
                  <button>Poruči</button>
                </div>
            </div>
    <div class="container-fluid bottomHeader">
        <span id="span" style="width: 100%;
        height: 5px;
        background: red;
        display: block;"></span>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle mybtn" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="/"> <img class="logo" src="/images/Logo_sideways.svg" alt=""> </a>
      </div>
      <div class="collapse navbar-collapse navbar-right myNav" id="myNavbar">
        <ul class="nav navbar-nav">
          <li {{ (current_page("/")) ? 'id=activeLInk' : '' }}><a href="/">Početna</a></li>
          <li {{ (current_page("usluge")) ? 'id=activeLInk' : '' }}><a href="/usluge">UJU Usluge</a></li>
          <li {{ (current_page("kakoporuciti")) ? 'id=activeLInk' : '' }}><a href="/kakoporuciti">Kako poručiti?</a></li>
          <li {{ (current_page("o-nama")) ? 'id=activeLInk' : '' }}><a href="/o-nama">Zašto UJU?</a></li>
          <li {{ (current_page("kontakt")) ? 'id=activeLInk' : '' }}><a href="/kontakt">Kontakt</a></li>
        </ul>
      </div>
    </div>
    
</nav>

