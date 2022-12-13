<?php
include __DIR__ . '/Category.php';
class Product extends Category
{
    public string $nameproduct;
    public int $price;
    public string $brand;

    function __construct($_nameproduct, int $_price, $_brand, $_category, $_img)
    {
        parent::__construct($_category, $_img);
        $this->brand = $_brand;
        $this->nameproduct = $_nameproduct;
        $this->price = $_price;

    }
}