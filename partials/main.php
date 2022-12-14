<?php

include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Kennel.php';
include __DIR__ . '/../Models/Game.php';
include __DIR__ . '/../Models/Food.php';
$perGatto = new Category('gatto', 'gatto.jpeg');
$perCane = new Category('Cane', 'cane.jpeg');
$crocchetteCane1 = new Food('Manzo', 3, 'Alimento per grandi cani', 5, 'crocchette Monge', 50, 'monge', 'cane', 'cane.jpeg', ['manzo', 'uovo']);
$crocchetteCane1->setPeso('12', 'Kg');

$KennelCane1 = new Kennel('180x180x60', 'Color legno', 'Da esterno', 'Kennel', 190, 'BoolDog', 'cane', 'cane.jpeg', ['legno', 'acciaio']);
$KennelCane1->setPeso('5', 'Kg');
$giocoCane1 = new Game('20x20', 'blu', 'puppy', 'gioco per cuccioli', 20, 'Boolgame', 'cane', 'cane.jpeg');



?>

<body>
    <div class="container-lg">
        <h2>
            <?php echo $perCane->category; ?>
        </h2>
        <div class="row">
            <h3>Food</h3>
            <div class="col-3 my_col">
                <img src="./img/monge_cane_grande.webp" alt="">
                <h3>
                    <?php echo $crocchetteCane1->nameproduct ?>
                </h3>
                <span>
                    Marca:
                    <?php echo $crocchetteCane1->brand ?>
                </span>
                <span class="vote">
                    Voto:
                    <?php echo $crocchetteCane1->nutritiveVote ?> / 5
                </span>
                <p>
                    Gusto:
                    <?php echo $crocchetteCane1->taste ?>
                </p>
                <p>
                    Ingredienti:
                    <?php echo implode(' , ', $crocchetteCane1->ingedients) ?>
                </p>
                <p>
                    Descrizione
                    <?php echo $crocchetteCane1->description ?>
                </p>
                <p>
                    Prezzo:
                    <?php echo $crocchetteCane1->price ?> €
                </p>
                <p>
                    Peso:
                    <?php echo $crocchetteCane1->getPeso(); ?>
                </p>
                <section class="footerInner">
                    <img src="<?php echo $crocchetteCane1->getImg() ?>" alt="">
                    <p>
                        <?php echo $crocchetteCane1->category ?>
                    </p>
                </section>

            </div>
        </div>
        <div class="row">
            <h3>Kennel</h3>

            <div class="col-3 my_col">
                <img src="./img/10776_pla_trixie_transportkaefig_hs_04_1.jpg" alt="">
                <h3>
                    <?php echo $KennelCane1->nameproduct ?>
                </h3>
                <span>
                    Marca:
                    <?php echo $KennelCane1->brand ?>
                </span>
                <span class="vote">

                    <?php echo $KennelCane1->color ?>
                </span>
                <p>
                    Dimensioni:
                    <?php echo $KennelCane1->size ?>
                </p>
                <p>
                    Materiali:
                    <?php echo implode(' , ', $KennelCane1->materials) ?>
                </p>
                <p>
                    Locazione
                    <?php echo $KennelCane1->position ?>
                </p>
                <p>
                    Prezzo:
                    <?php echo $KennelCane1->price ?> €
                </p>
                <p>
                    Peso:
                    <?php echo $KennelCane1->getPeso(); ?>
                </p>
                <section class="footerInner">
                    <img src="<?php echo $KennelCane1->getImg() ?>" alt="">
                    <p>
                        <?php echo $KennelCane1->category ?>
                    </p>
                </section>

            </div>
        </div>
        <div class="row">
            <h3>Game</h3>

            <div class="col-3 my_col">
                <img src="./img/trixie-cane-gioco-corda.webp" alt="">
                <h3>
                    <?php echo $giocoCane1->nameproduct ?>
                </h3>
                <span>
                    Marca:
                    <?php echo $giocoCane1->brand ?>
                </span>
                <span class="vote">

                    <?php echo $giocoCane1->color ?>
                </span>
                <p>
                    Dimensioni:
                    <?php echo $giocoCane1->dimension ?>
                </p>
                <p>
                    Età consigliata:
                    <?php echo $giocoCane1->dogAge ?>
                </p>

                <p>
                    Prezzo:
                    <?php echo $giocoCane1->price ?> €
                </p>
                <section class="footerInner">
                    <img src="<?php echo $KennelCane1->getImg() ?>" alt="">
                    <p>
                        <?php echo $KennelCane1->category ?>
                    </p>
                </section>

            </div>
        </div>
    </div>


    </div>

</body>