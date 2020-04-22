<?php 
    // Initialize the session
    session_start(); 
    require "check_if_added.php";
?>

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monster of the Week</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h2 class="bold">Store</h2>
      </div>
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
          <span>Official Monster of the Week Merchandise</span>
          <h2>Welcome to Archie's Bizarre Bazaar!</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div align="right">
        <a href="checkout.php" class="btn btn-primary">Checkout</a><br>
        <hr>
      </div>

      <div class="col-md-12 col-md-offset-0">
      <!-- Item 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/magic.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Using Magic For Dummies</h4>
                  <span>Price: $24.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(1)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/leather.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Leather Jacket</h4>
                  <span>Price: $42.00</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(2)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/keychain.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Mustang Keychain</h4>
                  <span>Price: $1.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(3)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/welcome.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Welcome Mat</h4>
                  <span>Price: $0.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(4)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/encyc.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Encyclopedia Britannica, Weird Edition</h4>
                  <span>Price: $24.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(5)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/rubiks.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Archie's Rubik's Cube</h4>
                  <span>Price: $4.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(6)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 7 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/ball.jpg" class="blog-img"> 
              </a>
              <center>
                <div class="caption">
                  <h4>Magic 8-Ball</h4>
                  <span>Price: $7.25</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(7)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 8 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/walkman.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Wilhelm’s Spectral Walkman</h4>
                  <span>Price: $42.00</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(8)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 9 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/adder.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Adder Stone</h4>
                  <span>Price: $13.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(9)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 10 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/journal.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4><i>The First Crossing</i></h4>
                  <span>Price: $16.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(10)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 11 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="waffle.php">
                  <img src="images/waffle.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Eldritch Waffle House Mug</h4>
                  <span>Price: $6.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(11)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=11" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>

      <!-- Item 12 -->
      <div class="col-md-3 col-sm-6">
        <div class="shop-item">
          <div class="thumbnail">
              <a href="checkout.php">
                  <img src="images/glasses.jpg" class="blog-img">
              </a>
              <center>
                <div class="caption">
                  <h4>Magic Eye Glasses</h4>
                  <span>Price: $10.99</span>
                  <?php if(!isset($_SESSION['email'])){  ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else {
                      if(check_if_added_to_cart(12)) {
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                      } else {
                        ?>
                        <a href="add_to_cart.php?id=12" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                      }
                    }
                  ?>
                </div>
              </center>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <?php 
  require "footer.php";
  ?>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Owl Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>

  </body>
</html>