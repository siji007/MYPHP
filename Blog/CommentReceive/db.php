<?php
class Database{
  public $db_name = 'blogcomment';
  public $db_user='therealsiji';
  public $db_password = 'developer';
  public $host = 'localhost';
  public $conn;

  public function connect(){
    $this->conn = null;
    try{
      $this->conn = new PDO('mysql:host='.$this->host. ';dbname='. $this->db_name,$this->db_user,$this->db_password);
      $this->conn = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $err){
      echo 'Connection Error: '.$err->getMessage();
    }
    return $this->conn;
  }


}
?>
