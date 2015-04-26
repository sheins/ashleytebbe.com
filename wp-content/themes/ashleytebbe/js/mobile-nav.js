jQuery(document).ready(function($) {
    $('#mobile-nav, #site-navigation ul li a').click(function(e){
        $('#site-navigation ul').slideToggle('slow');
    });
});