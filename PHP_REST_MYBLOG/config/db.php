<?php
class Database{
    private $host = 'localhost';
    private $db_name = 'myrestblog';
    private $username = 'therealsiji';
    private $password = 'developer';
    private $conn;

    //DB CONNECT
    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname='. $this->db_name,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $err){
            echo 'Connectionn Error: '.$err->getMessage();
        }
        return $this->conn;
    }
}

?>