<?php

require '../includes/init.php';


$obj = new Database;
$obj::connect('pdo');

echo $obj->getMethod();