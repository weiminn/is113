<?php
require_once "common.php";

    // email and name cannot be blank nor empty string

    
    
    // Get the data from form processing and check data
    

    
    // Check if password is valid
    

    // Errors to show in change_password.php
    
    // update the hased password in the database
    
    // if password is successfully changed, redirect to login.php
    // else reload the page

    if ( $status ) {
    // success; redirect
    $_SESSION["login_page"] = $username;
    header("Location: login.php");
    exit();
    }
    else {
        $_SESSION["pwd_change_fail"]= $username;
     $errors[] = "Error in update user user.";
    
    }

?>