<?php
include_once('db.php');
include_once('commentRespond.php');
$database = new Database();
$db = $database->connect();

$comments = new Comment($db);
if($comments->createComment()){
  echo 'Comment Submitted!';
}else{
  echo 'error in connection';
}

?>
