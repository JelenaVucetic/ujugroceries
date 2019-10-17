

function openModal(id) {
  let e = document.getElementById('mymodal');
  if(e.style.display == "none") {
    e.style.display = "block";
    document.body.style.backgroundColor = '#666';
    document.getElementById('myNav').style.display = "none";
  }
  else {
    e.style.display = "none";
    document.body.style.backgroundColor = '#fff';
    document.getElementById('myNav').style.display = "block";
  }
}

