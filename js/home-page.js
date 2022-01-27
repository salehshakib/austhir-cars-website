var navBar = document.getElementById('nav-bar');
var hamBurger = document.getElementById('nav-hamburger-button');

var navItems = document.getElementsByClassName('austhir-nav-link');

console.log(navItems);

hamBurger.onclick = function(){

    navBar.classList.toggle('nav-bg'); 
}