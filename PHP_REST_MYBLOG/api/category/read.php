<?php
header('Access-Control-Allow-Origin: *'); //we put '*' because it is a complete public API it can be accessed by anybody
header('Content-Type: application/json');

include_once '../../config/db.php';
include_once '../../models/category.php';

//Instantiate DB & CONNECT

$database = new Database();
$db = $database->connect();

// Instantiate category object
$post = new Category($db);

//Category query
$result = $post->read();

//Get row count
$num = $result->rowCount();







?>