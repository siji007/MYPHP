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


//Blog post query
$result = $post->read();

//Get row count
$num = $result->rowCount();

//Check if any posts
if($num > 0){
    //If there is post initialize array
    $posts_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = array(
            'id'=> $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $category_id,
            'category_name' => $category_name
        );

        
        //Push to "data"
        array_push($posts_arr['data'], $post_item);
    }
    //Turn to JSON & OUPUT
    echo json_encode($posts_arr);
    
} else{
    echo json_encode(
        array('message' => 'No Posts found')
    );
}
?>