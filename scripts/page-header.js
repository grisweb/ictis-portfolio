var toggleNav = document.querySelector(".page-header__toggle-nav");
var menuNav = document.querySelector(".page-header__site-nav");

toggleNav.addEventListener("click", function (evt)
{
    evt.preventDefault();
    toggleNav.classList.toggle("page-header__toggle-nav--active");
    menuNav.classList.toggle("page-header__site-nav--mobile");
});