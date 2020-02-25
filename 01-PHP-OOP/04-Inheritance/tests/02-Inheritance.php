<?php

require '../includes/init.php';

$obj = new Dog;

$obj->weight = '7.3';
$obj->color = 'Brown';
$obj->heartRate = 'okay';

$obj->brak();
$obj->chase();
$obj->eat();
$obj->reproduce();
$obj->breathe();

