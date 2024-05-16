<?php

    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/CatProduct.php';
    require_once __DIR__ . '/Models/DogProduct.php';

// Crea un'istanza della classe Product
$product = new Product(
    'Immagine',
    'Nome Oggetto',
    'Prezzo',
    'icona',
    'Descrizione'
);

// Crea istanze delle classi CatProduct e DogProduct
$cat_product = new CatProduct(
    'https://picsum.photos/id/237/300/300',
    'Gatto Felice',
    '49.99€',
    'icona-gatto',
    'Cibo per gatti'
);

$dog_product = new DogProduct(
    'https://picsum.photos/id/237/300/300',
    'Cane Felice',
    '59.99€',
    'icona-cane',
    'Cibo per cani'
);   

    $products = [
        $product,
        $cat_product,
        $dog_product
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP-opp-2</title>
</head>
<body>
    <?php foreach($products as $product) { ?>
        <div>
            <img class="img-fluid" src="<?php echo $product->image; ?>" alt=" <?php echo $product->title; ?>">
            <?php echo $product->title; ?>
            <?php echo $product->price; ?>
            <?php echo $product->icon; ?>
            <?php echo $product->type; ?>
        </div>
    <?php } ?>
</body>
</html>