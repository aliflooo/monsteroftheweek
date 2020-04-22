<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id = $_SESSION['id'];
    $user_products_query = "SELECT it.id, it.name, it.price FROM users_items ut INNER JOIN items it ON it.id = ut.item_id WHERE ut.user_id = '$user_id' ";
    $user_products_result = mysqli_query($link, $user_products_query) or die(mysqli_error($link));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum = 0;
    if($no_of_user_products == 0) {
        //echo "Add items to cart first.";
    } else {
        while($row = mysqli_fetch_array($user_products_result)){
            $sum = $sum + $row['price']; 
       }
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
	require "header.php";
	?>

    <div id="colorlib-work">
	    <div class="container">
	      	<div class="row text-center">
	        	<h2 class="bold">Checkout</h2>
	      	</div>
	      	<div class="row">
	        	<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
	          		<span>Go forth, adventurer</span>
	          		<h2>Checkout</h2>
	       		</div>
	      	</div>

	        <div class="row">
	          <div class="col-sm-12">
	            <table class="table table-striped table-border checkout-table">
	              <tbody>
	                <tr>
	                  <th>Item Number</th>
	                  <th>Item Name</th>
	                  <th>Price</th>
	                  <th></th>
	                </tr>
	                <?php 
                        $user_products_result = mysqli_query($link,$user_products_query) or die(mysqli_error($link));
                        $no_of_user_products = mysqli_num_rows($user_products_result);
                        $counter = 1;
                       	while($row = mysqli_fetch_array($user_products_result)) { ?>
                        <tr>
                            <th><?php echo $counter ?></th>
                            <th><?php echo $row['name']?></th>
                            <th>$<?php echo $row['price']?></th>
                            <th><a href='remove_from_cart.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter = $counter + 1; } ?>
                        <tr>
                            <th></th>
                            <th>Total</th>
                            <th>$<?php echo $sum;?></th>
                            <th></th>
                        </tr>
	              </tbody>
	            </table>
	            <div align="right">
	            	<a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a>
	                <a href="store.php" class="btn btn-primary">Return to Store</a>
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