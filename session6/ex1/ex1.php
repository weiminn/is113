<?php
    # These will be explained later
    require_once "Vehicle.php";
    if(class_exists("Vehicle")){
        $v = new Vehicle();
        $v->printInfo();
    }
?>