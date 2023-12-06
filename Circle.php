<?php

include_once "Rectangle.php";
class Circle extends Rectangle
{
    public $radius;
    function __construct($color, $width, $height,$radius)
    {
        parent::__construct($color, $width, $height);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return $this->width * $this->$height;
    }
}