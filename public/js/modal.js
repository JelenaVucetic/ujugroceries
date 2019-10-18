// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  document.getElementById('myNav').style.display = "none";
  modal.classList.remove('slideOutDown');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.classList.add('slideOutDown');
 //modal.style.display = "none";
 //document.getElementById('myNav').style.display = "block";

  setTimeout(function(){
    document.getElementById('myNav').style.display = "block";
   }, 1000);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    setTimeout(function(){
      document.getElementById('myNav').style.display = "block";
     }, 1000);
    modal.classList.add('slideOutDown'); 
  }
}


function showBreadTextarea() {
  var selectedobj=document.getElementById('showbread');
 
   if(selectedobj.className=='hide'){  //check if classname is hide 
     selectedobj.style.display = "block";
     selectedobj.className ='show';
   }else{
     selectedobj.style.display = "none";
     selectedobj.className ='hide';
  }
 }

 function showMilkTextarea() {
  var selectedobj=document.getElementById('showmilk');
 
   if(selectedobj.className=='hide'){  //check if classname is hide 
     selectedobj.style.display = "block";
     selectedobj.className ='show';
   }else{
     selectedobj.style.display = "none";
     selectedobj.className ='hide';
  }
 }

 function showYogurtTextarea() {
  var selectedobj=document.getElementById('showyogurt');
 
   if(selectedobj.className=='hide'){  //check if classname is hide 
     selectedobj.style.display = "block";
     selectedobj.className ='show';
   }else{
     selectedobj.style.display = "none";
     selectedobj.className ='hide';
  }
 }

 function showPapersTextarea() {
  var selectedobj=document.getElementById('showpapers');
 
   if(selectedobj.className=='hide'){  //check if classname is hide 
     selectedobj.style.display = "block";
     selectedobj.className ='show';
   }else{
     selectedobj.style.display = "none";
     selectedobj.className ='hide';
  }
 }