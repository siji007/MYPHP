<?php 
require('config/config.php');
require('config/db.php');
  
//Check For Submit
// 'isset' determines if a variable is declared

if(isset($_POST['submit'])){
    
    $title = mysqli_real_escape_string($sql, $_POST['title']);  //mysqli_real_Escape_string() will protect us from harmful shit that people can do
    $body = mysqli_real_escape_string($sql,$_POST['body']);
    $author = mysqli_real_escape_string($sql,$_POST['author']);
    $update_id = mysqli_real_escape_string($sql,$_POST['update_id']);

    $query = "UPDATE posts SET
                title = '$title',
                author = '$author',
                body = '$body'
                WHERE id = {$update_id};
    
    ";

    if(mysqli_query($sql, $query)){
        header('Location: '.ROOT_URL.''); //it will redirect to the root
    }else{
        echo 'ERROR: '. mysqli_error($sql);
    }

}
  
$id = mysqli_real_escape_string($sql,$_GET['id']); //Use to escape dangerous character or anything that is harmful

  //Create query

$query = 'SELECT *FROM posts WHERE id = '.$id; //Here just trying to create a read more display

$result = mysqli_query($sql, $query);

$post = mysqli_fetch_assoc($result);

//mysqli_fetch_assoc will basically take that one post  and turn it into an associative of array
// var_dump($posts);


//Free result
mysqli_free_result($result);

//Close Connection
mysqli_close($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Tailwind/dist/style.css">
</head>
<body>
    <div class="container">
    <h1 class="display-3">Bloggy</h1>
    <!-- php $_SERVER['PHP_SELF] will enable it to submit to it current page-->
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea type="text" name="body" class="form-control"><?php echo $post['body']; ?></textarea>
    </div>
    
    <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
    <input type="submit" name="submit" value="Submit" class="btn btn-info">
    </form>
    </div>

    
    
    <?php include('inc/footer.php'); ?>


</body>
</html>