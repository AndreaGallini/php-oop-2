<?php

class Food extends Product
{
    public $taste;
    public $ingedients;
    public $nutritiveVote;
    public $description;
    public $dogAge;

    public function __construct($_taste, $_nutritiveVote, $_description, $_dogAge, $_nameproduct, int $_price, $_brand, $_category, $_img, $_ingredients = [])
    {
        parent::__construct($_nameproduct, $_price, $_brand, $_category, $_img);
        $this->taste = $_taste;
        $this->nutritiveVote = $_nutritiveVote;
        $this->ingedients = $_ingredients;
        $this->description = $_description;
        $this->dogAge = $_dogAge;

    }
}