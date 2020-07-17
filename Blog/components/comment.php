<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/comment.css">

</head>
<body>
  <div class="flex items-center">
    <img src="../img/myself.jpeg" width="max-width:100%;" class="w-24 h-24 rounded-full mr-4" alt="">
    <div class="text-sm">
      <p class="text-gray-900 leading-none">Oluwasijibomi Olaifa</p>
      <p class="text-gray-600"> July 18 2020 </p>

    </div>

  </div>
  <h1 class="display-4">Drop a comment</h1>
  <form class="" action="../CommentReceive/create.php" method="post">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="username" value="" placeholder="Input name" class="form-control w-25" >
    </div>
    <textarea name="comments" rows="8" cols="60"></textarea>
    <br>
    <button class="btn btn-outline-success" href="../CommentReceive/create.php" name="submit" id="commentSubmit">Submit</button>
  </form>

</body>
</html>
