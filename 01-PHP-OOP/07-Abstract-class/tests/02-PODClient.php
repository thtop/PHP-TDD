<?php

require '../includes/init.php';

$pdo = (new PDOClient('mysql', 'localhost', 'store', 'store', 'secret'))->connect();

$products = $pdo->select("SELECT * FROM products")->get();

// var_dump($products);

foreach($products as $product) {
    var_dump($product->name);
}