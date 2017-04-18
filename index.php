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
    <h2 class="login">Login</h2>
    <form action="script2.php" method="post" id="login">
      <div class="input-field">
        <input type="text" name="username" id="username">
        <label for="username">Username</label>
      </div>
      <p id="loginMessage"></p>
      <div class="input-field">
        <input type="password" name="password" id="password">
        <label for="password">Password</label>
      </div>
      <button type="submit" id="loginSubmit" class="blue btn btn-large waves-effect waves-light col m4 offset-m4">Submit</button>
    </form>

    <p id="loginError"></p>
    <a href="signup.html" class="col s12 signupNow">Not a user? Sign up now!</a>
  </div>
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
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img class="circle responsive-img" src="https://placeimg.com/640/640/any">
                        </div>
                        <div class="col s10">
                            <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6">
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img class="circle responsive-img" src="https://placeimg.com/640/640/any">
                        </div>
                        <div class="col s10">
                            <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6">
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img class="circle responsive-img" src="https://placeimg.com/640/640/any">
                        </div>
                        <div class="col s10">
                            <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                        </div>
                    </div>
                    <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header"><span class="new badge">4</span><i class="material-icons">filter_drama</i>First</div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header"><span class="badge">1</span><i class="material-icons">place</i>Second</div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
</ul>
                </div>
            </div>
            <div class="col l6">
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img class="circle responsive-img" src="https://placeimg.com/640/640/any">
                        </div>
                        <div class="col s10">
                            <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="collection">
  <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
  <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
  <a href="#!" class="collection-item">Alan</a>
  <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
</div>
<a href="#!" class="btn" onclick="Materialize.fadeInImage('#image-test')" id="myButton">MAKE AN APPOINTMENT</a>
  <img class="circle responsive-img" src="https://placeimg.com/640/640/any" id="image-test">
  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn" href="#modal1">DONATE</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>DONATE HERE</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">CLOSE</a>
    </div>
  </div>

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
