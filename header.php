<?php 
    // Initialize the session
    session_start(); 
?>

<nav id="colorlib-main-nav" role="navigation">
	<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
	<div class="js-fullheight colorlib-table">
		<div class="colorlib-table-cell js-fullheight">
			<div class="row">
				<div class="col-md-12">
				    <?php 
				        if($_SESSION['id'] == "" or $_SESSION['id'] == NULL) {
				        	echo '<a href="signup.php"><input class="btn btn-primary" type="Submit" name="Register" value="Register"></a>'; // Or, user can register
				            echo '<a href="login.php"><input class="btn btn-primary" type="Submit" name="Login" value="Login"></a><br>'; // If the user isn't logged in, they will be referred to the log in page
				        } else {
				        	echo "Welcome, " . $_SESSION['name'] . "!<br>";
				            echo '<a href="logout.php"><input class="btn btn-primary" type="Submit" name="Logout" value="Logout"></a>'; // Else, they will be given an option to sign out of the forum
				    	}
				    ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="store.php">Store</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="characters.php">Characters</a></li>
						<li><a href="contact.php">About the Author</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="colorlib-navbar-brand">
						<a class="colorlib-logo" href="index.php"><span>Mo</span><span>tw</span></a>
					</div>
					<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
				</div>
			</div>
		</div>
	</header>