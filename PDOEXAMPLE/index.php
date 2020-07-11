<?php
$host = 'localhost';
$user = 'therealsiji';
$password = 'developer';
$dbname = 'pdoposts';

//SET DSN
//DSN is a data source name which is a string that has the associative data structure to describe a connection to a data source
$dsn = 'mysql:host='.$host .';dbname='.$dbname;
$pdo = new PDO($dsn, $user,$password);
//Create a pdo instance
// try{
//     $pdo = new PDO($dsn, $user,$password);
//     throw new PDOException("Check your connection fam!");
// }
// catch(PDOException $e){
//     $e->getMessage();
// }


$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);//tHIS MAKES DATA FETCHED FROM DATABSE TO BE IN TO BE OBJ BY DEFAULT AND YOU CAN OVERRIDE IT

//PDO QUERY

// $stmt = $pdo->query('SELECT * from posts');
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //This get fetched like an associative array
//     echo $row['title'].'<br/>';
// }

// while($row = $stmt->fetch(PDO::FETCH_OBJ)){//This get fetched like an object
//     echo $row->title.'<br/>';
// }

// while($row = $stmt->fetch()){//This get fetched like an object
//     echo $row->title.'<br/>';
// }

#PrePared statement --> we have two main methods and that is prepare and execute

//UNSAFE WAY
// $sql = "SELECT * FROM posts WHERE author = '$author'";


//FETCH MULTIPLE POSTS(WHEN USING PREPARED STATEMENT THERE IS BASICALLY TWO WAYS TO DO THIS YOU CAN USE *postional parameters and named parameters*)
//Postional parameters are supported by mysqli(we made use of question marks)...

// User Input
$author = 'Siji';
$is_published = true;
// $id = 1;
//POSTIONAL PARAMETERS
// $sql = 'SELECT * FROM posts WHERE author = ?';
// $stmt = $pdo->prepare($sql); //This will prepare my statement
// $stmt->execute([$author]); //Here the '?' in line 43 get replaced with the variable $author = 'Siji'
// $posts = $stmt->fetchAll();



//Named Parmeters
// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published'; //Here we use coloumn(':') instead of '?'
// $stmt = $pdo->prepare($sql); //This will prepare my statement
// $stmt->execute(['author'  => $author, 'is_published' => $is_published]); //Here the ':' in line 43 get replaced with the variable $author = 'Siji'
// $posts = $stmt->fetchAll();


// var_dump($posts);

// foreach($posts as $post){
//     echo $post->title.'<br/>';
    
// }



//SINGLE POST
// $sql = 'SELECT * FROM posts WHERE id = :id'; //Here we use coloumn(':') instead of '?'
// $stmt = $pdo->prepare($sql); //This will prepare my statement
// $stmt->execute(['id' => $id]); //Here the ':' in line 43 get replaced with the variable $author = 'Siji'
// $post = $stmt->fetch();

// echo $post->body;


//GET ROW COUNT
// $stmt = $pdo->prepare('SELECT * FROM POSTS WHERE author = ?'); //This will prepare my statement
// $stmt->execute([$author]); //Here the ':' in line 43 get replaced with the variable $author = 'Siji'
// $postCount = $stmt->rowCount();
// echo $postCount;//Returns two bcus there are two authors that  is Siji


// //INSERT DATA
// $title = 'Post Five';
// $body = 'This is post five';
// $author = 'Yuki';
// $sql = 'INSERT INTO posts(title,body,author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' =>$body, 'author' => $author]);
// echo 'Post Added';


//UPDATE
// $id = 3;
// $title = "Update posts";
// $body = "This is the updated post!";
// $sql = "UPDATE posts SET title=':title', body = ':body' WHERE id = :id' ";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['body'=>$body, 'title'=>$title]);
// echo "Post Updated!";

//DELETE
$id = 6;
$sql = "DELETE FROM posts WHERE id = :id' ";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
echo "Post Deleted!";
?>