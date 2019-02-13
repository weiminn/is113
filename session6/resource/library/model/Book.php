<?php

class Book {
    private $isbn;
    private $status;

    public function __construct($isbn, $status) {
        $this->isbn = $isbn;
        $this->status = $status;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getStatus(){
        return $this->status;
    }

}
