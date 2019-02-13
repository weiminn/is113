<?php
    class Vehicle{
        private $plateNum;
        private $type;

        function __construct($num, $tp){
            $this->plateNum = $num;
            $this->type = $tp;
        }

        public function printInfo(){
            echo "A Vehicle";
        }
    }
?>