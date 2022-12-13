<?php
include __DIR__ . '/Category.php';
class Product extends Category
{
    public string $nameproduct;
    public int $price;
    public string $brand;

    public function __construct($_nameproduct, int $_price, $_brand, $_name)
    {
        parent::__construct($_name);
        $this->brand = $_brand;
        $this->nameproduct = $_nameproduct;
        $this->price = $_price;

    }
}