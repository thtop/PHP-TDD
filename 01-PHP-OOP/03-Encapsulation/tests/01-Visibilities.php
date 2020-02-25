<?php

require '../includes/init.php';

$obj = new Video();

// Uncaught Error: Cannot access private property Video
$obj->title = "OOP";