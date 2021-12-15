const navBar = document.querySelector('nav');
const navLinkDesktop = document.querySelectorAll('.navLink-desktop');
const cepTitle = document.querySelector('.cepTitle');
const burger = document.querySelector('.burger');

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navLinks');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        // navBar.style.backgroundColor = "white";
        // cepTitle.style.color = "black";
        // navLink.style.color = "black";
        // burger.style.color = "black";
    });
}

navSlide();

window.addEventListener('scroll', function(){
    if(window.pageYOffset > 500){
        navBar.style.backgroundColor = "white";
        navLinkDesktop.forEach(element => {
            element.style.color = "black";
        });
        cepTitle.style.color = "black";
    } else {
        navBar.style.backgroundColor = "#ffffff1f";
        navLinkDesktop.forEach(element => {
            element.style.color = "WHITE";
        });
        cepTitle.style.color = "white";
    }
});