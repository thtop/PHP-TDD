<?php

class Book
{
    public $title;
    public $price;
    public $isStock = false;

    public function checkStock() {
        return $this->isStock ? "In Stock" : "Out of Stock";
    }

    public function display() {
        return "Title: $this->title, Price: $this->price";
    }
}