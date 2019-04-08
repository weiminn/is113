<?php

// THIS PAGE WILL ATTEMPT TO RETRIEVE SESSION VARIABLE
// TO DO THAT, THIS PAGE NEEDS TO START A SESSION
session_start();

// DO NOT MODIFY THIS ASSOCIATIVE ARRAY
$accounts = [
    'donald@trump.com' => 'donald123',
    'hillary@clinton.com' => 'hillary456'
];

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
    
    if(array_key_exists($email, $accounts)) {
        if($accounts[$email] === $password) {
            $_SESSION['loggedInEmail'] = true;
        } else {
            $_SESSION['errors'][] = 'Password is incorrect!';
        }
    } else {
        $_SESSION['errors'][] = 'Email is not registered with us!';
    }
}

// YOUR CODE GOES HERE
// 1) COPY YOUR CODE from q3/NoSession/process_login.php
// AND
// 2) MODIFY IT
//
// If user login fails:
//    a) Store error message(s) into $errors (Indexed Array)
//    b) Set a new Session Variable $_SESSION['errors'] whose value will be $errors
//    c) Forward to login.php
//          login.php will then retrieve the value of Session Variable $_SESSION['errors'] and display

// Else (user login succeeds):
//    Go ahead and proceed with the below HTML (display sensitive data...)


?>
<html>
<body>

    <?php

        // FEEL FREE TO WRITE MORE CODE HERE (IF NEEDED)
        if (!empty($_SESSION['errors'])){
            $_SESSION['email'] = $email;
            header("Location: main.php");
        } else {
            header("Location: login.php");
        }
    ?>

</body>
</html>