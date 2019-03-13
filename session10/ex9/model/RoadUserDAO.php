<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class RoadUserDAO {
    private $roadUsers;

    public function __construct() {
        $this->roadUsers = array(
                new RoadUser("Shar", "12345", "A123", "car"),
                new RoadUser("Kyong", "12346", "A124", "car"),
                new RoadUser("David", "12347", "A125", "truck"));
    }
   
   public function getRoadUsers() {
       return $this->roadUsers;
   }
}