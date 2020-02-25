<?php

class Mammal extends Animal 
{
    public $heartRate;

    public function breathe()
    {
        var_dump('I can breathe because I am a Mammal');
    }
}