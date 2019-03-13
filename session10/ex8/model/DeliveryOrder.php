<?php

    class DeliveryOrder{

        //    Declare three constants that defines the price of each dish
        //    fish price $25, steak price $35, chicken price $15
        const FISH = 25;
        const STEAK = 35;
        const CHICKEN = 15; 
        
        //    Code to declare three constants that defines discounts
        //    corresponding to three types of memberships
        //    platinum members get 15% discount of total bill
        //    gold members get 10% discount of total bill
        //    silver members get 5% discount of total bill
        const PLATINUM = 0.15;
        const GOLD = 0.1;
        const SILVER = 0.05;


        //    Properties -- $delivery_id, $name, $phone, $address, $membership, $orders;
        public $delivery_id; 	    
        public $name;
        private $phone;
        private $address;
        private $membership;
        public $orders;  

        //  Constructor
        public function __construct($name, $phone, $address, $membership, $orders) {
                // delivery id is generated randomly
                $this->delivery_id = rand(1000,10000);
                $this->name = $name;
                $this->phone = $phone;
                $this->address = $address;
                $this->membership = $membership;
                $this->orders = $orders;
        }

        // Getter method for delivery_id
        public function getID() {
            return $this->delivery_id;
        }

        // Getter method for name
        public function getName() {
            return $this->name;
        }

        // Method to compute the final bill 
        public function computeBill() {
            $bill = 0;
            $bill += $this->orders["Fish"] * self::FISH;
            $bill += $this->orders["Steak"] * self::STEAK;
            $bill += $this->orders["Chicken"] * self::CHICKEN;
            $bill = $bill * (1-$this->getDiscount()); // compute price after discount
            return $bill;
        }
        
        // Helper method to compute discount
        private function getDiscount() {
            if($this->membership=="platinum") {
                return self::PLATINUM;
            } elseif($this->membership=="gold") {
                return self::GOLD;
            } elseif($this->membership=="silver") {
                return self::SILVER;
            } else {
                return 0;
            }

        }
    }
?>