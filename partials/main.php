<?php
include __DIR__ . '/Models/Category.php';
include __DIR__ . '/Models/Product.php';
$gatti = new Category('gatti');
$cani = new Category('Cani');
$croccettecane = new Product('crocchette', 19, 'monge', $cani);
var_dump($croccettecane);
//var_dump($gatti);
//var_dump($cani);
?>

<body>

</body>