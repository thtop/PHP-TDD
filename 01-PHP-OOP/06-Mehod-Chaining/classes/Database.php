<?php

class Database 
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        self::$pdo = $method;
        return new static;
    }

    public function table(string $name) 
    {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data)
    {
        var_dump('Connected to the database using ' . self::$pdo);
        var_dump("INSERTING INTO $this->table VALUES (". json_encode($data) .")" );
    }

}