<?php

class Library {
    private $name;
    private $books;

    public function __construct($name, $books) {
        $this->name = $name;
        $this->books = $books;
    }

    public function getName(){
        return $this->name;
    }

    public function getBooks(){
        return $this->books;
    }
}
