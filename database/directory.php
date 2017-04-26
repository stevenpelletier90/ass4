<!DOCTYPE html>
<html lang="eng">

<head>
	<title>Knight Tutors Tutor Directory</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<?php
    session_start();
  ?>
<div class="container">

		<select class="browser-default z-depth-1" name="teachers" onchange="show(this.value)">
    <option value="" disabled selected>Choose a subject</option>
    <option value="Math">Math</option>
    <option value="English">English</option>
    <option value="Science">Science</option>
    <option value="Social-Studies">Social Studies</option>
</select>




		<div id="TutorInfo"></div>



		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header center">Add to directory</div>
				<div class="collapsible-body">
					<p id="response"></p>
					<form class="col s12" id="add" action="add.php" method="POST">
						<div class="row">
							<div class="input-field s12">
								<select class="browser-default" name="subject" required>
            <option value="" disabled selected>What type of subject do you usually teach?</option>
                <option value="Math">Math</option>
				<option value="English">English</option>
				<option value="Science">Science</option>
				<option value="Social-Studies">Social Studies</option>
           </select>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="name" class="validate" required>
								<label>Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="tel" size="10" maxlength="10" name="phone" class="validate" required>
								<label>Phone</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" maxlength="100" name="location" class="validate" required>
								<label>Location</label>
							</div>
						</div>
						<div class="row center">
							<button class="waves-effect waves-light btn" type="submit" name="action">Add</button>
						</div>
					</form>
				</div>
			</li>
		</ul>



		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header center">Remove from directory</div>
				<div class="collapsible-body">
					<p id="alert"></p>
					<form class='center' id='delete' action='delete.php' method='POST'>
						<div class='input-field'>
							<input type='text' name='name' class='validate' required>
							<label>Please enter a tutor that you think shouldn't be in the directory.</label>
						</div>
						<button class="waves-effect waves-light btn" type='submit' name='action'>Remove</button>
					</form>
				</div>
			</li>
		</ul>

		</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		<script src="js/remove.js"></script>
		<script src="js/post.js"></script>

</body>

</html>
