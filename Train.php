<?php
include_once "Vehicle.php";
class Train extends Vehicle
{
    public $trackGauge;
    static $describe = "Pis of metal";
    function __construct( $brand, $mileage, $trackGauge)
    {
        parent::__construct($brand, $mileage);
        $this->trackGauge = $trackGauge;
    }
    static function makeNoise() {
        return "Choo, Choo!";
    }
}

