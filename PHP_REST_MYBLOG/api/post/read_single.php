<?php
// Headers
header('Access-Control-Allow-Origin: *'); //we put '*' because it is a complete public API it can be accessed by anybody
header('Content-Type: application/json');

include_once '../../config/db.php';
include_once '../../models/post.php';

//Instantiate DB & CONNECT

$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Post($db);

//Get ID
$post->id = isset($_GET['id']) ? $_GET['id'] : die(); //This get the id

//Get Post
$post->read_single();

//Create array
$post_arr = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name
);

//Make JSON
print_r(json_encode($post_arr));
?>