<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 11:22 AM
 */


class Car
{

    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    ########### making constructor ########

    function __construct()
    {


        echo $this->wheel = 10;
    }
}

########### executing constructor ##########
$bmw = new Car();
$truck = new Car();







