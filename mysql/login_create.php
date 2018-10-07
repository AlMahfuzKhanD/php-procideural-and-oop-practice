<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    /*if($username && $password){
        echo $username;
        echo $password;
    }else{
        echo "Please enter information";
    }*/

    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "we are connected";
    }else{
        die("Database connection failed");
    }


    $query = "INSERT INTO users (username, password)";
    $query .= "VALUES ('$username', '$password' )";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed'. mysqli_error($connection));
    }



}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>


            <input class="btn btn-primary" type="submit" name="submit">
        </form>


    </div>
</div>

</body>
</html>