<?php
    class Vehicle{
        private $plateNum;
        private $type;
        public function printInfo(){
            echo "A Vehicle";
        }
        public function __construct($plateNum,$type){
            $this->plateNum = $plateNum;
            $this->type =  $type;
        }
    }
?>