<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Header</title>
</head>
<body>
<h1 class="display-4 text-center">REGEX EXP!</h1>
<div class="card formContainer">
  <form name="regex" class="bg-warning" action="regex.php" method="post">

    <div class="form-group">
      <label style="margin-left: 60px;" for="">Name</label>
      <input type="text" class="form-control user w-75" name="fullname" value="">
    </div>

    <div class="form-group">
      <label style="margin-left: 60px;" for="">Matric Number</label>
      <input type="text" class="form-control user w-75" name="matric" value="">
    </div>

    <div class="form-group">
      <label for="" style="margin-left: 60px;">Date of Birth</label>
      <input type="number" class="form-control user w-75" name="dob" value="">
    </div>

    <div class="form-group">
      <label for="" style="margin-left: 60px;">Address</label>
      <input type="text" class="form-control user w-75" name="address" value="">
    </div>
    <div class="form-group">
      <label for="" style="margin-left: 60px;">Password</label>
      <input type="password" class="form-control user w-75" name="pass" value="">
    </div>



    <button class="submit btn btn-outline-success mb-5 mt-3">Register Now</button>

  </form>
</div>


</body>
</html>
