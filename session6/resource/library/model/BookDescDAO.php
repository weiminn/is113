<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class BookDescDAO {
    private $bookDescMap;

    public function __construct() {
        $this->bookDescMap = array(
                "isbn1" => new BookDesc("isbn1", "I love SIS"),
                "isbn2" => new BookDesc("isbn2", "SIS loves me"),
                "isbn3" => new BookDesc("isbn3", "History of SMU"),
            );
    }
   
   public function getBookDesc($isbn) {
       return $this->bookDescMap[$isbn];
   }
}
