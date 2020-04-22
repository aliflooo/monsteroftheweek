<?php 
    // Initialize the session
    require "config.php";
    session_start(); 
?>

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monster of the Week</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>

  </head>
  <body>
    <?php
    require "header.php";
    ?>
   
    <div id="colorlib-work">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Login</h2>
            </div><br>
            <div class="row text-center" align="center">
                <div class="col-xs-6 col-xs-offset-3">
                    <h1>LOGIN</h1>
                    <div class="form-group">
                      <form method="post" action="login_submit.php">
                          <div class="form-group">
                              <strong>Email Address:</strong>
                              <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                          </div>
                          <div class="form-group">
                              <strong>Password:</strong>  
                              <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                          </div>
                          <div class="form-group">
                              <input type="submit" value="Login" class="btn btn-primary">
                          </div>
                        </form>
                    </div>
                  <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                </div>
            </div>
        </div>
    </div>

   <?php 
   require "footer.php";
   ?>
  </body>
</html>
