<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 11:22 AM
 */


class Car {

    var $wheel = 4;
    var $hood = 1;
    var $engine =1;
    var $doors = 4;

    function MoveWheels(){


        $this-> wheel = 10;
    }

    function CreateDoors(){
        $this -> doors = 6;
    }
}

### instances of Car Class ###
$truck = new Car();

$bmw = new Car();


#33333333333 Calling via method ############

$bmw -> MoveWheels();
echo "<br>";
//$bmw -> wheel =8;
echo $bmw -> wheel;
######## asigning value in wheel property ##########
echo "<br>"."Truck wheel no: ";
echo $truck -> wheel = 5;
echo "<br>";

$truck -> CreateDoors();
echo $truck -> doors;






