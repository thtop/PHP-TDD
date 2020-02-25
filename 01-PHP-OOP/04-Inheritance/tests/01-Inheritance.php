<?php

require '../includes/init.php';

$obj = new Dog;

$obj->weight = '7.3';
$obj->color = 'Brown';
$obj->heartRate = 'okay';

var_dump($obj);