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

echo "<br>";
function messg($message){
    echo $message;

}

messg("Hello Friends");


function addNumber($num1, $num2){
    $addi = $num1 + $num2;
    return $addi;
}

$res = addNumber(50,20);
echo "<br>".$res."<br>";


echo "Global and Scope<br>";

$glob = "outside";

function fun(){
    global $glob;
    $glob = "inside";

};

echo $glob;
echo "<br>";
fun();
    echo $glob;
	
?>







</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>