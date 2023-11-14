var navbar = document.getElementById('nav_bar');
var list = document.getElementById('nav_list');

window.onscroll = function (event) {
    var scroll = window.pageYOffset;
    if (scroll < 100) {
        navbar.style.backgroundColor = 'black';
        list.style.color = 'white';
    } else if (scroll > 100) {
        navbar.style.backgroundColor = '#dad3c4';
        list.style.color = 'black';
    }
}