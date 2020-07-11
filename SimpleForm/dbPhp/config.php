<?php
$sql = mysqli_connect("localhost", "therealsiji", "developer", "datainfo");
if(!$sql){
    echo "Invalid Database :" + mysqli_connect_error();
}

//Exception
// class DatabaseEr extends Exception{
//     public function errorMessage(){
//         $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <br>'.$this->getMessage().'</br> is not a valid Database Connection';
//         return $errorMsg;
//     }
// }
// $sql = mysqli_connect("localhost","therealsiji", "developer", "datainfo");

// try{
//     if(mysqli_connect_error()){
//         throw new Exception("Something Went Wrong with the databaseconnection check your database name and username again!");
//     }
// }
// catch(DatabaseEr $e){
//     echo $e->errorMessage();
// };


//Another type
// try{
//     $mysql = mysqli_connect("localhost","therealsiji", "developer", "datainfo44");
//     if(mysqli_connect_error()){
//         throw new Exception(mysqli_connect_error());
//     }
//     $sql = "SELECT * FROM username LIMIT 5";
//     $result = $mysql->query($sql);
//     if(!$result){
//         throw new Exception($mysql -> error);
//     } 
//     while($row = $result->fetch_object()){
//         $results[] = $row;
//     }  
// }
// catch (Exception $e){
//     print_r($e);
// }

?>