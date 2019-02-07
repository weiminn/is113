<?php
	// In real-life, the following will be retrieved from a database.
	// List of countries.
	$seating_plan = 
		array(
			array( "amy", "alex", "alfred" ),
			array( "betty" ),
			array( "cat", "cindy", "catherine", "connie", "celest" ), 
			array( "dan", "derrick", "donnie", "dickson", "duke", "donald" ),
			array( "ellen", "eleen" ),
			array( "faye", "fred", "flint" ),
			array( "george" ),
		);
?>
<html>
<body>
	<h1>Seating plan</h1>
	<?php
		/*
		INSTRUCTIONS
		============
		1.  For each row in 2D-array $seating_plan, 
			a.  Print row number (starting from 1) followed by a colon 
				and all the names in row separated by a space
			b.	Print each row on a separate line.
		
		Expected output:
		--- output: start ---
		Row 1: amy alex alfred 
		Row 2: betty 
		Row 3: cat cindy catherine connie celest 
		Row 4: dan derrick donnie dickson duke donald 
		Row 5: ellen eleen 
		Row 6: faye fred flint 
		Row 7: george 
		--- output: end ---
		*/

		$rno = 1;
		foreach($seating_plan as $row){
			echo 'Row&nbsp'. $rno . ':&nbsp';
			foreach($row as $person){
				echo $person . ' ';
			}
			echo '<br>';
			$rno++;
		} 
		
	?>
	
	<h1>Seating plan without the first and last rows, and without the first and last seats</h1>
	<?php
		/*
		INSTRUCTIONS
		============
		1.  For each row in 2D-array $seating_plan EXCLUDING the first and last row, 
			a.  Print row number (starting from 2) followed by a colon 
				and all the names in row separated by a space EXCLUDING the first and last names.
			b.	Print each row on a separate line.
		
		Expected output:
		--- output: start ---
		Row 2: 
		Row 3: cindy catherine connie 
		Row 4: derrick donnie dickson duke 
		Row 5: 
		Row 6: fred 
		--- output: end ---

		*/

		for($r = 1; $r < sizeof($seating_plan)-1; $r++){
			echo "Row&nbsp". strval($r+1) . ":&nbsp";
			// echo 'Row:&nbsp'; 
			// echo $r-1; 
			// echo '&nbsp';
			for($p = 1; $p < sizeof($seating_plan[$r]) - 1; $p++){
				echo $seating_plan[$r][$p] . ' ';
			}
			echo '<br>';
		}
		
	?>
	
</body>
</html>