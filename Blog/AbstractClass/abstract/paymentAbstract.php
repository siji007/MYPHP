<?php
abstract class Visa{//abstract class can never have an object,we also use them to reference to a particular stuff
    abstract public function getPayment();//if any class extends to this abstract class they have to include a get payment method
    // in that class it extends to so that there won't be error

}


?>