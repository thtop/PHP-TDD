<?php

class Database 
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        // $this->table; // can't use in side static method

        $obj = new static;
        $obj->table;
        self::$pdo = $method;
    }

    public static function create(array $data)
    {
        var_dump('Creating a new database with ' . self::$pdo);
    }

    public function getMethod()
    {
        return self::$pdo;
    }
}