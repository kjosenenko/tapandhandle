$(function(){
    $('a').each(function(){
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('active'); $(this).parents('li').addClass('active');
        }
    });
});

$(function () {
    if($(window).width() >= 992) {
        $('#menuLeft').addClass('groove');
        $('.navbar-nav').addClass('centerNav');
    }
});