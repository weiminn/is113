<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class LibraryDAO {
    private $libraries;

    public function __construct() {
        $this->libraries = array();
        
        $books = array(
                new Book("isbn1", "available"),
                new Book("isbn1", "on loan"),
                new Book("isbn1", "available"),
                new Book("isbn2", "on loan"),
                new Book("isbn2", "available"),
            );
        $lib = new Library("LKC", $books);
        $this->libraries["LKC"] = $lib;
        
        $books = array(
                new Book("isbn1", "on loan"),
                new Book("isbn2", "on loan"),
                new Book("isbn2", "available"),
                new Book("isbn3", "on loan"),
                new Book("isbn3", "on loan"),
            );
        $lib = new Library("Central", $books);
        $this->libraries["Central"] = $lib;
    }

    public function getLibraries() {
        return $this->libraries;
    }
    
}
