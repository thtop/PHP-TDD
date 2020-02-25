<?php

require '../includes/init.php';

$obj1 = new Video('mp4', '10.30', 'Introduction ot OOP');
$obj2 = new Video('mp4', '13.30', 'The second video');

echo PHP_EOL;
var_dump($obj1, $obj2);
echo PHP_EOL;