//window.onload = function () {
//    $(document).ready(function(){
//        $(window).bind('scroll', function () {
////            console.log($(window).scrollTop());
//            if ($(window).scrollTop() > 63) {
//              $('#nav_bar').addClass('navbar-fixed');
//            }
//            if ($(window).scrollTop() < 64) {
//              $('#nav_bar').removeClass('navbar-fixed');
//            } 
// 
//        });
//    })
//}
window.onload = function () {
//    $( ".cross" ).hide();
//    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
}