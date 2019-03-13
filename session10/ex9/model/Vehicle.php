<?php
    class Vehicle{
        
        // Properties
        private $plateNum; 	     
        private $type;    

        // Constructors

        public function __construct($plateNum, $type) {
            $this->plateNum = $plateNum;
            $this->type = $type;
        }

        // Getter methods

        public function getPlateNumber() {
            return $this->plateNum;
        }

        public function getType() {
            return $this->type;
        }   
    }
?>
