<?php


include_once "Animal.php";
class Dog extends Animal
{
    // public $name;
    // private $age;

    // function __construct($name, $age)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    // public function birthday()
    // {
    //     $this->age = $this->age += 1; 
    // }
    static function payAttention()
    {
        echo "Woof!";
    }
}