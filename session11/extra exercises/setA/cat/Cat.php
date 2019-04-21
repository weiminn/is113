<?php

class Cat {
    private $name;
    private $age;
    private $gender;
    private $status;

    public function __construct($name, $age, $gender, $status) {
        // YOUR CODE GOES HERE
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->status = $status;
    }

    public function getName() {
        // YOUR CODE GOES HERE
        return $this->name;
    }

    public function getAge() {
        // YOUR CODE GOES HERE
        return $this->age;
    }

    public function getGender() {
        // YOUR CODE GOES HERE
        return $this->gender;
    }

    public function getStatus() {
        // YOUR CODE GOES HERE
        return $this->status;
    }
}

?>