<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part D : ENTER CODE HERE == 
if(!empty($_GET['empId']) && !empty($_GET['newPassword'])){
    $dao = new EmployeeDAO();
    $status = $dao->updatePassword($_GET['empId'], $_GET['newPassword']);
    if($status){
        echo 'Password Updated. You are logged out';
        
        $_SESSION = [];
    }
}


?>