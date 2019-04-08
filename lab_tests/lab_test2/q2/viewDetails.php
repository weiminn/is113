<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part B : ENTER CODE HERE == 
if(isset($_SESSION['role'])){
    $role = $_SESSION['role'];

    $dao = new EmployeeDAO();

    if($role == "Admin"){
        $data = $dao->getAllEmployees();

        echo '<table border="1">';
        echo '<tr><th>Employee ID</th><th>Name</th><th>Spouse</th><th>Child</th><th>Password</th></tr>';

        foreach($data as $emp){

            $spouse = $dao->getSpouse($emp->getEmpId());
            $sName = 'None';
            if($spouse){
                $sName = $spouse->getSpouseName();
            }
            echo "<tr>
            <td>{$emp->getEmpId()}</td>
            <td>{$emp->getName()}</td>
            <td>{$sName}</td>
            <td>";
    
            $children = $dao->getChildren($emp->getEmpId());
    
            if(sizeof($children) == 0){
                echo 'None';
            } elseif (sizeof($children) == 1){
                echo "{$children[0]}";
            } else {
                foreach($children as $key => $value){
                    echo "$key<br>";
                }
            }
            
            echo "</td><td>";

            echo "<a href='updatePassword?empId={$emp->getEmpId()}'>{$emp->getPassword()}</a>";

            echo "</td></tr>";
        }        
        echo '</table>';

    } elseif ($role=="User"){
        $data = $dao->getEmployee($_SESSION['empId']);

        echo '<table border="1">';
        echo '<tr><th>Employee ID</th><th>Name</th><th>Spouse</th><th>Child</th></tr>';

        $spouse = $dao->getSpouse($_SESSION['empId']);
        echo "<tr>
        <td>{$_SESSION['empId']}</td>
        <td>{$data->getName()}</td>
        <td>{$spouse->getSpouseName()}</td>
        <td>";

        $children = $dao->getChildren($_SESSION['empId']);

        if(sizeof($children) == 0){
            echo 'None';
        } elseif (sizeof($children) == 1){
            echo "{$children[0]}";
        } else {
            foreach($children as $key => $value){
                echo "$key<br>";
            }
        }
        
        echo "</td></tr>";
        
        
        echo '</table>';

        echo 'You are logged out';
        $_SESSION = [];
    }
}

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
        <?php
        
			
            
		?>
	</body>
</html>