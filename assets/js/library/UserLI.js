window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function due(){
  var due=document.getElementById("due");
  due.style.border = "1px solid black";

}
function add(){
  
  var add=document.getElementById("add");
  add.style.border = "1px solid black";
}
function mani(){
  
  var mani=document.getElementById("manipulate");
  mani.style.border = "1px solid black";
  }



