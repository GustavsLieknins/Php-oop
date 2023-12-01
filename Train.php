<?php
include_once "Vehicle.php";
class Train extends Vehicle
{
    public $trackGauge;
    static $describe = "Pis of metal";
    function __construct( $brand, $mileage = 0, $trackGauge)
    {}
    static function makeNoise() {
        return "Choo, Choo!";
    }
}

