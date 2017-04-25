$('#delete').on('submit', function(event) {

	event.preventDefault();
	var subject = $(this).serialize();

	$.ajax({
		type: "POST",
		url: "delete.php",
		data: subject,
		timeout: 2000,
		beforeSend: function(){
			$('#alert').html('<img src="http://www.chumbogordo.com.br/wp-content/uploads/2016/03/Pencil.gif" alt="Loading">');
		},
		complete: function(){
			$('#alert').text('You have successfully deleted a tutor from the directory.');
		},
		success: function(data){
			$('#alert').html(data);
		},
		error: function(data){
			$('#alert').text("An error ocurred. Please try again.");
		}

	});
});
