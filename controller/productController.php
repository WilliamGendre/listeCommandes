<?php

$products = [
    [
        'name' => 'Aspirateur',
        'price' => 100,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createdAt' => '22-04-2024',
    ],
    [
        'name' => 'Haltères',
        'price' => 1100,
        'category' => 'sport',
        'description' => 'Description du produit 11',
        'createdAt' => '26-03-2024',
    ],
    [
        'name' => 'Frigo',
        'price' => 200,
        'category' => 'electro-menager',
        'description' => 'Description du produit 2',
        'createdAt' => '07-05-2024',
    ],
    [
        'name' => 'Télévision',
        'price' => 400,
        'category' => 'electro-menager',
        'description' => 'Description du produit 4',
        'createdAt' => '03-02-2024',
    ],
    [
        'name' => 'Ordinateur',
        'price' => 500,
        'category' => 'informatique',
        'description' => 'Description du produit 5',
        'createdAt' => '23-01-2024',
    ],
    [
        'name' => 'Vélo',
        'price' => 900,
        'category' => 'sport',
        'description' => 'Description du produit 9',
        'createdAt' => '14-04-2024',
    ],
    [
        'name' => 'Tablette',
        'price' => 600,
        'category' => 'informatique',
        'description' => 'Description du produit 6',
        'createdAt' => '29-01-2024',
    ],
    [
        'name' => 'Smartphone',
        'price' => 700,
        'category' => 'informatique',
        'description' => 'Description du produit 7',
        'createdAt' => '13-04-2024',
    ],
    [
        'name' => 'Four',
        'price' => 300,
        'category' => 'electro-menager',
        'description' => 'Description du produit 3',
        'createdAt' => '17-02-2024',
    ],
    [
        'name' => 'Appareil photo',
        'price' => 800,
        'category' => 'informatique',
        'description' => 'Description du produit 8',
        'createdAt' => '09-05-2024',
    ],
    [
        'name' => 'Tapis de course',
        'price' => 1000,
        'category' => 'sport',
        'description' => 'Description du produit 10',
        'createdAt' => '25-03-2024',
    ],
    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'sport',
        'description' => 'Description du produit 12',
        'createdAt' => '19-04-2024',
    ]
];

// Affiche que les éléments du tableau dont la catégorie de l'élément et le même qu'écrit dans l'URL

// $productPriceMin = $products[0]['price'];

$productPriceMin = $products[0]['price'];

foreach($products as $product){
    if($productPriceMin > $product['price']){
        $productPriceMin = $product['price'];
    }
}

$productPriceMax = $products[0]['price'];

foreach($products as $product){
    if($productPriceMax < $product['price']){
        $productPriceMax = $product['price'];
    }
}

$tabCategorys = [];

foreach($products as $product){
    if(!in_array($product['category'], $tabCategorys)){
        $tabCategorys[] = $product['category'];
    }
}


if(!empty($_GET['category'])){
    $products = array_filter($products, function($product){
        return $product['category'] === $_GET['category'];
    });
}

if(!empty($_GET['priceMin'])){

    $products = array_filter($products, function($product){
        return $product['price'] >= $_GET['priceMin'];
    });
}

if(!empty($_GET['priceMax'])){
    $products = array_filter($products, function($product){
        return $product['price'] <= $_GET['priceMax'];
    });
}

if(isset($_GET['sort']) && $_GET['sort'] === "price"){
    usort($products, function($a, $b){
        return $a['price'] <=> $b['price'];
    });
}

if(isset($_GET['sort']) && $_GET['sort'] === "date"){
    usort($products, function($product, $nextProduct){

        $dateCreated = new DateTime($product['createdAt']);
        $nextDateCreated = new DateTime($nextProduct['createdAt']);

        return $dateCreated <=> $nextDateCreated;
    });
}