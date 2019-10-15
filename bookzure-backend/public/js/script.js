/*
const bookList = {
  book1: { name: "A", date: "2019", author: "a" },
  book2: { name: "B" },
  book3: { name: "C"}
};


*/



//let addToCartBtn = document.getElementsByClassName("");

/*

function addToCart() {




}


var bookList = [

  { name: "A", author:"", img:"2001", price:""},
  { name: "B", author:"", img:"2011"},

  { name: "C", author:"", img:"2008"},
  { name: "D", author:"", img:"2005"},


];


var n = 100;
var sample = new Array();
for (var i = 0; i < n; i++) {

sample.push(new Object());

}

console.log(sample);

function getRandomInt(maxNum) {
  let number;

  number = Math.floor(Math.random() * maxNum);

  return number;
}



 console.log(bookList[getRandomInt(4)].name);

*/







var shoppingList = new Array();



var addCartBtn = document.getElementsByClassName("add-to-product");

//console.log(addProductBtn);


function addToCart() {


  shoppingList.push("");
  console.log()
}



var navToggle = document.getElementsByClassName('nav-toggle')[0];
navToggle.addEventListener('click', toggleNav);



function toggleNav() {

  var  navBottom = document.getElementsByClassName('l-nav--bottom')[0];
  navBottom.classList.toggle('is-open');


}
