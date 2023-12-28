// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika hamburgermenu di klik
document.querySelector("#hamburger-menu").onclik = () => {
    navbarNav.classList.toggle("active");
};
