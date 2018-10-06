<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */

		$number1 = 10;
		$numver2 =20;

		$number3 = $number1 + $numver2;

		echo "Addition Using Variables.<br>";

		echo $number3."<br>";
		echo $number1+$numver2."<br>";

		echo "Addition using regular array<br>";

		$addition = array(10,20);
		echo $addition[0]+$addition[1]."<br>";

		echo "Addition using associative arrays<br>";
		$addition1 = array(
		        "a" => 10,
		        "b" => 10

        );
		$sum = array_sum($addition1);
		echo $sum."<br>";
        $asoc_array = array("Name" => 'Mahfuz', "Last" => 'Khan');
        echo $asoc_array['Name']." ". $asoc_array['Last'];





		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>