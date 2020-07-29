<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php

//Create Connection
$sql = mysqli_connect('localhost', 'therealsiji', 'developer','myphpblog');

//Check Connection
if(mysqli_connect_error()){
    echo 'Failed to connect to MYSQL '. mysqli_connect_error();
}

?>
</body>
</html>
