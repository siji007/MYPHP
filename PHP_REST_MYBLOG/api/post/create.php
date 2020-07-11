<?php
// Headers
header('Access-Control-Allow-Origin: *'); //we put '*' because it is a complete public API it can be accessed by anybody
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
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
$data = json_decode(file_get_contents("php://input"));
$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;


//Create Post
if($post->create()){
    echo json_encode(
        array('message' => 'Post Created!')
    );
}else{
    echo json_encode(
        array('message' => 'Post Not Created!')
    );
}
?>