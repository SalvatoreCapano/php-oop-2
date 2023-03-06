<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/DogHouse.php';

// $productOne = new Product('productOne', 50, 100, new Category ('dog'));
// $productOne->shodData();
// var_dump($productOne);

$productOne = new Food('productOne', 39, 20, new Category ('cat'), '100g', 4, 43, 35);
// $productOne->shodData();

$productTwo = new Toy('productTwo', 39, 20, new Category ('dog'), '100g', 4, 43, 35);
// $productTwo->shodData();

$productThree = new DogHouse('productThree', 39, 20, new Category ('dog'), 150, 150, 'brown', 'wood');
// $productThree->shodData();

$productFour = new Food('productFour', 39, 20, new Category ('cat'), '100g', 4, 43, 35);
// $productFour->shodData();

$productFive = new Toy('productFive', 39, 20, new Category ('dog'), '100g', 4, 43, 35);
// $productFive->shodData();

$productSix = new DogHouse('productSix', 39, 20, new Category ('dog'), 150, 150, 'brown', 'wood');
// $productSix->shodData();

$productSeven = new Food('productSeven', 39, 20, new Category ('cat'), '100g', 4, 43, 35);
// $productSeven->shodData();

$productEight = new Toy('productEight', 39, 20, new Category ('dog'), '100g', 4, 43, 35);
// $productEight->shodData();

$productNine = new DogHouse('productNine', 39, 20, new Category ('dog'), 150, 150, 'brown', 'wood');
// $productNine->shodData();

$productTen = new Food('productTen', 39, 20, new Category ('cat'), '100g', 4, 43, 35);
// $productTen->shodData();

$productEleven = new Toy('productEleven', 39, 20, new Category ('dog'), '100g', 4, 43, 35);
// $productEleven->shodData();

$productTwelve = new DogHouse('productTwelve', 39, 20, new Category ('dog'), 150, 150, 'brown', 'wood');
// $productTwelve->shodData();

$productThirteen = new Food('productThirteen', 39, 20, new Category ('cat'), '100g', 4, 43, 35);
// $productThirteen->shodData();

$productFourteen = new Toy('productFourteen', 39, 20, new Category ('dog'), '100g', 4, 43, 35);
// $productFourteen->shodData();

$productFifteen = new DogHouse('productFifteen', 39, 20, new Category ('dog'), 150, 150, 'brown', 'wood');
// $productFifteen->shodData();

$productsList[] = $productOne;
$productsList[] = $productTwo;
$productsList[] = $productThree;
$productsList[] = $productFour;
$productsList[] = $productFive;
$productsList[] = $productSix;
$productsList[] = $productSeven;
$productsList[] = $productEight;
$productsList[] = $productNine;
$productsList[] = $productTen;
$productsList[] = $productEleven;
$productsList[] = $productTwelve;
$productsList[] = $productThirteen;
$productsList[] = $productFourteen;
$productsList[] = $productFifteen;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>Animals Products Shop</h1>
        <img src="" alt="">
    </header>

    <main class="container">
        <div class="cardsContainer">
            <ul>
                <?php 
                    foreach ($productsList as $product) {
                        echo '<li>';

                            echo '<div class="imgContainer">';
                                echo '<img src="' . $product->imgUrl . '" alt="Product">';
                            echo '</div>';

                            echo '<h3>' . $product->name . '</h3>';

                            echo '<span>' . $product->price . ' $' . '</span>';

                            echo '<p>';
                                echo '<i class="fa-solid fa-' . $product->category->category . '"></i>';
                                echo $product->type;
                            echo '</p>';

                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </main>
    
</body>
</html>