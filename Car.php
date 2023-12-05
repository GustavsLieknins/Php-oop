<?php


// Izveido, lūdzu, klasi Car, kurai ir publiska īpašības brand un privāta īpašība mileage
// Izveido, lūdzu, konstruktoru, kurš liek padot abas īpašības, klases Car objektu veidojot
// Izveido, lūdzu, destruktoru, kurš izvada paziņojumu [brand] is dead at mileage [mileage], kad klases Car objekts tiek iznīcināts
// Izveido publisku metodi increaseMileage($amount), kas palielina nobraukumu par doto argumentu
// Izveido divus klases Car objektus.
// Vienam objektam izsauc metodi increaseMileage($amount), palielinot nobraukumu par 240 km.
include_once "Vehicle.php";
class Car extends Vehicle
{

    static $describe = "Masinam ir cetras durvis bet retos gadijumos tas cigani aizmetina";
    static function makeNoise() {
        return "Beep, Beep!";
    }
}
