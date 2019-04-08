<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
<style>
table, tr, th, td {
	border: 1px solid black;
}
</style>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            $dao = new ResponseDAO();
            $all = $dao->retrieveAll();

            $num = sizeof($all);
            $total2 = 0;
            $total15 = 0;

            foreach($all as $response){
                if($response->getPreferredClassLength() == 2){
                    $total2++;
                }
                if($response->getPreferredSemLength() == 15){
                    $total15++;
                }
            }

            $percent15 = number_format(($total15/$num)*100, 2);

            echo '<table>';
			
            echo "<tr><th># Responses</th>
            <td>{$num}</td></tr>";

            echo "<tr><th># 2 hours</th>
            <td>$total2</td></tr>";
 
            echo "<tr><th>% 15 weeks</th>
            <td>$percent15%</td></tr>";

			
            echo '</table>';
            # ====
		?>
	</body>
</html>