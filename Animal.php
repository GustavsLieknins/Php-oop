<?php

abstract class Animal
{
    public $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday()
    {
        $this->age = $this->age += 1; 
    }
    abstract static function payAttention();
}