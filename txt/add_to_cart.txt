<?php
    require 'config.php';
    //require 'header.php';
    session_start();
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $add_to_cart_query = "INSERT INTO users_items (user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
    $add_to_cart_result = mysqli_query($link, $add_to_cart_query) or die(mysqli_error($link));
    header('location: store.php');
?>