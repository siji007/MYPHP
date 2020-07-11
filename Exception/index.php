<?php
class CustomException extends Exception{
    public function errorMessage(){
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <br>'.$this->getMessage().'</br> is not a valid E-Mail address';
        return $errorMsg;
    }
}
$email = "Someone@example.com";
try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
        //Throw Exception if email is not valid!
        throw new CustomException($email);
    }

    if(strpos($email,"example") !== FALSE){
        throw new Exception("$email is an example email");
    }

}
catch (CustomException $e){
    echo $e->errorMessage();
}
catch (Exception $e){
    echo $e->getMessage();
}
?>
