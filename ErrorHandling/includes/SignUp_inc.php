<?php

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $email = $_POST['email'];

    if(empty($user) || empty($password) || empty($phone) || empty($email)){
        header("Location: ../index.php?signup=empty");
    }
    else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?signup=invalidemail");
        }
        else{
            echo "Sign up the user!";
        }
    }
}

else{
    header("Location: ../index.php?signup=success");
}



?>