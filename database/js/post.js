$('#add').on('submit', function(event) {

	event.preventDefault();
	var subject = $(this).serialize();

	$.ajax({
		type: "POST",
		url: "add.php",
		data: subject,
		timeout: 2000,
		beforeSend: function(){
			$('#response').html('<img src="http://www.chumbogordo.com.br/wp-content/uploads/2016/03/Pencil.gif" alt="Loading">');
		},
		complete: function(){
			$('#response').text('Welcome to our directory!');
		},
		success: function(data){
			$('#response').html(data);
		},
		error: function(data){
			$('#response').text("An error ocurred. Please try again.");
		}

	});
});
