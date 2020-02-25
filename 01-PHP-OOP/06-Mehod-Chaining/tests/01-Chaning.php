<?php

require '../includes/init.php';

Database::connect('pdo')->table('users')->insert(['username' => 'Terry', 'password' => 'secret']);