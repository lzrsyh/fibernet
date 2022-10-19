let lastScrollTop = 0;
const header = document.querySelector('#header')

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        header.style.top = "-100px";
    } else {
        header.style.top = "0";
    }
    lastScrollTop = scrollTop;
})

const openMenu = document.querySelector('.hamburger')
const closeMenu = document.querySelector('.close')
const sidebar = document.querySelector('.header-nav')

openMenu.addEventListener('click', () => {
    sidebar.classList.add('active')
})

closeMenu.addEventListener('click', () => {
    sidebar.classList.remove('active')
})