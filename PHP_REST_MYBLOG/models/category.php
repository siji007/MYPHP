<?php
class Category{
    //DB STUFF
    private $conn;
    private $tables ;
    public $id;
    public $name;
    public $created_at;

    //Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    public function read(){
        $query = 'SELECT id,
        name
        FROM
        '.$this->table.'ORDER BY created_at DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

?>