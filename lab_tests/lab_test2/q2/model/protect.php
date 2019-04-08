<?php

/*
    Name: WEI MINN

    Email: WEI.MINN.2018@SIS.SMU.EDU.SG
*/

require_once 'common.php';
# == Part E : ENTER CODE HERE == 
if(!isset($_SESSION['role'])){
    header('Location: login-view.html');
    exit;
}

?>