<?php 
// Include the database configuration file  
session_start();
require_once 'config.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $link->query("INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                header("Location: gallery.php");
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    } else { 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo '<p align="center">' . $statusMsg .'</p'; 
?>

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

  <link rel="stylesheet" href="grid-gallery.css">
  
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/modernizr.js"></script>
  </head
  >
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

    <div class="row" align="center">
      <h2>Upload Image</h2>
      <form action="upload_photo.php" method="post" enctype="multipart/form-data">
          <label>Select Image File:</label>
          <input type="file" name="image"><br>
          <input class="btn btn-primary" type="submit" name="submit" value="Upload">
      </form>
    </div>
  </div>
</div>

  <?php 
  require "footer.php";?>

</body>
</html>