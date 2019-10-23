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


// function showBreadTextarea() {
//   var selectedobj=document.getElementById('showbread');
 
//    if(selectedobj.className=='hide'){  //check if classname is hide 
//      selectedobj.style.display = "block";
//      selectedobj.className ='show';
//      document.getElementById('bread').style.backgroundColor = 'rgb(238, 195, 85)';
//    }else{
//      selectedobj.style.display = "none";
//      selectedobj.className ='hide';
//      document.getElementById('bread').style.backgroundColor = 'white';
//   }
//  }

//  function showMilkTextarea() {
//   var selectedobj=document.getElementById('showmilk');
 
//    if(selectedobj.className=='hide'){  //check if classname is hide 
//      selectedobj.style.display = "block";
//      selectedobj.className ='show';
//      document.getElementById('milk').style.backgroundColor = 'rgb(238, 195, 85)';
//    }else{
//      selectedobj.style.display = "none";
//      selectedobj.className ='hide';
//      document.getElementById('milk').style.backgroundColor = 'white';
//   }
//  }

//  function showYogurtTextarea() {
//   var selectedobj=document.getElementById('showyogurt');
 
//    if(selectedobj.className=='hide'){  //check if classname is hide 
//      selectedobj.style.display = "block";
//      selectedobj.className ='show';
//      document.getElementById('yogurt').style.backgroundColor = 'rgb(238, 195, 85)';
//    }else{
//      selectedobj.style.display = "none";
//      selectedobj.className ='hide';
//      document.getElementById('yogurt').style.backgroundColor = 'white';
//   }
//  }

//  function showPapersTextarea() {
//   var selectedobj=document.getElementById('showpapers');
 
//    if(selectedobj.className=='hide'){  //check if classname is hide 
//      selectedobj.style.display = "block";
//      selectedobj.className ='show';
//      document.getElementById('papers').style.backgroundColor = 'rgb(238, 195, 85)';
//    }else{
//      selectedobj.style.display = "none";
//      selectedobj.className ='hide';
//      document.getElementById('papers').style.backgroundColor = 'white';
//   }
//  }



  function changeBreadCss() {
   let x=document.getElementById('bread'); 
     x.style.backgroundColor = 'rgb(238, 195, 85)';
     x.style.border = '1px solid black';
     x.style.color = 'black';
     x.style.textDecoration = 'none'; 
  }

  function changeMilkCss() {7
    let y=document.getElementById('milk');
   y.style.backgroundColor = 'rgb(238, 195, 85)';
   y.style.border = '1px solid black';
   y.style.color = 'black';
   y.style.textDecoration = 'none';
  }

  function changeYogurtCss() {7
    let z=document.getElementById('yogurt');
    z.style.backgroundColor = 'rgb(238, 195, 85)';
    z.style.border = '1px solid black';
    z.style.color = 'black';
    z.style.textDecoration = 'none';
  }

  function changePapersCss() {7
    let t=document.getElementById('papers');
    t.style.backgroundColor = 'rgb(238, 195, 85)';
   t.style.border = '1px solid black';
   t.style.color = 'black';
    t.style.textDecoration = 'none';
  }