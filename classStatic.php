<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 11:22 AM
 */


class Car {

    static $wheel = 4; // making this property static
    var $hood = 1;
    var $engine =1;
    var $doors = 4;

    function MoveWheels(){


        Car::$wheel = 10;
    }


}

### instances of Car Class ###


$bmw = new Car();


######## printing static #########

Car::MoveWheels();

echo Car::$wheel;










