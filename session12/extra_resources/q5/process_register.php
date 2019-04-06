<?php
require_once "common.php";

    $errors = [];

    // Get the data from form processing
    

    


    // Check if username is already taken

    

    // If one or more fields have validation error
    

    // if everything is checked. Create user Object and write to database



if ( $status ) {
    // success; redirect page
    $_SESSION["login_page"] = $username;
    header("Location: login.php");
    exit();
}
    
?>

