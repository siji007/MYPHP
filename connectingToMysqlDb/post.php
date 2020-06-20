<?php 
require('config/db.php');
require('config/config.php');

//check for delete
if(isset($_POST['delete'])){
  $delete_id  = mysqli_escape_string($sql,$_POST['delete']);

  $query = "DELETE FROM posts WHERE id = {$delete_id}";

  if(mysqli_query($sql, $query )){
    header('Location: '.ROOT_URL.'');
  }else{
    echo 'ERROR: '.mysqli_error($sql);
  }
}



  // get ID 
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
<?php include './inc/navbar.php' ?>

    <div class="content">
    <h1 class="display-3 mb-3">Bloggy</h1>
    <a href="<?php echo ROOT_URL ?>" class="btn btn-default">Back</a>
    <!-- The Read More Content -->
    <h1><?php echo $post['title'] ?></h1>
    <small>Created on <?php echo $post['created_at']; ?> by 
    <?php echo $post['author']; ?>
    <p><?php echo $post['body']; ?></p>
    <hr>

    <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">

    <input type="submit" class="btn btn-danger" name="delete" value="Delete">
    </form>

    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>

    </small>
    </div>
</body>
</html>