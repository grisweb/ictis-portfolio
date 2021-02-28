$(document).ready(function() {
    $('select').niceSelect();
});

$('.projects-list__view-btn').on('click', function (){
    if (!$(this).hasClass('projects-list__view-btn--active')) {
        $('.projects-list__view-btn--active').removeClass('projects-list__view-btn--active');
        $(this).addClass('projects-list__view-btn--active');
    }
});
