<?php

class Category
{
    public $category;
    public $immagine;

    public static $path = './img/';


    public function __construct($_category, $_img)
    {
        $this->category = $_category;
        $this->immagine = $_img;
    }

    public function getImg()
    {
        return self::$path . $this->immagine;
    }


}