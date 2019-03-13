 <!--  
    Name: Wei Minn
    Email: wei.minn.2018@sis.smu.edu.sg
 -->


<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>

	<style type="text/css">
		table {
 			border-collapse: collapse;
 			border: 1px solid black;
			width: 30%;
 		}
		th, td {
			border: 1px solid black;
		}
	</style>
</head>

<body>

	<!-- Add your codes here to print Receipt ---->

	<?php

		if(isset($_POST['type'])){
			$type = $_POST['type'];
			
			$cost = 0;
			
			echo '<table>';
			echo '<tr><th colspan="2">Your Boba Order</th></tr>';
			
			if($type == 'AhKong'){
				$cost += 3.5;
				$numberPrice = number_format($cost, 2);
				echo "<tr><td>Ah Kong Original Milk Tea</td><td>$$numberPrice</td></tr>";
			} elseif($type == 'BrownSugar'){
				$cost += 3.8;
				$numberPrice = number_format($cost, 2);
				echo "<tr><td>Brown Sugar Green Tea Macchiato</td><td>$$numberPrice</td></tr>";
			} elseif($type == 'EarlGrey'){
				$cost += 3;
				$numberPrice = number_format($cost, 2);
				echo "<tr><td>Earl Grey Milk Tea</td><td>$$numberPrice</td></tr>";
			} elseif($type == 'Rainbow'){
				$cost += 4;
				$numberPrice = number_format($cost, 2);
				echo "<tr><td>Rainbow Milk Tea</td><td>$$numberPrice</td></tr>";
			}

			

			if(array_key_exists('topping', $_POST)){
				echo '<tr><td colspan="2">Toppings:</td></tr>';
				$toppings = $_POST['topping'];

				foreach($toppings as $topping){
					$cost += .50;
					echo "<tr><td>$topping</td><td>$0.50</td></tr>";
				}
			} else {
				echo '<tr><th colspan="2">No Toppings</th></tr>';
			}

			$numberPrice = number_format($cost, 2);
			echo "<tr><td>Total: </td><td>$$numberPrice</td></tr>";
			
			
			echo '</table>';
		} else {
			echo '<h2>Please select a tea type!</h2>';
		}
	?>
	

</body>
</html>

