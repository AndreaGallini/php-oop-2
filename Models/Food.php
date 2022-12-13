<?php

class Food extends Product
{
    public $taste;
    public $ingedients;
    public $nutritiveVote;
    public $description;
    public $dogAge;

    public function __construct($_taste, $_ingredients = [], $_nutritiveVote, $_description, $_dogAge, $_nameproduct, $_price, $_brand, $_name, $_materials = [])
    {
        parent::__construct($_nameproduct, $_price, $_brand, $_name);
        $this->taste = $_taste;
        $this->nutritiveVote = $_nutritiveVote;
        $this->ingedients = $_ingredients;
        $this->description = $_description;
        $this->dogAge = $_dogAge;

    }
}