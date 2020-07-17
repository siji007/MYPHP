<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">

    <title>Header</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="brand navbar-brand circleBrand bg-danger"><h4 class="pt-2 pl-1">TRS</h4></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navItem navbar-nav ml-auto">
            <li class="nav-item active">
              <a class=" nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="articles nav-link contact ml-3" href="articles.php">ATICLES</a>
            </li>

            <li class="nav-item">
              <a class="contact nav-link contact ml-3" href="">CONTACT</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

</body>
</html>
