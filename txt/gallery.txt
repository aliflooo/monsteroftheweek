<?php
	session_start(); 
    require "config.php";
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
	<link rel="stylesheet" href="css/gallery.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
  	<script src="js/vendor/jquery.js"></script>
  	<script src="js/vendor/modernizr.js"></script>

	</head>
	<body>
	<?php 
	require "header.php";
	?>

	<div id="colorlib-blog">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Gallery</h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span>View our Gallery</span>
					<h2>View Official Artwork</h2>
				</div>
			</div>
			<div align="right">
				<a href="upload_photo.php" class="btn btn-primary">Upload Image</a>
			</div>
			<hr>

			<div class="images">
			<?php 
			// Include the database configuration file  
			require_once 'config.php'; 
			 
			// Get image data from database 
			$result = $link->query("SELECT image FROM images ORDER BY uploaded DESC"); 
			?>

			<?php if($result->num_rows > 0) { ?> 
			    <div class="gallery"> 
			        <?php while($row = $result->fetch_assoc()) { ?> 
			            <img width="300" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
			        <?php } ?> 
			    </div> 
			<?php } else { ?> 
				    <p class="status error">Image(s) not found...</p> 
			<?php } ?>
			</div>
		</div>
	</div>
		
	<?php 
	require "footer.php";?>
	
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

