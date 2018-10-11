<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 11:22 AM
 */



class Car {

    public $wheel = 4;
    protected $hood = 1;
    private $engine =5;
    var $doors = 4;

    function MoveWheels(){


        $this-> wheel = 10;
    }

    ####### protected uses #######

    function showProperty(){
        echo $this->hood;
    }

    ########### privete value printing ######

    function showPrivateProperty(){
        echo $this -> engine;
    }


}



### instances of Car Class ###
$truck = new Car();

$bmw = new Car();

echo $bmw->showPrivateProperty();

echo $bmw -> wheel;




##### printing protected vallue #####

echo $bmw -> showProperty();

########### extending protected value #########

class Bike extends Car {
    function showHood(){

        echo $this->hood;
}
}
$hood = new Bike();

echo $hood -> showHood();

###############
