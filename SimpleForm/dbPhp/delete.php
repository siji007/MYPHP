<?php
require_once('config.php');
$id = $_GET['idd'];
$query = "DELETE FROM `myusers`  WHERE  `id` = $id";
mysqli_query($sql,$query);
mysqli_close($sql);
header('Location: ../index.php');
?>
