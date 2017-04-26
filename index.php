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
				<div class="row">
			<div class="col s6">
				<h2>Schedule an Appointment!</h2>
				<div id="form-messages"></div>

				<form id="ajax-contact" method="post" action="mailer.php">
					<div class="field">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" required>
					</div>

					<div class="field">
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
					</div>

					<div class="field">
						<label for="message">Message:</label>
						<textarea id="message" name="message" required></textarea>
					</div>

					<div class="field">
						<button type="submit">Send</button>
					</div>
				</form>
			</div>

			<div class="col s6">
				<h2>Knight Tutors</h2>
				<p class="flow-text main_text">We truly believe that learning should be accessible, affordable, and more convenient for everyone. For 10 years, Knight Tutors has been working very hard to provide the best service for our students to make them as successful as possible. Our center
					and convenient locations are very committed to and involved with our community, regularly attending area events and acting as a resource for local educators. Our highly qualified tutors include public and private school teachers, certified teachers,
					college professors, graduate students and professionals with Master’s Degrees and Ph.D.‘s. As well as accountants, engineers, writers, and business owners. These tutors are passionate about helping their students and the majority of them have been
					with us for many years.</p>

				<div class="more-text">
					<p class="flow-text main_text">We help our students exceed their goals and set them up for success in their futures. Whether the goal is passing FSA, getting into a dream college, or acing AP Calculus, Knight Tutors has the experience and the expertise to make it happen! Knight
						Tutors is the perfect place to help students develop the skills, confidence, and motivation to shine, whether the student needs to get back on track, a grade level ahead, or well-prepared for its future studies. Give us a call today to get your
						student started on the path to success!</p>
				</div>
				<a class="waves-effect waves-light btn" id="show">Read More</a>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row center features">
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-users fa-5x index-icons"></i>
				<h4 class="feature-header">ANSWER A FEW QUICK QUESTIONS</h4>
				<p class="flow-text">Tell us a little about yourself, and we’ll introduce you to experts who are the best matches for you.</p>
			</div>
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-comments-o fa-5x index-icons"></i>
				<h4 class="feature-header">PICK YOUR PERFECT INSTRUCTOR</h4>
				<p class="flow-text">See instructor qualifications and ratings from other students, choose a price that works for you, and connect with your favorites.</p>
			</div>
			<div class="col s12 m4 l4">
				<i aria-hidden="true" class="fa fa-book fa-5x index-icons"></i>
				<h4 class="feature-header">BOOK YOUR LESSON AND LET US HELP</h4>
				<p class="flow-text">Tell your instructor when and where you’d like to meet. There are no up front payments and we’ll securely process everything for you.</p>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row">

			<h2>Customer Reviews</h2>

			<div class="col l4">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="img/student1.jpg"></div>
						<div class="col s10">
							<span class="black-text">Very happy to have found your website and used your service. I will tell my friends about your system. - Leslie from Orlando, FL</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col l4">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="img/student2.jpeg"></div>
						<div class="col s10">
							<span class="black-text">I’m impressed with Knight Tutors and the efficiency of how they work. It was above and beyond what I expected. - Nick from Lake Nona.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col l4">
				<div class="card-panel grey lighten-5 z-depth-1 hoverable">
					<div class="row valign-wrapper">
						<div class="col s2"><img class="circle responsive-img" src="img/student3.jpeg"></div>
						<div class="col s10">
							<span class="black-text">This is Exactly what I was looking for. If you want a friendly, reliable tutor, look no further. - Jessica from UCF.</span>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="col s12 m6 l6">
			<h2 class="scrollspy" id="faq">Frequently Asked Questions</h2>
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="material-icons">search</i>1. How do I choose a tutor?</div>
					<div class="collapsible-body"><span class="flow-text">Many students choose a tutor on the basis of his or her schedule. They simply look at the schedule to choose a tutor in the subject whose hours are at a convenient time. Also, it may be to the student’s advantage to get help from a variety of tutors.</span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">timelapse</i>2. What are the hours for tutoring?</div>
					<div class="collapsible-body"><span class="flow-text">The Tutoring Center is open: Monday through Thursday from 8:00 a.m. to 6:00 p.m., Closed: Saturday and Sunday (Hours for summer and Intersession vary. Please call 407-555-5555)</span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">event_note</i>3. Do I need to prepare for a tutoring session?</div>
					<div class="collapsible-body"><span class="flow-text">Before your tutoring session, you should prepare by doing your class reading and homework and preparing a list of questions or topics that you would like to cover. If you feel totally lost, think of two or three general questions.</span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">attach_money</i>4. Is this service refundable?</div>
					<div class="collapsible-body"><span class="flow-text">If for any reason you are not satisfied with your selected tutor after the initial session, please call us and we will help you identify a tutor who might be a better fit. This second 1 to 2 hour session is delivered at no charge. If you remain dissatisfied following the second session, but before any subsequent session, we will issue you a full refund of all unused hours.</span></div>
				</li>
			</ul>
			</div>
			<div class="col s12 m6 l6">
				<h3>Where are we?</h3>
				<div id="image-test">
					<div id="map"></div>
				</div>
				<a class="btn" href="#!" id="myButton" onclick="Materialize.fadeInImage('#image-test')">FIND OUR LOCATIONS</a>
				<a class="waves-effect waves-light btn" href="#modal1">DONATE</a>
			</div>
		</div>




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
	<?php include("includes/footer.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAj81a3Z2nVFw-aaT5ZfFu_wfH-3v1HZp8"></script>

	<script src="js/map.js" charset="utf-8"></script>
	<script src="js/main.js"></script>
	<script src="js/function.js"></script>
	<script src="js/app.js"></script>

</body>

</html>
