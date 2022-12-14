<?php

trait Weight
{
    public $peso;

    public function setPeso($_peso, $_unit)
    {
        $this->peso = $_peso . $_unit;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}