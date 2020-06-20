<?php 
require('config/config.php');
require('config/db.php');
  
//Check For Submit
// 'isset' determines if a variable is declared

if(isset($_POST['submit'])){
    
    $title = mysqli_real_escape_string($sql, $_POST['title']);  //mysqli_real_Escape_string() will protect us from harmful shit that people can do
    $body = mysqli_real_escape_string($sql,$_POST['body']);
    $author = mysqli_real_escape_string($sql,$_POST['author']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

    if(mysqli_query($sql, $query)){
        header('Location: '.ROOT_URL.''); //it will redirect to the root
    }else{
        echo 'ERROR: '. mysqli_error($sql);
    }

}
  
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
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea type="text" name="body" class="form-control"></textarea>
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-info">
    </form>
    </div>
    <?php include('inc/footer.php'); ?>


</body>
</html>