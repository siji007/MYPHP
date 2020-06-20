<?php 
   require('config/config.php');
   require('config/db.php');
  
  //Create query
 $query = 'SELECT *FROM posts ORDER BY created_at DESC';


$result = mysqli_query($sql, $query);


//Fetch data(it will give an associative all)

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);



// $post = mysqli_fetch_assoc($result);

//mysqli_fetch_assoc will basically take that one post  and turn it into an associative of array

// var_dump($posts); //Use to display the whole content of the table created in form of associative array


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
    <div class="container">
    <h1 class="display-3">Bloggy</h1>

    <!-- <?php foreach($posts as $key=>$post){
        echo $key.':'.$post['body'].','.$post['author'].'<br>';
    } 
    ?>-->
   
   <?php foreach($posts as $post) : ?>

        <div class="card mt-4 bg-light p-2">
            <h1 class="font-bold"><?php echo $post['title'] ?></h1>
            <small>Created on <?php echo $post['created_at']?> by
            <?php echo $post['author']?>
            <p>
                <?php echo $post['body']
                ?>
            </p>
            <a class="btn btn-default" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id']; ?>">Read more</a>
        </small>
        </div>
    <?php endforeach; ?>
    </div>
    
</body>
</html>