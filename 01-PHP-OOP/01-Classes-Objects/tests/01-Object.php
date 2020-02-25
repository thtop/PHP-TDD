<?php

require '../includes/init.php';

$obj1 = new Book;
$obj1->title = "PHP OOP";
$obj1->price = 250;

// echo $obj1->display();

var_dump($obj1);