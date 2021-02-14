// let slideIndex = 0;
// let slides = document.getElementsByClassName("slider-news__slide");
//
// function showSlides(n) {
//     console.log(slideIndex);
//     slides[slideIndex].classList.remove("slider-news__slide--active");
//     slideIndex += n;
//
//     if (slideIndex === slides.length) {
//         slideIndex = 0;
//     }
//     if (slideIndex < 0) {
//         slideIndex = slides.length - 1;
//     }
//     console.log(slideIndex);
//     slides[slideIndex].className += " slider-news__slide--active";
// }

$(document).ready(function () {
    $(".slider-news").slick();
})