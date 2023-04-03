
let modal = document.getElementById("myModal");


let button = document.getElementById("popup");


let span = document.getElementsByClassName("close")[0];


popup.onclick = function () {
  modal.style.display = "block";
 
}


span.onclick = function () {
 modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
   
  }
}



let modal2 = document.getElementById("myModal2");


let button2 = document.getElementById("popup2");


let span2 = document.getElementsByClassName("close2")[0];


popup2.onclick = function () {
  modal2.style.display = "block";
 
}


span2.onclick = function () {
 modal2.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
   
  }
}
































































