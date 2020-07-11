<?php
declare(strict_types = 1);
include './includes/autoload.inc.php';

?>

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
<h1 class="display-4 text-center text-warning">Building A Calculator</h1>
<div class="card" style="width: 29%;top:40px;left:0;right:0;bottom:0;margin:auto">
    <form class="pt-2 pl-3"  action="includes/calc.inc.php" style="margin:auto;top:0;left:0;right:0;bottom:0;" method="post">
       
        <div class="form-group">
            <label>Enter first number</label>
            <input type="number"   class=" form-control w-100" name="num1">
        <!--the step syntax is used to incase of a decimal number-->
        </div> 
        <div class="form-group">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
        </div>
        <div class="form-group">
            <label>Enter Second number</label>
            <input type="number" name="num2" class=" form-control w-100">
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Calculate</button>
        </div>
    </form>

    
</body>
</html>