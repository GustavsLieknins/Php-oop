<?php

class Math
{
    static function addTwo($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    static function factorial($num)
    { 
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
        $factorial = $factorial * $x;  
    }   
    return $factorial;
    }

    static function sum($mas)
    {
        $sum = 0;
        foreach($mas as $value)
        {
            $sum = $sum + $value;
        }
        return $sum;
    }
    static function average($mas)
    {
        $sum = 0;
        foreach($mas as $value)
        {
            $sum = $sum + $value;
        }
        $sum = $sum / count($mas);
        return $sum;
    }
    static function max($mas)
    {
        $value1 = $mas[0];
        foreach($mas as $value)
        {
            if($value > $value1)
            {
                $value1 = $value;
            }
        }
        return $value1;
    }
}