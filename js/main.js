$(document).ready(function() {
    $('.scrollspy').scrollSpy();
    $('.slider').slider();
    $('.button-collapse').sideNav();
    $('.collapsible').collapsible();
    $('.modal').modal();
    $('#image-test').hide();
    $('#myButton').click(function(){
    $('#image-test').show(1000);
    });
});


 $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('nav').addClass('active');
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $('nav').removeClass('active');
        }
    });
