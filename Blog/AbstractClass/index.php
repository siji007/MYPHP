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
include_once "./abstract/paymentAbstract.php";
include_once "classes/BuyProduct.class.php";


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
?>


    
</body>
</html>