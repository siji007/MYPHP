<?php
require('dbPhp/config.php');
 ///eror here

//Tring to test out session

// session_start();

$myId = $_GET['idd'];

$query = "SELECT * FROM `myusers` WHERE `id` = '$myId' "; //Here just trying to create a read more display

$result = mysqli_query($sql, $query);

$datainfo = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card">
        <form action="dbPhp/update_action.php" method="post" name="myForm">
            <div class="form-group">
                <label for="" >Enter Name</label>
                <input class="form-control w-75" type="text" name="user" value="<?php echo $datainfo['Username']; ?>">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input class="form-control w-75" type="number" name="phone" value="<?= $datainfo['PhoneNumber']; ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control w-75" type="password" name="pass" value="<?= $datainfo['Password']; ?>">
            </div>
            <input class="btn btn-success btn-secondary" type="submit" value="submit" name="update">
        </form>
    </div>
</body>
</html>
