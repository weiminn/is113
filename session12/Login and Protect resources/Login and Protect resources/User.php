<?php

class User {
    private $username;
    private $passwordHash;
    private $active;
    private $usertype;

    function __construct($username, $passwordHash, $active = "y", $usertype = "normal") {
        $this->username = $username;
        $this->passwordHash = $passwordHash;
        $this->active = $active;
        $this->usertype = $usertype;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPasswordHash(){
        return $this->passwordHash;
    }

    public function getActive(){
        return $this->active;
    }

    public function getUsertype(){
        return $this->usertype;
    }    
}
