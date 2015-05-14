jQuery(document).ready(function($) {
    var screenWidth = $(document).width();

        $('#mobile-nav, #site-navigation ul li a').click(function(){
            $('#site-navigation ul').toggleClass('open');
        });

});

