<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it*/

    if(isset($_GET['source'])){
        echo $_GET['source']."<br>";
    }
	$link = "CLICK HERE";


    /*Step 2 - Set a cookie that expires in one week*/

    $name = "mahfuz";
    $value = 100;
    $expiration = time() + (60*60*24*7);
    setcookie($name,$value,$expiration);
    echo "<br>";

    if(isset($_COOKIE['mahfuz'])){
        echo $_COOKIE['mahfuz']."<br>";
    }

    /* Step 3 - Start a session and set it to value, any value you want.
*/

    session_start();
    $_SESSION['Message'] = "My Name is mahfuz";

    if(isset($_SESSION['Message'])){
        echo $_SESSION['Message']."<br>";
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
                </head>
                <body>
                <a href="9.php?source=30134"><?php echo $link; ?></a>

                </body>
                </html>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>