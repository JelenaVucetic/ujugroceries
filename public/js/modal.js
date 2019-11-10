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
  document.body.style.overflow = 'hidden';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.classList.add('slideOutDown');
 //modal.style.display = "none";
 //document.getElementById('myNav').style.display = "block";
 document.body.style.overflow = 'auto';
  setTimeout(function(){
    document.getElementById('myNav').style.display = "block";
   }, 1000);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    setTimeout(function(){
      document.getElementById('myNav').style.display = "block";
      document.body.style.overflow = 'auto';
     }, 1000);
    modal.classList.add('slideOutDown'); 
  }
}

function change() {
  if( document.getElementById("choosedTime").value == 6) {
    document.getElementById("autofill").value = "7.00h";
     }
     if( document.getElementById("choosedTime").value == 7) {
      document.getElementById("autofill").value = "8.00h";
       }
       if( document.getElementById("choosedTime").value == 10) {
        document.getElementById("autofill").value = "11.00h";
         }
  if( document.getElementById("choosedTime").value == 9) {
   document.getElementById("autofill").value = "10.00h";
    }
if( document.getElementById("choosedTime").value == 8) {
  document.getElementById("autofill").value = "9.00h";
    }
    if( document.getElementById("choosedTime").value == 11) {
    document.getElementById("autofill").value = "12.00h";
      }
}

  function changeBreadCss() {
   let x=document.getElementById('bread'); 
     x.style.backgroundColor = '#e74b37';
     x.style.color = 'white';
     x.style.textDecoration = 'none'; 
  }

  function changeMilkCss() {
    let y=document.getElementById('milk');
   y.style.backgroundColor = '#e74b37';
   y.style.color = 'white';
   y.style.textDecoration = 'none';
  }

  function changeYogurtCss() {7
    let z=document.getElementById('yogurt');
    z.style.backgroundColor = '#e74b37';
    z.style.color = 'white';
    z.style.textDecoration = 'none';
  }

  function changePapersCss() {7
    let t=document.getElementById('papers');
    t.style.backgroundColor = '#e74b37';
   t.style.color = 'white';
    t.style.textDecoration = 'none';
  }


