<?php 
    // Initialize the session
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

	<!-- About -->
	<div id="colorlib-about">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Home</h2>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="item">
						<img class="img-responsive about-img" src="images/motw.jpg">
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<div class="about-desc">
						<div class="item">
							<h2><span>Monster of the </span><span>Week</span></h2>
						</div>
						<div class="desc">
							<div class="rotate">
								<h2 class="heading">Summary</h2>
							</div>
							<p><i>Monster of the Week</i> follows a group of people - dubbed the Hunters, the Argonauts, and whatever else they decide - as they venture beyond their mundane world and encounter the Weird. Caught between a mysterious prophet and a secretive organization, they embark on a roadtrip across the United States that will change their lives - and possibly the world as they know it - forever. </p>
							<p><a href="characters.php" class="btn btn-primary">Meet the Characters</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Series -->
	<div id="colorlib-testimony">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Books</h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span>Read Them All</span>
					<h2>The Books</h2>
				</div>
			</div>
			<div class="row animate-box">
				<!-- <div class="owl-carousel"> -->
					<div class="item">
						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/twilight_zone.jpg"><br>
									<h4>Twilight Zone</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/tusk.jpg"><br>
									<h4>Tusk</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/shattered.png"><br>
									<h4>Walkin' On Sunshin</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/junk.png"><br>
									<h4>Amusement Park USA</h4>
								</div>
							</div>
						</div>													
					</div>

<!-- 					<div class="item">
						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/design.png">
									<h4>Centerfold</h4>
								</div>
							</div>
						</div>	

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/tusk.jpg">
									<h4>A Forest</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/twilight_zone.jpg">
									<h4>Happy Together</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/tusk.jpg">
									<h4>Listen</h4>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="item">
						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/twilight_zone.jpg">
									<h4>Maneater</h4>
								</div>
							</div>
						</div>	

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/tusk.jpg">
									<h4>Should I Stay or Should I Go</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/twilight_zone.jpg">
									<h4>It's the End of the World As We Know It</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3 text-center">
							<div class="article animate-box">
								<div class="blog-img">
									<img class="img-responsive about-img" src="images/tusk.jpg">
									<h4>Holding Out For a Hero</h4>
								</div>
							</div>
						</div>
					</div> -->

				<!-- </div> --> <!-- End of owl-carousel -->
			</div>
		</div>
	</div>

	<!-- Book Reviews -->
	<div id="colorlib-testimony">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Reviews</h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span>Testimonies</span>
					<h2>Readers Say</h2>
				</div>
			</div>

			<div class="row animate-box">
				<div class="owl-carousel">
					<div class="item">
						<div class="col-md-12 text-center">
							<div class="testimony">
								<blockquote>
									<p>"This series explores the divide between our world and the unknown in such a spectacular way that it leaves readers buzzing for adventure."</p>
									<span>&mdash; Anu Jayachandran</span>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-md-12 text-center">
							<div class="testimony">
								<blockquote>
									<p>"Monster of the Week is a classic return to the monster of the week shows from our childhood. You're initially introduced to a ragtag group who fight seemingly random monsters, but as the plot develops and the stakes are raised, you really become invested into their personal journeys! An instant classic with a lot of unique twists!"</p>
									<span>&mdash; Patrick Wishon</span>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-md-12 text-center">
							<div class="testimony">
								<blockquote>
									<p>"Even though Monster of the Week is a story about fantastical events and creatures, it quietly reminds us of the importance of the regular people we meet each day."</p>
									<span>&mdash; Mia Francisco</span>
								</blockquote>
							</div>
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

