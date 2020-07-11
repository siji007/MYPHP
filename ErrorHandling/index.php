<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="card mycard">
        <form action="includes/SignUp_inc.php" method="post" name="myForm">
            <div class="form-group">
                <label for="" >Enter Name</label>
                <input class="form-control w-75" type="text" name="user">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input class="form-control w-75" type="number" name="phone">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control w-75" type="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control w-75" type="password" name="pass">
            
            </div>
            <input class="btn btn-success btn-secondary" type="submit" value="submit">
        </form>
    </div>



    
</body>
</html>