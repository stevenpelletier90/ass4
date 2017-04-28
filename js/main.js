$(document).ready(function() {
  $('.scrollspy').scrollSpy();
  $('.slider').slider();
  $('.button-collapse').sideNav();
  $('.collapsible').collapsible();
  $('.modal').modal();
    $('#modal2').modal();
    $('#modal3').modal();
  $('#myButton').click(function() {
    $('#image-test').toggle(1000);
  });
  $('.more-text').hide();
  $("#show").click(function(){
    $(".more-text").toggle(2000);
    $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
});
});


$(window).on('scroll', function() {
  if ($(window).scrollTop() > 50) {
    $('nav').addClass('active');
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $('nav').removeClass('active');
  }

  if ($(window).scrollTop() > 50) {
    $('nav ul a').addClass('scrolled');
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $('nav ul a').removeClass('scrolled');
  }
});

$(document).ready(function() {
  $("#submit").click(function() {
    var username = $('#username').val();
    var password = $('#password').val();
    var password1 = $('#password1').val();
    var email = $('#email').val();
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: "username=" + username + "&password=" + password + "&email=" + email,
      success: function(html) {
        $("#load").css('display', 'block');
        $("#form2").css('display', 'none');
        $("#box").css('display', 'none');
        $("#load").fadeOut('500', function() {
          $("#load").css('display', 'none');
          $("#box").html(html).show('slow');
        });
      }
    });
    return false;

  });
});

$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});


//animaiton code
$('path').each(function(i,el){
  var length = el.getTotalLength();
  $(el).data('width',$(el).css('stroke-width')).css({
    'stroke-dasharray': length+' '+length,
    'stroke-dashoffset': length,
    'stroke-width': 0
  })
})

//start animation
function animate(){
  $('path').each(function(i,el){
    $(el).css('stroke-width',1).delay(i*150).animate({
      'stroke-dashoffset': 0
    },8*1000 - i*150).animate({
      'stroke-width': $(el).data('width')
    });
  })

}

animate();

//books

var Page = (function() {

                var config = {
                        $bookBlock : $( '#bb-bookblock' ),
                        $navNext : $( '#bb-nav-next' ),
                        $navPrev : $( '#bb-nav-prev' ),

                    },
                    init = function() {
                        config.$bookBlock.bookblock( {
                            speed : 800,
                            shadowSides : 0.8,
                            shadowFlip : 0.7
                        } );
                        initEvents();
                    },
                    initEvents = function() {

                        var $slides = config.$bookBlock.children();

                        // add navigation events
                        config.$navNext.on( 'click touchstart', function() {
                            config.$bookBlock.bookblock( 'next' );
                            return false;
                        } );

                        config.$navPrev.on( 'click touchstart', function() {
                            config.$bookBlock.bookblock( 'prev' );
                            return false;
                        } );



                        // add swipe events
                        $slides.on( {
                            'swipeleft' : function( event ) {
                                config.$bookBlock.bookblock( 'next' );
                                return false;
                            },
                            'swiperight' : function( event ) {
                                config.$bookBlock.bookblock( 'prev' );
                                return false;
                            }
                        } );

                        // add keyboard events
                        $( document ).keydown( function(e) {
                            var keyCode = e.keyCode || e.which,
                                arrow = {
                                    left : 37,
                                    up : 38,
                                    right : 39,
                                    down : 40
                                };

                            switch (keyCode) {
                                case arrow.left:
                                    config.$bookBlock.bookblock( 'prev' );
                                    break;
                                case arrow.right:
                                    config.$bookBlock.bookblock( 'next' );
                                    break;
                            }
                        } );
                    };

                    return { init : init };

            })();


                            Page.init();
