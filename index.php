<?php
	session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Replicator</title>
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
                      <!-- <?php

                      // if (isset($_SESSION['email'])) {
                      //   echo '<li>'.$_SESSION['first'].' '.$_SESSION['last']'</li>';
                      // }
                      ?> -->
                      <li class="active">
                        <a href="index.php">Home</a>
                      </li>
                      <li><a href="ourModels.php">Available Models</a></li>
                      <li><a href="signup.php">Create An Account</a></li>
                      <li><a href="Alexa.php">Communicate With Alexa!</a></li>
                      <li>
                        <li>
                          <form action="#" class="p-5 bg-white">

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
                                <button type="submit" value="" class="btn btn-primary px-4 py-2">Log In</button>
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




    <div class="site-blocks-cover overlay" style="background-image: url(images/baner.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Connect to Alexa and print 3D models</h1>
            <p class="mb-5"></p>
            <p class="regular-font-size">
              <!-- <?php

              // if (!isset($_SESSION['email'])) {
              //   echo '<a href="login.php" class="btn btn-primary px-4 py-3 text-uppercase">Log In</a>
              //   <a href="signup.php" class="btn btn-primary px-4 py-3 text-uppercase">Sign Up</a>';
              // }
              ?> -->
              <a href="login.php" class="btn btn-primary px-4 py-3 text-uppercase">Log In</a>
              //   <a href="signup.php" class="btn btn-primary px-4 py-3 text-uppercase">Sign Up</a>
            </p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section"  id = "aboutInfo">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto text-left section-heading">
            <h2 class="mb-5 text-uppercase">About The Replicator</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-7">
            <p>It is almost impossible to believe what technology has achieved so far. Starting with the microphone invention in the 19th century, reaching to Smartphones and Virtual reality nowadays. We really made a huge leap! Our real concern here, in "The Replicator", is the next level. Great technologies had really impacted our lives...One of which is the 3D printing technology. Yet, we decided to make it more elegant and user-friendly using Alexa!You can now access stored models and 3D print them with the use of a raspberry pi.
			In case you want to add a certain 3D model of your choice, you can sign up here, add your specified models,and proceed with the printing. To upload your models, Please check <a href ="#modelGuide"> the following guidelines for a detailed walkthrough. </a> </p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-block-half d-flex images">
      <div class="image bg-image" style="background-image: url('images/im1.jpg');">
      </div>
      <div class="image bg-image" style="background-image: url('images/im2.jpg');">
      </div>
    </div>


    <div class="site-section" id = "Founders">
      <div class="container" >
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">Founders</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/MarwanNour.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Marwan</span>Nour</a></h3>
              <!-- <p>Business Consultant in Google</p> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/HadiHaidar.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Hadi</span>Haidar</a></h3>
              <!-- <p>Business Consultant in Facebook</p> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/Shatilov.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Mohammad N.</span> Chatila</a></h3>
              <!-- <p>Business Consultant in Medium</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/OmarRachidi.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Omar</span> Al Rachidi</a></h3>
              <!-- <p>Business Consultant in Slack</p> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/person_5.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Bryan</span> Forster</a></h3>
              <!-- <p>Business Consultant in WordPress</p> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="speaker-single.html" class="d-block mb-3 thumbnail"><img src="images/person_6.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>Matt</span> Nelson</a></h3>
              <!-- <p>Business Consultant in Evernote</p> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-block-half d-flex images">
      <div class="image bg-image" style="background-image: url('images/im3.jpg');">
      </div>
      <div class="image bg-image" style="background-image: url('images/im4.jpg');">
      </div>
    </div>



    <div class="site-section"id ="modelGuide">
      <div class="container" >
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">Guidelines For Model Upload</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="text-center p-4 item">
              <span style="font-size : 60px; color: #e1931b">1</span>
              <h2 class="h5 text-uppercase">You must have an account</h2>
              <p>In order to add the models of your choice, you will have to sign up first. Make sure to go to the <a href = "signup.php">Sign up page</a> and do that! Also make sure you slice the 3D files into applicable gcode files. You can do that using any 3D Model Slicer such as <a href="https://ultimaker.com/en/products/ultimaker-cura-software "  target="_blank"> Cura</a></p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4">
            <div class="text-center p-4 item">
              <span style="font-size : 60px; color: #e1931b">2</span>

              <h2 class="h5 text-uppercase">The file you upload must have an .gcode extension</h2>
              <p> For the 3D printer to print your models, the file uploaded has to be a Gcode file. Otherwise, the printer won't read your file. In other words, it's the 3D printer universal language! </p>

            </div>
          </div>


          <div class="col-md-4 col-lg-4">
            <div class="text-center p-4 item">
              <span style="font-size : 60px; color: #e1931b">3</span>
              <h2 class="h5 text-uppercase">Make sure your file is not already there </h2>
              <p> To check the list of available models, please go to the <a href="ourModels.php"> "Available Models" </a>section. You have to make sure your file is not there! After that, you can finally upload your files and enjoy a universe of 3D printed models!</p>
            </div>
          </div>

        </div>
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
            <p><a href="#aboutInfo" class="btn btn-primary pill text-white px-4">Read More</a></p>
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
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">&nbsp;</h3>
                  <ul class="list-unstyled">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
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
