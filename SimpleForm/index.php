<?php

    require_once('dbPhp/config.php');
    $query = "SELECT `id`, `Username`, `PhoneNumber` FROM `myusers`";
    $fetch = mysqli_query($sql, $query);

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
    <div class="card">
        <form action="dbPhp/register_action.php" method="post" name="myForm">
            <div class="form-group">
                <label for="" >Enter Name</label>
                <input class="form-control w-75" type="text" name="user">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input class="form-control w-75" type="number" name="phone">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control w-75" type="password" name="pass">

            </div>
            <input class="btn btn-success btn-secondary" type="submit" value="submit">
        </form>
    </div>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $run =1;
                    while($row = mysqli_fetch_assoc($fetch)){ ?>
                       <tr>
                           <?=$run++;?>
                            <td> <?= $row['Username']?></td>
                            <td> <?= $row['PhoneNumber']?></td>
                            <td>
                                <a href="update.php?idd=<?php echo $row['id'];?>" class="btn btn-sm btn-success" value="<?php echo $row['id']; ?>" >Edit</a>
                                <a href="dbPhp/delete.php?idd=<?php echo $row['id'];?>"><button class="btn btn-sm btn-danger">Delete</button></a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
