<?php
    # Autoload
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );

    # Get parameters passed from register.php
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Hash entered password
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    # Add new user
    $dao = new UserDAO();
    $status = $dao->add($username,$hashed);
    if($status){
        echo "Registered successfully";
    }
    else{
        echo "Failed to register";
    }
?>