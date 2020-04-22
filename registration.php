<?php
    require 'config.php';
    session_start();
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email =mysqli_real_escape_string($link, $_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

    if(!preg_match($regex_email, $email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($link,$_POST['password'])));
    if(strlen($password) < 6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }

    $duplicate_user_query = "SELECT id FROM users WHERE email = '$email'";
    $duplicate_user_result = mysqli_query($link, $duplicate_user_query) or die(mysqli_error($link));

    $rows_fetched = mysqli_num_rows($duplicate_user_result);
    if($rows_fetched > 0) {
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("User already exists!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    } else {
        $user_registration_query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";
        //die($user_registration_query);
        $user_registration_result = mysqli_query($link, $user_registration_query) or die(mysqli_error($link));
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id'] = mysqli_insert_id($link); 
        //header('location: store.php');  //for redirecting
        ?>
        <script>
            window.alert("User successfully registered!");
        </script>
        <meta http-equiv="refresh" content="3;url=login.php"/>
        <?php
    }
?>