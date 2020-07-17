<?php
include_once('db.php');
class Comment{
  // private $conn;
  private $table = 'comments';

  //Comment properties
  
  public $name = $_POST['username'];
  public $comments = $_POST['comments'];

  //
  public function __construct($db){
    $this->conn = $db;
  }
  public function createComment(){
    if(isset($_POST['submit'])){
    $query = 'INSERT INTO '.$this->table.'
    SET
    name = :name,
    comments = :comments';
    $stmt = $this->conn->prepare($query);

    //Bind Data
    $stmt->bindParam(':Name',$this->name);
    $stmt->bindParam(':Comments', $this->comments);

    if($stmt->execute()){
      echo 'Successfully submitted';
    }else{
      echo 'Error dey oh!';
    }
  }
}
}
?>
