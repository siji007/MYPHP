<?php
$host = "localhost";
$db_name = "carsystem";
$user = "therealsiji";
$password = "developer";

$dsn = 'mysql:host='.$host .';dbname='.$db_name;
try{
  $pdo = new PDO($dsn,$user,$password);
  throw new PDOException("Check your connection fam!");
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $e){
    $e->getMessage();
}

?>
