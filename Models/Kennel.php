<?php

class Kennel extends Product
{
    public $size;
    public $materials;
    public $color;
    public $position;
    public function __construct($_size, $_color, $_position, $_nameproduct, $_price, $_brand, $_name, $_materials = [])
    {
        parent::__construct($_nameproduct, $_price, $_brand, $_name);
        $this->size = $_size;
        $this->color = $_color;
        $this->materials = $_materials;
        $this->position = $_position;

    }
}