<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Assignment 4 - Knight Tutors</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<?php include("includes/header.php"); ?>

	<div class="container">
		<div class="row center">

			<h2>Knight Tutors</h2>

			<a class="waves-effect waves-light btn" href="#login-modal"><i class="material-icons left">perm_identity</i>login</a>
			<a class="waves-effect waves-light btn" href="#signup-modal"><i class="material-icons left">mode_edit</i>sign up</a>

				<div id="login-modal" class="modal">
					<div class="modal-content">
						<h4>Login</h4>
						<div class="container center">
							<div class="row left-align">
								<form method="POST"><!-- We can use GET also as submitting method-->
<label>Username</label>
<input id="username" name="username" type="text"><!-- the username input -->
<label>Password</label>
<input id="password" name="pasword" type="password"><!-- the password input -->
<input id="submit_login" name="submit" value="Login" type="submit"><!-- submit button -->
<span class="errormess"></span><!-- the ajax result wrapper -->
</form>

							</div>
							<a class="waves-effect waves-light btn"><i class="material-icons left">perm_identity</i>login</a>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
					</div>
				</div>

				<div id="signup-modal" class="modal">
					<div class="modal-content">
						<h4>Sign Up</h4>
						<div class="container center">
							<div class="row left-align">

									<div class="row">
										<div class="input-field col s12">
											<input id="username" type="text">
											<label for="username">Username</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="password" type="password">
											<label for="password">Password</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="email" type="email">
											<label for="email">Email</label>
										</div>
									</div>

								</form>

							</div>
							<a class="waves-effect waves-light btn"><i class="material-icons left">done</i>submit</a>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
					</div>
				</div>


			</form>
		</div>
		<div class="divider"></div>
		<div class="row center features">
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-users fa-5x index-icons"></i>
				<h4 class="feature-header">ONE CONTENT</h4>
				<p class="flow-text">This is content text</p>
			</div>
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-comments-o fa-5x index-icons"></i>
				<h4 class="feature-header">TWO CONTENT</h4>
				<p class="flow-text">More Content Text</p>
			</div>
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-book fa-5x index-icons"></i>
				<h4 class="feature-header">3 CONTENT</h4>
				<p class="flow-text">EVEN MORE</p>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="col l6">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="https://placeimg.com/640/640/any"></div>
						<div class="col s10">
							<span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col l6">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="https://placeimg.com/640/640/any"></div>
						<div class="col s10">
							<span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col l6">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="https://placeimg.com/640/640/any"></div>
						<div class="col s10">
							<span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
						</div>
					</div>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<span class="new badge">4</span><i class="material-icons">filter_drama</i>First
							</div>
							<div class="collapsible-body">
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<span class="badge">1</span><i class="material-icons">place</i>Second
							</div>
							<div class="collapsible-body">
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col l6">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="https://placeimg.com/640/640/any"></div>
						<div class="col s10">
							<span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
						</div>
					</div>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<span class="new badge">4</span><i class="material-icons">filter_drama</i>First
							</div>
							<div class="collapsible-body">
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<span class="badge">1</span><i class="material-icons">place</i>Second
							</div>
							<div class="collapsible-body">
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="collection">
				<a class="collection-item" href="#!"><span class="badge">1</span>Alan</a> <a class="collection-item" href="#!"><span class="new badge">4</span>Alan</a> <a class="collection-item" href="#!">Alan</a> <a class="collection-item" href="#!"><span class="badge">14</span>Alan</a>
			</div><a class="btn" href="#!" id="myButton" onclick="Materialize.fadeInImage('#image-test')">MAKE AN APPOINTMENT</a> <img class="circle responsive-img" id="image-test" src="https://placeimg.com/640/640/any">
			<!-- Modal Trigger -->
			<a class="waves-effect waves-light btn" href="#modal1">DONATE</a>
			<!-- Modal Structure -->
			<div class="modal bottom-sheet" id="modal1">
				<div class="modal-content">
					<h4>DONATE HERE</h4>
					<p>A bunch of text</p>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">CLOSE</a>
				</div>
			</div>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/function.js" charset="utf-8"></script>
</body>

</html>
