<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 10-Oct-18
 * Time: 9:01 PM
 */


class Car {
    function MoveWheels(){


        echo "Wheels Move";
    }
}
if(method_exists("Car","MoveWheels")){
    echo "Yeayyyyyyyyyyyyyyyyyyyyy The method exists";
}else {
    echo "Not found!";
}