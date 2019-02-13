<?php
     require_once "Vehicle.php";
     $v1 = new Vehicle("27","car");
     $v2 = new Vehicle("37","truck");
     $v1->printInfo();
     echo ' with plate number ' . $v1->getPlateNum();
     echo "<br/>";
     $v2->printInfo();
     echo ' with plate number ' . $v2->getPlateNum();
     echo "<br/>";
?>