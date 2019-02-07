<?php
	// In real-life, the following will be retrieved from a database.
	// Mapping of countries to their capital city.
	$capitals = array(
				"Indonesia" => "Jakarta", 
				"Malaysia" => "Kuala Lumpur", 
				"Philippines" => "Manila", 
				"Singapore" => "Singapore", 
				"Thailand" => "Bangkok", 
				"Brunei" => "Bandar Seri Begawan", 
				"Cambodia" => "Phnom Penh", 
				"Laos" => "Vientiane"				
			);
			
	/*
	INSTRUCTIONS
	============
	1.  Do NOT change the code above.
	2. 	Add the following countries and their capitals to the array $capitals.
			Country		Capital
			----------  ------------
			Myanmar		Naypyidaw
			Vietnam		Hanoi
	*/
	$capitals["Myanmar"] = "Naypyidaw";
	$capitals["Vietnam"] = "Hanoi";
?>
<html>
<head>
	<style>
		table, th, td {
			border: 1px solid black;
		 }
	</style>
</head>
<body>

	<!--
		INSTRUCTIONS
		============
		3.  For each country-form value submitted, 
			a.  Find the capital city of the country using $capitals.
			b.  Print out the country and its capital as rows in a table.
		4.  If there is no country selected (i.e. user did not check any checkbox), print "No country selected."
	-->
	<?php
	if ( isset($_GET["countries"])) {
		?>
		<table>
			<tr>
				<th>Country</th>
				<th>Capital</th>
			</tr>

		<?php
		// 1.  For each country-form value submitted, 
		foreach ($_GET["countries"] as $country) {
			// a.  Find the capital city of the country using $capitals.
			$capital = $capitals[ $country ];
			// b.  Print out the country and its capital as rows in a table.
		?>
			<tr>
				<td><?php echo "$country"; ?></td>
				<td><?php echo "$capital"; ?></td>
			</tr>
		<?php
		} // foreach	
		?>
		</table>
		<?php
	}
	// 2.  If there is no country selected (i.e. user did not check any checkbox), print "No country selected."
	else {
		echo "No country selected.<br/>";
	}
	?>
	
	
</body>
</html>