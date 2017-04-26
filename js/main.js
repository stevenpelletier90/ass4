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
