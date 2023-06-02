let menu = document.querySelector('.catalog');
let hamb = document.querySelector('#hamb');
let menuBurger = document.querySelector('.header_menu')
hamb.addEventListener('click', function(e) {
    e.preventDefault();
    menuBurger.classList.toggle('open');
    hamb.classList.toggle('active')
})