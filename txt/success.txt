<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    } else {
        $user_id = $_GET['id'];
        $confirm_query = "UPDATE users_items SET status='Confirmed' WHERE user_id = $user_id";
        $confirm_query_result = mysqli_query($link, $confirm_query) or die(mysqli_error($link));
    }
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
  require "header.php"
  ?>

  <div id="colorlib-work">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Success</h2>
            </div><br>
            <div class="row text-center" align="center">
                <div class="col-xs-6 col-xs-offset-3">
                  <h1>ORDER CONFIRMED</h1>
                  <div class="panel-body">
                    <p>Your order is confirmed. Thank you for shopping with us. <a href="store.php">Click here</a> to purchase any other item.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
  
  <?php 
  require "footer.php"
  ?>
</body>
</html>