<?php

    class RoadUser{
        
        // Properties
        
        private $name; 	
        private $postCode;		
        private $vehicle;    
        
        //Constructor

        public function __construct($name, $postCode, $plateNo, $type) {
                $this->name = $name;
                $this->postCode = $postCode;
                 // Initialize vehicle property which is an object of class Vehicle
                 $this->vehicle = new Vehicle($plateNo, $type);
        }

        // Getter methods

        public function getName(){
            return $this->name;
        }

        public function getPostCode() {
            return $this->postCode;
        }     

        public function getVehicle() {
            return $this->vehicle;
        } 
    }
?>
