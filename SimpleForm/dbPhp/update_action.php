<?php
require('config.php');
// $id = $_GET['idd'];

// session_start();
//
$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$id = $_POST['id'];
// TESTING OUT SESSION
// $_SESSION['username'] = $user;
// $_SESSION['phone_no'] = $phone;
// $_SESSION['password'] = $pass;
//
header('location: ../index.php');

if(isset($_POST['update'])){
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
     $query = "UPDATE myusers SET Username = '$user', PhoneNumber ='$phone' WHERE id = '$id' ";

      if(mysqli_query($sql, $query)){
          echo "Your Form Successfully ReSubmitted";
      }else{
          echo mysqli_error($sql);
      }
      mysqli_close($sql);
      header('Location: ../index.php');
  }
}

?>
