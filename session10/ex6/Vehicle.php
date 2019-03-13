<?php
    class Vehicle{
        private $plateNum;
        private $type;
        public function getPlateNum(){
            return $this->plateNum;
        }
        public function getType(){
            return $this->type;
        }
        public function setPlateNum($plateNum){
            $this->plateNum = $plateNum;
        }
        public function  setType($type){
            $this->type = $type;
        }
        public function printInfo(){
            # Option 1
            // echo "A {$this->getType()} with plate number {$this->getPlateNum()}";
            # Note: The above line would work only if we use the {}

            # Option 2
            echo "A {$this->type} with plate number {$this->plateNum}";
            # Note: The above line works even without {}. However, to make
            #       it easy to remember, just put {} if you would like to include
            #       something related to an object (or an array) in a double quote print
        }
        public function __construct($plateNum,$type){
            $this->plateNum = $plateNum;
            $this->type =  $type;
        }
    }
?>