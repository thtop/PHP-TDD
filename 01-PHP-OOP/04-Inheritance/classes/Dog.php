<?php

class Dog extends Mammal 
{
    public $color;

    public function brak()
    {
        var_dump('I can bark because I am a ' . strtolower((get_class())));
    }

    public function chase()
    {
        var_dump('I am chasing a Rabbit');
    }

    public function breathe()
    {
        var_dump('I breathe very fast');
    }
}