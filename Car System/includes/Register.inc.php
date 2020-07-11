<?php

require('../config/db.php');

$phoneNumber = $_POST['PhoneNumber'];
$name = $_POST['fullname'];
$NextofKin = $_POST['NextOfKin'];
$nextKinNo = $_POST['NextOfKinPhoneNumber'];
$gender = $_POST['gender'];
$carColor = $_POST['carColor'];
$carPlate = $_POST['carPlate'];
$carModel = $_POST['carModel'];
$carChassisNumber = $_POST['carChassis'];

// $nameErr="";

if(isset($_POST['myForm'])){
  if(!preg_match("/^[a-zA-Z]\s*$/",$name)){
    header('Location: ../Register.php?nameerror');
    // $nameErr= "Name must contain only alphabets Only!";
  }
  else if(!preg_match("/^[a-zA-Z]*$/",$carColor)){
    header('Location: ../Register.php?inputerror');
    // $colorErr = "Color must only Contain Alphabet!";
  }
  else if(!preg_match("/^[a-zA-Z]*$/",$carModel)){
    header('Location: ../Register.php?carmodelerror');
    // $carModelErr = "Car Model must only Contain Alphabet!";
  }
  else if(!preg_match("/^[0-9A-Z]*$/",$carPlate)){
    header('Location: ../Register.php?carplateerror');
    // $carPlate = "Color must only Contain Alphabet and Numbers!";
  }
  else{
    $pdo;
     $query = 'INSERT INTO users(Name,Next_Of_Kin,Phone_Number,Gender,Next_Of_Kin_Phone_Number,Car_Plate_Number,Car_Color,Car_Model,Car_Chassis_Number)
     VALUES(:Name,:Next_Of_Kin,:Phone_Number,:Gender,:Next_Of_Kin_Phone_Number,:Car_Plate_Number,:Car_Color,:Car_Model,:Car_Chassis_Number)' ;

     $stmt = $pdo->prepare($query);
     // $stmt->execute(['Name' => $name,'Next_of_Kin'=>$NextofKin,'Phone_Number'=>$phoneNumber,'Gender'=>$gender,'Next_of_kin phone_number'=>$nextKinNo,'Car_Plate_Number'=>$carPlate,'Car color'=>$carColor,'Car Model'=>$carModel,'Car_chassis_number'=>$carChassisNumber]);
     // if(mysqli_query($pdo, $query)){
     //        header('Location: ../Register.php?registrationsuccessful');
     //    }else{
     //      echo mysqli_error($pdo);
     //    }
     //    mysqli_close($pdo);
     $stmt->bindParam(':Name', $name);
     $stmt->bindParam(':Next_Of_Kin',$NextofKin);
     $stmt->bindParam(':Phone_Number',$phoneNumber);
     $stmt->bindParam(':Next_Of_Kin_Phone_Number',$nextKinNo);
     $stmt->bindParam(':Gender',$gender);
     $stmt->bindParam(':Car_Plate_Number',$carPlate);
     $stmt->bindParam(':Car_Color',$carColor);
     $stmt->bindParam(':Car_Model',$carModel);
     $stmt->bindParam(':Car_Chassis_Number',$carChassisNumber);

     //Execute Query
     if($stmt->execute()){
       // include 'success.php';
       echo "Done";
     }
     //Print error if something goes wrong
     printf("Error: %");
  }

}

?>
