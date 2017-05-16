window.onload = function () {
    function checkWidth(init)
    {
        /*If browser resized, check width again */
        if ($(window).width() <= 920) {
            
            if (!init) {
                $('.menu').css("display", "none");
                $( ".hamburger" ).show();
            }
        }
        else {
            if (!init) {
                $('.menu').css("display", "block");
                $( ".hamburger" ).hide();
                $( ".cross" ).hide();
            }
        }
    }

    $(document).ready(function() {
        checkWidth(true);

        $(window).resize(function() {
            checkWidth(false);
        });
    }); 
    
    
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