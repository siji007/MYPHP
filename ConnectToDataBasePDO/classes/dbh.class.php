<?php
//When using a class autoload function ,it is important that we name our classes the same way we name our document files
//so if you call your document "dbh.blah.blah" you also call your class "dbh" also!!!!
class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "ConnectToDataBase";

    //we are creating a protected method because it is goin to be containing our connection to the actual database

    protected function connect(){
        //here in PDO we are only using mysql database not my sql statement

        $dsn = 'mysql:host=' . $this->host . ';dbname ='. $this->dbName;

        //Next thing we are going to be doing here is creating a new PDO Connection
        //the syntax "new  PDO() represent connection between PHP and Database server';[e"

        $pdo = new PDO($dsn, $this->user ,$this->pwd);
        
        //At some point in our code we are going to be fetching data and we are going to be connecting to the database
        //and we  need to decide how we want to pull out data from the database,so there is parameter we need to insert inside our
        //connection to the database when we need to pull out data
        //so we cdan set a default attribute for like how we want to pull out the data,so we don't have to define it again and again.

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //PDO::FETCH_ASSOC Means where we fetch the dta from in the database

    }

}













?>