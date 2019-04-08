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

		<h1>Survey: Summary</h1>

        <?php
            
            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page2'])) {
                header("Location: survey1.php");
                exit;
            }
            #===

            # == Part B (Display student name and preferences): ENTER CODE HERE ==

            echo 'You entered: <br>';
            echo '<table>';
			
            echo "<tr><th>Name</th>
            <td>{$_POST['name']}</td></tr>";

            echo "<tr><th>Class Length</th>
            <td>{$_POST['class_length']}</td></tr>";
 
            echo "<tr><th>Semester Length</th>
            <td>{$_POST['sem_length']}</td></tr>";

			
            echo '</table>';
            
            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            
            $dao = new ResponseDAO();
            $status = $dao->addResponse($_POST['name'], $_POST['class_length'], $_POST['sem_length']);
            
            if($status){
                echo '<br><strong>Response saved successfully</strong>';
            } else {
                echo '<br><strong>Response was not saved successfully</strong>';
            }
            
            # ====
  
        ?>

</body>
</html>