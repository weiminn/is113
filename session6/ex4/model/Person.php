<?php
	class Person{
        private $name;
        private $postCode;

		public function __construct($name, $postCode){
            $this->name = $name;
            $this->postCode = $postCode;
		}
        
        public function drive(){
			echo "Hi! I am driving a car";
        } 

        public function getName() {
            return $this->name;
        }

        public function setName($n) {
            return $this->name = $n;
        }
        
        public function getPostCode() {
            return $this->postCode;
        }

        
    }

?>
