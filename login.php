<?php
	session_start();

//if the user is already logged we dont want him to able to access the login page again. if he does try to do so by insertig the link of the login page in the url, restrict by redirecting him to the home page
//if you try this url while logged in  http://thereplicator.azurewebsites.net/login.php , you will be redirected to index
	if (isset($_SESSION['email'])) {
		header('location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Replicator - Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php">Replicator</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                     <!-- d-lg-block -->
                     <ul class="site-menu js-clone-nav d-none">
                       <li>
                         <a href="index.php">Home</a>
                       </li>
                       <li><a href="ourModels.php">Available Models</a></li>

                       <li class="active"><a href="signup.php">Create An Account</a>
                       </li>
                         <li><a href="Alexa.php">Communicate With Alexa!</a></li>
                       <li>

                         <form action="includes/login.inc.php" class="p-5 bg-white">

                           <div class="row form-group">
                             <div class="col-md-12">
                               <label class="font-weight-bold" for="email">Email</label>
                               <input type="email" id="email" class="form-control" placeholder="Email Address">
                             </div>
                           </div>

                           <div class="row form-group">
                             <div class="col-md-12">
                               <label class="font-weight-bold" for="email">Password</label>
                               <input type="password" id="password" class="form-control" placeholder="Password">
                             </div>
                           </div>

                           <div class="row form-group">
                             <div class="col-md-12">
                               <button type="submit" value="" class="btn btn-primary px-4 py-2">Log in</button>

                             </div>
                           </div>
                         </form>
                       </li>
                     </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-blocks-cover overlay" style="background-image: url(images/signup.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Log In</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="includes/login.inc.php" class="p-5 bg-white" method="POST">

							<div class="row form-group">
	              <div class="col-md-12">
	                <label class="font-weight-bold" for="email">Email</label>
	                <input type="email" id="email" name ="email" class="form-control" placeholder="Email Address">
	              </div>
	            </div>

	            <div class="row form-group">
	              <div class="col-md-12">
	                <label class="font-weight-bold" for="email">Password</label>
	                <input type="password" id="password" name = "pwd" class="form-control" placeholder="Password">
	              </div>
	            </div>

							<div class="row form-group">
								<div class="col-md-12">
									<button type="submit" name = "login-submit"class="btn btn-primary px-4 py-2">Sign In</button>
								</div>
							</div>
							
            </form>
          </div>
        </div>
      </div>
    </div>

        <footer class="site-footer" style="background-image: url('images/baner.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3 class="footer-heading mb-4 text-white">Replicator</h3>
                <p><i>We create new  possibilities for a world full of possibilities!</i></p>
                <p><a href="index.php#aboutInfo" class="btn btn-primary pill text-white px-4">Read More</a></p>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                    <ul class="list-unstyled">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="ourModels.php">Available Models</a></li>
                      <li><a href="signup.php">Create An Account</a></li>
                      <li><a href="#">Communicating With Alexa</a></li>
                      <li><a href="#Founders">Meet The Founders!</a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/aos.js"></script>


      <script src="js/mediaelement-and-player.min.js"></script>

      <script src="js/main.js"></script>


      <script>
          document.addEventListener('DOMContentLoaded', function() {
                    var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                    for (var i = 0; i < total; i++) {
                        new MediaElementPlayer(mediaElements[i], {
                            pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                            shimScriptAccess: 'always',
                            success: function () {
                                var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                                for (var j = 0; j < targetTotal; j++) {
                                    target[j].style.visibility = 'visible';
                                }
                      }
                    });
                    }
                });
        </script>

      </body>
    </html>
