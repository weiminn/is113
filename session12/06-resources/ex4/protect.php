<?php
    session_start();
    // No session variable "user" => no login
    if ( !isset($_SESSION["user"]) ) {
         // redirect to login page
         header("Location: login.php"); 
         exit;
    }
?>
