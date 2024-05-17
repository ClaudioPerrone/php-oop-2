<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';

// Crea degli oggetti di esempio
$dog_food = new Food('Crocchette', 'https://picsum.photos/200', 'Crocchette per cani', 10.99, '2024-06-30', ['pollo', 'riso']);
$cat_food = new Food('Scatolette', 'https://picsum.photos/200', 'Scatolette per gatti', 8.99, '2024-07-15', ['tonno', 'carote']);
$dog_toy = new Game('Osso di gomma', 'https://picsum.photos/200', 'Osso di gomma per cani', 5.99, 'gomma', 'rosso');
$cat_toy = new Game('Pallina', 'https://picsum.photos/200', 'Pallina per gatti', 3.99, 'plastica', 'giallo');

// Applica sconti
$dog_food->setDiscount(10);
$cat_food->setDiscount(5);
$dog_toy->setDiscount(20);
$cat_toy->setDiscount(15);

$products = [
    $dog_food, 
    $cat_food, 
    $dog_toy, 
    $cat_toy
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Shop</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text"><?php echo $product->getDescription(); ?></p>
                            <p class="card-text">Prezzo: €<?php echo $product->getPriceAfterDiscount(); ?> (scontato)</p>
                            <?php echo $product->getSpecificDetails(); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>