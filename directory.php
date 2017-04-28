<?php session_start();?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Knight Tutors Tutor Directory</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<?php include("includes/header.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h3>Schedule an Appointment</h3>
				<div id="form-messages"></div>
				<form action="mailer.php" id="ajax-contact" method="post" name="ajax-contact">
					<div class="field">
						<label for="name">Name:</label> <input id="name" name="name" required="" type="text">
					</div>
					<div class="field">
						<label for="email">Email:</label> <input id="email" name="email" required="" type="email">
					</div>
					<div class="field">
						<label for="message">Message:</label>
						<textarea id="message" name="message" required=""></textarea>
					</div>
					<div class="field">
						<button type="submit">Send</button>
					</div>
				</form>
			</div>
			<div class="col s12 m6 l6">
				<h3>Find a Tutor</h3>

						<select class="browser-default z-depth-1" name="teachers" onchange="show(this.value)">
							<option disabled selected value="">
								Choose a subject
							</option>
							<option value="Math">
								Math
							</option>
							<option value="English">
								English
							</option>
							<option value="Science">
								Science
							</option>
							<option value="Social-Studies">
								Social Studies
							</option>
						</select>


								<div id="TutorInfo"></div>


							<ul class="collapsible" data-collapsible="accordion">
							<li>
								<div class="collapsible-header center">Add to directory</div>
								<div class="collapsible-body">
									<p id="response"></p>
									<form action="add.php" id="add" method="post" name="add">
										<div class="row">
											<div class="input-field">
												<select class="browser-default" name="subject" required="">
													<option disabled selected value="">
														What type of subject do you usually teach?
													</option>
													<option value="Math">
														Math
													</option>
													<option value="English">
														English
													</option>
													<option value="Science">
														Science
													</option>
													<option value="Social-Studies">
														Social Studies
													</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<input class="validate" name="name" required="" type="text"> <label>Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<input class="validate" maxlength="10" name="phone" required="" size="10" type="tel"> <label>Phone</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<input class="validate" maxlength="100" name="location" required="" type="text"> <label>Location</label>
											</div>
										</div>
										<div class="row center">
											<button class="waves-effect waves-light btn" name="action" type="submit">Add</button>
										</div>
									</form>
								</div>
							</li>
						</ul>



						<ul class="collapsible" data-collapsible="accordion">
							<li>
								<div class="collapsible-header center">
									Remove from directory
								</div>
								<div class="collapsible-body">
									<p id="alert"></p>
									<form action='delete.php' class='center' id='delete' method='post' name="delete">
										<div class='input-field'>
											<input class='validate' name='name' required="" type='text'> <label>Please enter a tutor that you think shouldn't be in the directory.</label>
										</div><button class="waves-effect waves-light btn" name='action' type='submit'>Remove</button>
									</form>
								</div>
							</li>
						</ul>
			</div>
		</div>
	</div>











	<?php include("includes/footer.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js">
	</script>
	<script src="js/remove.js">
	</script>
	<script src="js/post.js">
	</script>
	<script src="js/main.js">
	</script>
	<script src="js/function.js">
	</script>
	<script>
	function show(str) {
		if (str == "") {
				document.getElementById("TutorInfo").innerHTML = "";
				return;
		} else {
				if (window.XMLHttpRequest) {

						xmlhttp = new XMLHttpRequest();
				} else {

						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
								document.getElementById("TutorInfo").innerHTML = this.responseText;
						}
				};
				xmlhttp.open("GET","get.php?q="+str,true);
				xmlhttp.send();
		}
	}
	</script>
	<script>
	$(document).ready(function(){
	     $('.collapsible').collapsible();
	     $('select').material_select();
	   });
	</script>
</body>
</html>
