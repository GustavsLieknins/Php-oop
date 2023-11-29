<?php


class Train
{
    function __construct(public $brand, public $trackGauge, private $mileage = 0)
    {}
    function __destruct()
    {
        echo $this->brand . " is dead at mileage " . $this->getMileage() . "<br>";
    }
    function getMileage()
    {
        return $this->mileage;
    }
    function increaseMileage($amount)
    {
        $this->mileage = $this->mileage += $amount;
    }
}