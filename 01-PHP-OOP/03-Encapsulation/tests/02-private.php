<?php

require '../includes/init.php';

$obj = new Video();
$obj->setPublished(true);
$obj->setTitle("PHP OOP");

echo $obj->getTitle(), PHP_EOL;
echo $obj->play(), PHP_EOL, $obj->pause();