<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

function sum($x,$y){
    $z = $x + $y;
    return $z;
}
echo sum(5,10)."<br>";

function add($a,$b){
    $sum = $a + $b;
    return $sum;
}
 $return_value = add(10,20);
echo "Call by value is : $return_value";

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>