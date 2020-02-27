<?php

require '../includes/init.php';

$mysqli = (new MySQLiClient('localhost', 'store', 'store', 'secret'))->connect();

$products = $mysqli->select("SELECT * FROM products")->get();

var_dump($products);

foreach($products as $product) {
    var_dump($product->name);
}