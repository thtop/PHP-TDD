<?php

require '../includes/init.php';

$obj = new Video('mp4', 'duration', 'OOP');

// Uncaught TypeError: Argument 2 passed to Video::__construct() must be of the type float, string given
var_dump($obj);