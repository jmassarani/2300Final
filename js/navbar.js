window.onload = function () {
    $(document).ready(function(){
        $(window).bind('scroll', function () {
//            console.log($(window).scrollTop());
            if ($(window).scrollTop() > 63) {
              $('#nav_bar').addClass('navbar-fixed');
            }
            if ($(window).scrollTop() < 64) {
              $('#nav_bar').removeClass('navbar-fixed');
            } 
 
        });
    })
}