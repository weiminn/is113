<?php
/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 
if(isset($_GET['empId'])){
    $dao = new EmployeeDAO();
    $emp = $dao->getEmployee($_GET['empId']);

    echo '<form method="GET" action="process.php"><table>';
                
    echo "<tr><td>EmployeeID : </td>
    <td>{$emp->getEmpId()}</td></tr>";

    echo "<tr><td>Name : </td>
    <td>{$emp->getName()}</td></tr>";

    echo "<tr><td>Current Password : </td>
    <td>{$emp->getPassword()}</td></tr>";

    $rPw = generateRandomPassword();
    echo "<tr><td>New Password : </td>
    <td><input name='newPassword' type='text' value='$rPw'></td></tr>";


    echo '</table><input type="submit" value="Update"><input type="text" name="empId" hidden value="'. $emp->getEmpId() . '"></form>';
}



function generateRandomPassword(){
# == Part C : ENTER CODE HERE == 
$chars = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890";
$pw = '';

for($i = 0; $i<8; $i++){
    $rPos = rand(0, sizeof(str_split($chars))-1);
    $pw .= str_split($chars)[$rPos];
}

return $pw;

}
?>