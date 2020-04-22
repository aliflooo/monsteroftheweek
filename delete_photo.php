<?php
session_start(); 
include 'config.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the poll ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        die ('Image doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete file & delete record
            unlink($image['path']);
            $stmt = $pdo->prepare('DELETE FROM images WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            // Output msg
            $msg = 'You have deleted the image!';
        } else {
            // User clicked the "No" button, redirect them back to the home/index page
            header('Location: index.php');
            exit;
        }
    }
} else {
    die ('No ID specified!');
}
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
  require "header.php"; ?>

  <div class="content delete">
    <h2>Delete Image #<?=$image['id']?></h2>
      <?php if ($msg): ?>
      <p><?=$msg?></p>
      <?php else: ?>
    <p>Are you sure you want to delete <?=$image['title']?>?</p>
      <div class="yesno">
          <a href="delete.php?id=<?=$image['id']?>&confirm=yes">Yes</a>
          <a href="delete.php?id=<?=$image['id']?>&confirm=no">No</a>
      </div>
      <?php endif; ?>
  </div>

  <?php 
  require "footer.php";?>
</body>
</html>