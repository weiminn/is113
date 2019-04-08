<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'model/common.php';

 # == Part A : ENTER CODE HERE == 

if(!empty($_POST['empId']) && !empty($_POST['password'])){
    $dao = new EmployeeDAO();
    $auth = $dao->authenticate($_POST['empId'], $_POST['password']);

    if(!$auth){
        if(!isset($_SESSION['countUnsuccessful'])){
            $_SESSION['countUnsuccessful'] = 0;
        } else {
            $_SESSION['countUnsuccessful']++;
        }        
    } else {
        unset($_SESSION['countUnsuccessful']);
        $emp = $dao->getEmployee($_POST['empId']);
        $_SESSION['empId'] = $emp->getEmpId();
        $_SESSION['role'] = $auth;

        header("Location: viewDetails.php");
        exit;

    }
}




 
?>

<html>
    <body>
<?php
    echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
    echo "<a href='login-view.html'>Back to Login";
?>
    </body>
</html>
