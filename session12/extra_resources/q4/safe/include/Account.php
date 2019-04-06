<?php

class Account {

    private $id;
    private $email;    
    private $pass;
    
    public function __construct($id, $email, $pass) {
        $this->id = $id;
        $this->email = $email;
        $this->pass = $pass;
    }

    public function getID() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPass() {
        return $this->pass;
    }
}

?>