<?php

abstract class Vehicle
{
    public $brand;
    protected $mileage;
    function __destruct()
    {
        echo $this->brand . " is dead at mileage " . $this->getMileage() . "<br>";
    }
    function increaseMileage($amount)
    {
        $this->mileage = $this->mileage += $amount;
    }
    function getMileage()
    {
        return $this->mileage;
    }
    abstract static function makeNoise();
};

?>