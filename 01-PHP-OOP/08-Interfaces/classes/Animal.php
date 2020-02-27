<?php

class Animal
{
    public function chase($target)
    {
        var_dump('chasing a ' . $target);
    }

    public function kill($target)
    {
        var_dump('I have just killed a ' . $target);
    }
}