<!-- Configuration to connect to the database -->

<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'aff13');
	define('DB_PASSWORD', '4076603');
	define('DB_NAME', 'aff13');
	 
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>