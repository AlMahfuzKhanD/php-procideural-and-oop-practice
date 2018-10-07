<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


echo abs(-4.2); // 4.2 (double/float)
echo abs(5);    // 5 (integer)
echo abs(-5);   // 5 (integer)
    echo "<br>.Prebuilt Math functions.<br>";
    echo rand(1,1000);

 echo "<br>.Prebuilt string functions.<br>";
    echo addcslashes('foo[ ]', 'A..z');
    // output:  \f\o\o\[ \]
    // All upper and lower-case letters will be escaped
    // ... but so will the [\]^_`

 echo "<br>.pre built array functions.<br>";
    $input_array = array("FirSt" => 1, "SecOnd" => 4);
    print_r(array_change_key_case($input_array, CASE_UPPER));


?>







</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>