<?php 
    class User{
        private $username;
        private $hashedPassword;
        public function __construct($username,$hashed_password){
            $this->username = $username;
            $this->hashedPassword = $hashed_password;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getHashedPassword(){
            return $this->hashedPassword;
        }
    }
?>