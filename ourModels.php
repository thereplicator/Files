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
    <link rel="stylesheet" href="css/table.css">
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
                      <?php
                        if(isset($_SESSION['email'])){
                          echo "<li>".$_SESSION['first']." ".$_SESSION['last']."</li>";
                        }
                        ?>
                      <li>
                        <a href="index.php">Home</a>
                      </li>
                      <li class="active"><a href="ourModels.php">Available Models</a></li>
                      <li><a href="Alexa.php">Communicate With Alexa!</a></li>
                      <li>
                        <?php
                          if(isset($_SESSION['email'])){
                            ?> <form class='p-5 bg-white' action='includes/logout.inc.php' method='post'>
                                          <div class='row form-group'>
                                            <div class='col-md-12'>
                                              <button type='submit' name='logout-submit' class='btn btn-primary px-4 py-2'>Log Out</button>
                                            </div>
                                          </div>
                                </form>
                          <?php
                          }else {
                          ?>
                            <li>
                            <a href="signup.php">Create An Account</a>
                            </li>
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
                        <?php
                          }
                        ?>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/modelBG.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Available Models</h1>
          </div>
        </div>
      </div>
    </div>

    <?php
        include_once 'includes/dbh.inc.php';
        $sql = "SELECT * FROM Models";
        $getResults= sqlsrv_query($conn, $sql);
        // echo ("Reading data from table" . PHP_EOL);
        if ($getResults == FALSE){
          echo (sqlsrv_errors());
        }

    ?>

    <div class="limiter">
		<div style = "background: #fff" class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr style = "Background : #222" class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">GCode</th>
								<th class="column3">Number of Prints</th>

							</tr>
						</thead>
						<tbody>
              <?php
              while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
                // Debug
                $Name = $row["KeyWord"];
                $GCode = $row["gcodeFile"];
                $NumberOfPrints = $row["NumberOfPrints"];

              ?>
		              <tr>
			                 <td><?= $Name?></td>
			                 <td><?= $GCode?></td>
			                 <td><?= $NumberOfPrints?></td>
		             </tr>
              <?php
              }
              sqlsrv_free_stmt($getResults);
              ?>
						</tbody>
					</table>
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
                      <?php
                        if(isset($_SESSION['email'])){
                      ?>
                          <li><a href="#">Upload Model</a></li>
                      <?php
                        }else {
                      ?>
                          <li><a href="signup.php">Create An Account</a></li>
                        <?php
                        }
                      ?>
                      <li><a href="#">Communicating With Alexa</a></li>
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
