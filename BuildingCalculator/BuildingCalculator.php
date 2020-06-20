<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Calculator</title>
    <style>
        .answer{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="display-4 text-center text-warning">Building A Calculator</h1>
<div class="card" style="width: 29%;top:40px;left:0;right:0;bottom:0;margin:auto">
    <form class="pt-2 pl-3" style="margin:auto;top:0;left:0;right:0;bottom:0;" action="BuildingCalculator.php" method="post">
       
        <div class="form-group">
            <label>Enter first number</label>
            <input type="number" step="0.01"   class=" form-control w-100" name="num1">
        <!--the step syntax is used to incase of a decimal number-->
        </div> 
        <div class="form-group">
            <label>Enter Operator</label>
            <input type="text" name="op" class=" form-control w-100">
        </div>
        <div class="form-group">
            <label>Enter Second number</label>
            <input type="number" name="num2" class=" form-control w-100">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-success">
        </div>
    </form>
    </div>
    <br><br><br><br><br>
    <div class="answer">
    Answer:
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1-$num2;

    }elseif($op == "/"){
        echo $num1 / $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }else{
        echo "Invalid Operator";
    }
    ?>
    </div>  
</body>
</html>