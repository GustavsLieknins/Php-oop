<?php

class Tire
{
    // public $size;
    // public $type;
    // private $quality;

    function __construct(public $size, public $type, private $quality)
    {
        // $this->size = $size;
        // $this->type = $type;
        // $this->quality = $quality;
    }
    function __destruct()
    {
        echo "<br>"."Boom!";
    }
}