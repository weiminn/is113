<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dao = new UserDAO();
    $user = $dao->retrieve($username);
    $success = false;
    if($user != null){
        $hash = $user->getHashedPassword();
        $success = (password_hash($password,PASSWORD_DEFAULT)===$hash);  
        if($success){
            echo "Successful Login";
        }
    }
    if (!$success){ echo "Failed Login";}
?>
