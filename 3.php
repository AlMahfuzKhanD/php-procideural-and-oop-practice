<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


$a = 5;
if($a==4){
    echo "I dont love php";
}else if($a ==3){
    echo "I never love php";
}else{
    echo "I love php<br>";
}

for ($x = 0;$x < 11; $x++){
    echo $x."<br>";
}
echo "Foreach started"."<br>";
$numbers = array(1,2,5,4,8,5,7,5,8,5);
foreach ($numbers as $abc){
    echo $abc."<br>";
}

	$b = "yello";
    switch ($b){
        case "red":
            echo "Your favourite color is red";
            break;
        case "blue":
            echo "Your favourite color is blue";
            break;
        case "green":
            echo "Your favourite colore is green";
            break;
        default:
            echo "Your favourite color is neither red nor blue nor green";
    }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>