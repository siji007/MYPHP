<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/articles.css">

    <title>Index</title>
</head>
<body class="mainBody" style="background-color:white;">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <div class="brand navbar-brand circleBrand bg-danger"><h4 class="pt-2 pl-1 text-center">CS</h4></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navItem navbar-nav ml-auto">
            <li class="nav-item active">
              <a class=" nav-link" href="#">ABOUT<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="articles nav-link contact ml-3" href="articles.php">ATICLES</a>
            </li>

            <li class="nav-item">
              <a class="contact nav-link contact ml-3" href="">CONTACT</a>
            </li>
          </ul> -->
          <form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="Display/RegisterResult.inc.php">
            <input class="form-control mr-sm-2" type="search" name="output" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
          </form>
        </div>
      </nav>
      <div class="car">
        <div class="overlay bg-dark">
          <div class="container text-white pb-5">
                <div id="header-text" class="row">
                    <div  class="col-lg-12 col-xl-12 col-sm-12 text-center">
                        <h1 >Protect your car today!</h1>
                         <p class="lead">
                           Car System ensures total security and protection with your car.Click the register button below to register
                           today.
                         </p>
                         <button type="button" class="btn btn-outline-success register" name="button"><a href="Register.php">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
      </div>
</body>
</html>
