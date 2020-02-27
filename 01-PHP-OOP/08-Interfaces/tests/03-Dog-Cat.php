<?php

require '../includes/init.php';

$dog = new Dog;
$dog->chase('Lion');
$dog->kill('Lion');

$cat = new Cat;
$cat->chase('Tiger');
$cat->kill('Tiger');