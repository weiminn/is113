<?php

	spl_autoload_register(
		function($class){
			require_once "model/simple/$class.php";
		}
	);

	$harry = new Person("Harry",17);
	$car = new Vehicle("27","car");
	echo $harry->drive() . "<br/>";
	echo $car->printInfo();
?>
