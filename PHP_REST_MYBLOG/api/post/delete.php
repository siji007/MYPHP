<?php
// Headers
header('Access-Control-Allow-Origin: *'); //we put '*' because it is a complete public API it can be accessed by anybody
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../../config/db.php';
include_once '../../models/post.php';

//Instantiate DB & CONNECT

$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Post($db);


//Get raw posted data
$data = json_decode(file_get_contents("php://input"));//This is gonna get the posted data

//Set ID to delete
$post->id = $data->id;


//Delete Post
if($post->delete()){
    echo json_encode(
        array('message' => 'Post Deleted!')
    );
}else{
    echo json_encode(
        array('message' => 'Post Not Deleted!')
    );
}