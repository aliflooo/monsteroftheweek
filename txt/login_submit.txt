<?php
    require 'config.php';
    session_start();
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email, $email)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }

    $password = md5(md5(mysqli_real_escape_string($link, $_POST['password'])));
    if(strlen($password) < 6){
        echo "Password should have at least 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $user_authentication_query = "SELECT id FROM users WHERE email = '$email'";
    $user_authentication_result = mysqli_query($link, $user_authentication_query) or die(mysqli_error($link));
    $rows_fetched = mysqli_num_rows($user_authentication_result);
    if($rows_fetched == 0) {
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
    } else {
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row['id'];  //user id
        header('location: store.php');
    } 
 ?>