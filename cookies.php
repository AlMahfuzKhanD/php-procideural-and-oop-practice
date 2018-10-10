<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 10-Oct-18
 * Time: 1:46 PM
 */

############ Setting cookei #############
$name = "someName";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name,$value,$expiration);



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<!-- rading cookie -->

    <?php
        if(isset($_COOKIE['someName'])){
            $someOne = $_COOKIE['someName'];
            echo $someOne;
        }else {
            $someOne = "Nothing Found!!";
        }
    ?>
</body>
</html>
