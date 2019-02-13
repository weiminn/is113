<?php

class BookDesc {
    private $isbn;
    private $title;

    public function __construct($isbn, $title) {
        $this->isbn = $isbn;
        $this->title = $title;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getTitle(){
        return $this->title;
    }
}
