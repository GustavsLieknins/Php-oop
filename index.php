<?php

include "Train.php";


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

$train = New Train("Opel zafira", "12cm", 1293364656835);
$train1 = New Train("Lancia", "9cm", 12132);
$train->increaseMileage(240);
$train1->increaseMileage(240);
