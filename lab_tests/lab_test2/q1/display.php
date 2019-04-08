<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
<head>
<style>
table, tr, th, td {
	border: 1px solid black;
}
</style>

</head>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
		<table border='1'>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 
			$dao = new ResponseDAO();
			$responses = $dao->retrieveAll();

			echo '<table>';
			echo '<tr><td>Name</td><td>Preferred Class Length (in hours)</td><td>Preferred Sem Length (in weeks)</td></tr>';

			foreach($responses as $response){
				echo "<tr><td>{$response->getName()}</td>
				<td>{$response->getPreferredClassLength()}</td>
				<td>{$response->getPreferredSemLength()}</td></tr>";
			}

			
			echo '</table>';
            # ====
		?>
		</table>
	</body>
</html>