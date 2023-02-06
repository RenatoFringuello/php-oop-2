<?php
require_once __DIR__ . '/models/Products/Food.php';
require_once __DIR__ . '/models/Products/Toy.php';
require_once __DIR__ . '/models/Products/Kennel.php';

$products = [
    "foods" => [
        new Food('crocchette', 20, 12.5, '6789034763', 10, 150, '2024-11-23', new Category('dog', 'cebjcvsbf')),
        new Food('crocchette 2', 20, 12.5, '6789034763', 10, 150, '2024-11-23', new Category('cat', 'fghgvbn')),
        new Food('crocchette', 20, 12.5, '6789034763', 10, 150, '2024-11-23', new Category('dog', 'cebjcvsbf')),
        new Food('crocchette 2', 20, 12.5, '6789034763', 10, 150, '2024-11-23', new Category('cat', 'fghgvbn')),
        new Food('crocchette 2', 20, 12.5, '6789034763', 10, 150, '2024-11-23', new Category('cat', 'fghgvbn')),
    ],
    "toys" => [
        new Toy('Palla', 20, 12.5, '6789034763', 10, 'lattice', new Category('dog', 'cebjcvsbf')),
        new Toy('bastoncino', 20, 12.5, '6789034763', 10, 'plastica', new Category('cat', 'cebjcvsbf')),
        new Toy('Palla', 20, 12.5, '6789034763', 10, 'lattice', new Category('dog', 'cebjcvsbf')),
        new Toy('bastoncino', 20, 12.5, '6789034763', 10, 'plastica', new Category('cat', 'cebjcvsbf')),
    ],
    "kennels" => [
        new Kennel('casetta riscaldabile', 20, 12.5, '6789034763', 10, 'plastica', 12.4, 23.4, true, new Category('cat', 'cebjcvsbf')),
        new Kennel('casetta semplice', 20, 12.5, '6789034763', 10, 'legno', 12.4, 23.4, false, new Category('dog', 'cebjcvsbf')),
        new Kennel('casetta semplice', 20, 12.5, '6789034763', 10, 'legno', 12.4, 23.4, false, new Category('dog', 'cebjcvsbf')),
        new Kennel('casetta riscaldabile', 20, 12.5, '6789034763', 10, 'plastica', 12.4, 23.4, true, new Category('cat', 'cebjcvsbf')),
        new Kennel('casetta riscaldabile', 20, 12.5, '6789034763', 10, 'plastica', 12.4, 23.4, true, new Category('cat', 'cebjcvsbf')),
        new Kennel('casetta semplice', 20, 12.5, '6789034763', 10, 'legno', 12.4, 23.4, false, new Category('dog', 'cebjcvsbf')),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootsrtap v5.3.0-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <main class="p-3">
        <h1 class="text-white text-center p-2">Products (<?php echo count($products)?>)</h1>
        <?php 
            foreach($products as $key => $product){
                echo '<h2 class="text-white text-center p-2">'. ucfirst($key) .' ('. count($product) . ')</h2>';
                echo '<div class="row g-3">';
                    
                    foreach($product as $item){
                        echo "<div class=\"col-12 col-sm-6 col-md-4 col-xl-3\">";
                        echo "<div class=\"card p-2\">";
                        
                        echo "<h4 class=\"text-center\">{$item->getName()}</h4>";
                        echo "<div>Prezzo: {$item->getPrice()}</div>";
                        echo "<div>Barcode: {$item->getBarcode()}</div>";
                        echo "<div>Giacenza: {$item->getStock()}</div>";
                        echo "<div class=\"text-danger\">Category: {$item->getCategory()->getName()}</div>";
                        
                        echo "</div>";
                        echo "</div>";
                    }
                        
                echo '</div>';
            }
        ?>
    </main>
</body>

</html>