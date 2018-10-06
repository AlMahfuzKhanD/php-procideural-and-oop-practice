<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php


?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT `Name`, `Id`, `Address`, `Phone` FROM `student`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["Name"]. " - ID: " . $row["Id"]. "Address " . $row["Address"]."Phone".$row["Phone"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
