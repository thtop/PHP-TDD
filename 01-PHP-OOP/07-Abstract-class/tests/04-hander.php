<?php

require '../includes/init.php';

$mysqli = (new MySQLiClient('localhost', 'store', 'store', 'secret'))->connect();

$products = $mysqli->select("SELECT * FROM products")->get();

// query
$handler = $mysqli->getConnection();
$product_by_id = $handler->query("SELECT * FROM products WHERE id = 2")->fetch_all();

var_dump($product_by_id);