 <?php
 require('../config/db.php');
 // require_once('includes/Register.inc.php');
 // echo "Hello world";

$search = $_GET['output'];
// echo $search;

// $dsn;

$query = "SELECT * from users WHERE Car_Plate_Number = :search LIMIT 0,1";

$stmt = $pdo->prepare($query);

$stmt->bindParam(':search', $search);

$stmt->execute();

$result = $stmt->fetch();

$name =  $result['Name'];

$nextOfKin = $result['Next_Of_Kin'];

$phoneNumber = $result['Phone_Number'];
$phoneNumber = $result['Phone_Number'];
$gender = $result['Gender'];
$carColor = $result['Car_Color'];
$carModel = $result['Car_Model'];
$carChassisNumber = $result['Car_Chassis_Number'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="js/jquery.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.css">
     <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/main.css">
     <title>Index</title>
 </head>
 <body class="mainBody" style="background-color:white;">
   <h1 class="text-center display-4">Result</h1>
   <div class="container">
     <div class="form-group bg-success">
       <h3>Full Name: <?php echo $name?></h3>
       <h3>Phone Number: <?php echo $phoneNumber?></h3>
       <h3>Next Of Kin: <?php echo $nextOfKin?></h3>
       <h3>Gender: <?php echo $gender?></h3>
       <h3>Car Color: <?php echo $carColor?></h3>
       <h3>Car Model: <?php echo $carModel?></h3>
       <h3>Car Chassis Number: <?php echo $carChassisNumber?></h3>
       <h3>Car Color: <?php echo $carColor?></h3>

     </div>
   </div>
 </body>
 </html>
