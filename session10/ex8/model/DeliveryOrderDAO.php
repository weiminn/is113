<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class DeliveryOrderDAO {
    private $deliveryOrders;

    public function __construct() {
        $this->deliveryOrders = array(
                new DeliveryOrder("Shar", "6828374", "Jurong West", "platinum", ["Fish" => 1, "Steak" => 0, "Chicken" => 2]),
                new DeliveryOrder("Kyong", "6828375", "Clementi", "gold", ["Fish" => 3, "Steak" => 0, "Chicken" => 0]),
                new DeliveryOrder("David", "6828376", "Tampines", "silver", ["Fish" => 0, "Steak" => 1, "Chicken" => 1]));
    }
   
   public function getDeliveryOrders() {
       return $this->deliveryOrders;
   }
}