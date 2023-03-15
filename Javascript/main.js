
let modal = document.getElementById("myModal");


let button = document.getElementById("popup");


let span = document.getElementsByClassName("close")[0];


popup.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}










































