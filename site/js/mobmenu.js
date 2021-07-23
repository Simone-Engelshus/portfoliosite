const button = document.querySelector('.button');
const mobNav = document.querySelector('.nav-menu');
let openNav = false;
button.addEventListener('click', () => {
    if(!openNav) {
        mobNav.classList.add('openNav');
        openNav = true;
    } else {
        mobNav.classList.remove('openNav');
        openNav = false;
    }
});