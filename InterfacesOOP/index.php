<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php

//Interfaces a way to create a blue print which we can then implement into classes
interface PaymentInterface {
    public function payNow();
}

class Paypal implements PaymentInterface {
    public function loginFirst(){}
    public function payNow(){}//What if Paypal requires a user to login but Visa and Cash Don't
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {//Visa doesn't require a login to complete payment
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}
class Cash implements PaymentInterface {//Cash doesn't require a login to complete payment
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct {//Here we will create a function that will help to determine any type of payment we intend to use
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess(); //This will perform the payment process function instead of having to create a login & payNow method
        
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);







?>
    
</body>
</html>