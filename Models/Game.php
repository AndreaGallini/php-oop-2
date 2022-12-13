<?php

class Game extends Product
{
    public $dimension;
    public $color;
    public $dogAge;
    public function __construct($_dimension, $_color, $_dogAge, $_nameproduct, $_price, $_brand, $_name, $_materials = [])
    {
        parent::__construct($_nameproduct, $_price, $_brand, $_name);
        $this->dimension = $_dimension;
        $this->color = $_color;
        $this->dogAge = $_dogAge;


    }
}