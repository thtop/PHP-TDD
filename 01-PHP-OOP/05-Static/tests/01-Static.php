<?php

require '../includes/init.php';

var_dump(Database::$operators);
Database::connect('pdo');
Database::create([]);