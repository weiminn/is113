<?php

// THIS PAGE WILL ATTEMPT TO RETRIEVE SESSION VARIABLE
// TO DO THAT, THIS PAGE NEEDS TO START A SESSION
require_once 'include/common.php';

// DO NOT MODIFY THIS ASSOCIATIVE ARRAY

$errors = []; // It will store one or more Authentication Error messages
$login = false;
$password = '';

// YOUR CODE GOES HERE
// FORM PROCESSING
// AUTHENTICATE email and password. Check against $accounts.
$_SESSION['errors'] = [];
if (isset($_POST['email']) && isset($_POST['password'])) {
    $login = true;
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $dao = new AccountDAO();
    $account = $dao->retrieve($_POST['email']);

    if($account !== null) {
        if($account->getPass() === $password) {
            $_SESSION['loggedInEmail'] = true;
        } else {
            $_SESSION['errors'][] = 'Password is incorrect!';
        }
    } else {
        $_SESSION['errors'][] = 'Email is not registered with us!';
    }
}

?>
<html>
<body>

    <?php

        // FEEL FREE TO WRITE MORE CODE HERE (IF NEEDED)
        if (empty($_SESSION['errors'])){
            $_SESSION['email'] = $email;
            header("Location: main.php");
        } else {
            header("Location: login.php");
        }
    ?>

</body>
</html>