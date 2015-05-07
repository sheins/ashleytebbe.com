jQuery(document).ready(function($) {
    var mobileNav = $('#mobile-nav');
    if (mobileNav.is(':visible')) {
        $('#mobile-nav, #site-navigation ul li a').click(function(e){
            $('#site-navigation ul').slideToggle('slow');
        });
    }
});

