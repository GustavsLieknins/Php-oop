<?php

include "Train.php";
include "Car.php";
include "Dog.php";
include "Cat.php";



// $car1 = New Car("Bmw", 0);
// $car2 = New Car("Opel", 1000000001);
// $car1->increaseMileage(240);
// echo Car::$describe;
// echo "<br>";
// echo Car::makeNoise() . "<br>";

///////////////////////////////////////


// $tire = New Tire("R12", "Vissezonas", "Good");
// echo $tire->size;
// echo "<br>";
// echo $tire->type;

/////////

$train = New Train("Opel zafira", 12, 1293364656835);
$train1 = New Train("Lancia", 9, 12132);
$train->increaseMileage(240);
$train1->increaseMileage(240);

$myCar = new Car("Bmw", 0.01);
$myTrain = new Train("Opel", 1000000, 0.01);


$myDog = new Dog("Reksis", 6);
$myCat1 = new Cat("Mincis", 2);
$myCat2 = new Cat("Brincis", 3);

echo "<br>" . Dog::payAttention();
Cat::payAttention() . "<br>";
