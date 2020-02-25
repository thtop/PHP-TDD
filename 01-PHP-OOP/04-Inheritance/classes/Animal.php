<?php

class Animal
{
    public $weight;

    public function eat()
    {
        var_dump('All animals can eat');
    }

    public function reproduce()
    {
        var_dump('All animals can reproduce');
    }
}