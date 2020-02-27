<?php

require '../includes/init.php';

$dog = new Dog();
$lion = new Lion();
$rabbit = new Rabbit();

$dog->chase($rabbit);
$dog->kill($rabbit);

$lion->chase($dog);
$lion->kill($dog);

$rabbit->chaseBy($dog);
$rabbit->killedBy($dog);

