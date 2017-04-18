<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Assignment 4 - Knight Tutors</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a class="animated fadeInRight brand-logo" href="#!">KNIGHT TUTORS</a> <a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#footer">ABOUT</a>
                        </li>
                        <li>
                            <a href="#footer">FAQ</a>
                        </li>
                        <li>
                            <a href="#footer">OUR TUTORS</a>
                        </li>
                        <li>
                            <a href="#footer">DONATE</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li>
                <a href="#">ABOUT</a>
            </li>
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">OUR TUTORS</a>
            </li>
            <li>
                <a href="#">DONATE</a>
            </li>
        </ul>
    </header>
    <div class="slider">
        <ul class="slides">
            <li>
                <img class="banner-image" src="img/banner1.jpg">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img class="banner-image" src="img/deskimage.jpg">
                <!-- random image -->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img class="banner-image" src="img/banner2.jpg">
                <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img class="banner-image" src="img/banner3.jpg">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
<div class="row">
<div class="col s12 m6 offset-m3 center">
<h2 class="signup">Sign up</h2>
<form action="script2.php" method="post" id="signup">
<div class="input-field">
<input type="text" name="username" id="username" required>
<label for="username">Username</label>
<p id="userError"></p>
</div>
<div class="input-field">
<input type="password" name="password" id="password" required>
<label for="password">Password</label>
<p id="passError"></p>
</div>
<div class="input-field">
<input type="text" name="first" id="first" required>
<label for="first">First name</label>
</div>
<div class="input-field">
<input type="text" name="last" id="last" required>
<label for="last">Last name</label>
</div>
<button type="submit" id="signupSubmit" class="blue btn btn-large waves-effect waves-light col m4 offset-m4">Submit</button>
</form>

<div id="success" class="center">
<h2 class="successful">Signup Successful!</h2>
<p>Click the button below to login.</p>
<a href="login.html" class="waves-effect waves-light btn btn-large blue">
Login
</a>
</div>

<p id="signupError"></p>
<a href="login.html" class="col s12 loginNow">Already a user? Login now!</a>
</div>
</div>


    <footer id="footer" class="page-footer scrollspy">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Find Us!</h5>
                    <p class="grey-text text-lighten-4">Use our API to kind our stores!</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Social Media</h5>

                            <a class="footer-icons" href="#!"><i aria-hidden="true" class="fa fa-facebook-official fa-2x"></i></a>

                            <a class="footer-icons" href="#!"><i aria-hidden="true" class="fa fa-university fa-2x"></i></a>

                            <a class="footer-icons" href="#!"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>

                            <a class="footer-icons" href="#!"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Knight Tutors <a class="grey-text text-lighten-4 right" href="#modal1">Learn More</a>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/submitform.js"></script>
</body>

</html>
