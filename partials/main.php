<?php

include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Kennel.php';
//include __DIR__ . '/../Models/Game.php';
$gatti = new Category('gatti');
$cani = new Category('Cani');
$croccettecane = new Product('crocchette', 19, 'monge', $cani);
$croccettegatto = new Product('crocchette', 19, 'monge', $gatti);
$kennelcane = new Kennel('M', 'nero', 'esterno', 'kennelesterno', 20, 'monge', $cani, ['a', 'b'], );
var_dump($kennelcane);
//var_dump($croccettecane);
//var_dump($croccettegatto);

?>

<body>
    <div class="container-lg">
        <h2>
            <?php echo $cani->name; ?>
        </h2>
        <div class="row">

        </div>


    </div>

</body>