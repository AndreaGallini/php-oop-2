<?php

trait Weight
{
    public $peso;

    public function setPeso($_peso, $_unit)
    {
        if (is_int($_peso)) {
            throw new Exception('Peso non Calcolabile');
        } else
            $this->peso = $_peso . $_unit;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}