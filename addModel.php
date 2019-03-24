<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Replicator - Add Model</title>
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

  <div class="site-wrap" style="background-color:#F8F8F8;">

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
                <h2 class="mb-0 site-logo"><a href="index.php" style="color:black;">Replicator</a></h2>
                <!--<div class="col-md-10 text-center">
                  <h1 class="mb-4">Adding A New Model</h1>
                </div>-->

              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3" style="color:black;"></span></a></div>
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
                               <button type="submit" value="" class="btn btn-primary px-4 py-2">Sign In</button>
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





    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">

          <form action="includes/addModel.inc.php" class="p-5 bg-white" method="POST">
              <h1 class="mb-4">Adding A New Model</h1>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold">Name of the Item</label>
                <input type="name" id="name" name ="name"class="form-control" placeholder="Name">
              </div>
            </div>



            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">GCode/G File</label>
              </div>
            </div>


            <?php
              if(isset($_FILES['gcode'])){
                  $errors= array();
                  $file_name = $_FILES['gcode']['name'];
                  $file_size = $_FILES['gcode']['size'];
                  $file_tmp = $_FILES['gcode']['tmp_name'];
                  $file_type = $_FILES['gcode']['type'];
                  $file_ext=strtolower(end(explode('.',$_FILES['gcode']['name'])));

                  $extensions= array("gcode","g");

                  if(in_array($file_ext,$extensions)=== false){
                     $errors[]="extension not allowed, please choose a G or Gcode file.";
                  }

                  /*if($file_size > 2097152) {
                     $errors[]='File size must be excately 2 MB';
                  }*/


/*You need to set the value of upload_max_filesize and post_max_size in your php.ini :

; Maximum allowed size for uploaded files.
upload_max_filesize = 40M

; Must be greater than or equal to upload_max_filesize
post_max_size = 40M*/


                  if($file_size > 52428800) {
                     $errors[]='File size must be less than 50MB';
                  }

                  if(empty($errors)==true) {
                     move_uploaded_file($file_tmp,"gcode/".$file_name);
                     echo "Success";
                  }else{
                     print_r($errors);
                  }
              }
            ?>
          <form action="" method="POST" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-md-12">
                    <input type = "file" name = "gcode"/>
                    <input type="submit"/>
                </div>
              </div>
          </form>
            <!--   <ul>
                  <li>Sent file: <?php echo $_FILES['gcode']['name'];  ?>
                  <li>File size: <?php echo $_FILES['gcode']['size'];  ?>
                  <li>File type: <?php echo $_FILES['gcode']['type'] ?>
               </ul>-->

               <div class="row form-group" style="margin-left:0.5px; background-color:#fff; width:100%;">
                 <div class="col-md-12">
                   </form>
                   <button type="submit" name = "addModel-submit"class="btn btn-primary px-4 py-2" style="margin-left:40px;">Add Model</button>
                 <p></p>
                 </div>
               </div>

            </form>
          </div>
        </div>
      </div>
    </div>


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
