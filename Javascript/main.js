
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




let myButton = document.getElementById("popuptweede");
let myPopup = document.getElementById("myPopup");
let close = document.getElementsByClassName("close")[0];

myButton.addEventListener("click", function() {
  myPopup.style.display = "block";
});

close.addEventListener("click", function() {
  myPopup.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target == myPopup) {
    myPopup.style.display = "none";
  }
});

















