<?php

class ContactDAO {
    private $contacts;

    function __construct() {
        $this->contacts = array(
            "ace@gmail.com" => new Contact("ace@gmail.com", "Ace Ang" ),
            "bay@live.com" => new Contact("bay@live.com", "Bay Ming Chun", "91234567" ),
            "chan@smu.edu.sg" => new Contact("chan@smu.edu.sg", "Chan Lay Keng", "98765432", "Catnip Park" )
        );
    }
    
    function getAll() {
        
        return array_values($this->contacts);
    }
    
    function get( $email ) {
        return $this->contacts[$email];
    }
}
