<?php

include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Kennel.php';
//include __DIR__ . '/../Models/Game.php';
$perGatto = new Category('gatti');
$perCane = new Category('Cani');
$croccettecane = new Product('crocchette', 19, 'monge', $perCane);
$croccettegatto = new Product('crocchette', 19, 'monge', $perGatto);
$kennelcane = new Kennel('M', 'nero', 'esterno', 'kennelesterno', 20, 'monge', $perCane, ['a', 'b'], );
var_dump($kennelcane);


?>

<body>
    <div class="container-lg">
        <h2>
            <?php echo $perCane->category; ?>
        </h2>
        <div class="row">
            <div class="col">
                <img src="" alt="">
                <h3></h3>
            </div>
        </div>


    </div>

</body>