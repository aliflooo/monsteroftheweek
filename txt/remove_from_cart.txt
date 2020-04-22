<?php
    require 'config.php';
    session_start();
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $delete_query = "DELETE from users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";
    $delete_query_result = mysqli_query($link, $delete_query) or die(mysqli_error($link));
    header('location: checkout.php');
?>