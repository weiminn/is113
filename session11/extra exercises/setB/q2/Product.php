<?php

class Product {
    private $name;
    private $category;
    private $quantity;
    private $price;

    public function __construct($name, $category, $quantity, $price){
        $this->$name = $name;
        $this->$category = $category;
        $this->$quantity = $quantity;
        $this->$price = $price;
    }

    public function getProductName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
?>