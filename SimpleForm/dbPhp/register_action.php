<?php
require('config.php');

$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];


    if(empty($_POST['user']) || empty($_POST['phone']) || empty($_POST['pass'])){
        echo "No fields must be empty";
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $user)){ 
        echo "Username Must contain Numbers and Characters";
    }
    else if(strlen($pass) < 5){
        echo "Password must contain atleast 5 characters!";
    }
    else{
        $query = "INSERT INTO `myusers` (`Username`, `PhoneNumber`, `Password`) VALUES ('$user','$phone','$pass')";
        if(mysqli_query($sql, $query)){
            echo "Your Form Successfully Submitted";
        }else{
            echo mysqli_error($sql);
        }
        mysqli_close($sql);
        header('Location: ../index.php');
    }

?>