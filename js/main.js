$(document).ready(function() {
  $('.scrollspy').scrollSpy();
  $('.slider').slider();
  $('.button-collapse').sideNav();
  $('.collapsible').collapsible();
  $('.modal').modal();
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
