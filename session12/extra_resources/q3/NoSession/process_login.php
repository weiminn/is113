<?php

// DO NOT MODIFY THIS ASSOCIATIVE ARRAY
$accounts = [
    'donald@trump.com' => 'donald123',
    'hillary@clinton.com' => 'hillary456'
];

$errors = []; // It will store one or more Authentication Error messages
$login = false;
$email = '';
$password = '';

// YOUR CODE GOES HERE
// FORM PROCESSING
// AUTHENTICATE email and password. Check against $accounts.
if (isset($_POST['email']) && isset($_POST['password'])) {
    $login = true;
    $email = $_POST['email'];
    $password = $_POST['password'];
    # code...
    
    if(array_key_exists($email, $accounts)) {
        if($accounts[$email] === $password) {

        } else {
            $errors[] = 'Password is incorrect!';
        }
    } else {
        $errors[] = 'Email is not registered with us!';
    }
}


?>
<!doctype html>
<html>
<body>

    <?php

        // FEEL FREE TO WRITE MORE CODE HERE (IF NEEDED)
        if($login){
             if (empty($errors)){
                echo "
                    <h1>Hello, $email and welcome back!</h1>
                    <h1>Sensitive data...</h1>
                ";
             } else {
                 echo $errors[0];
             }
            
        } else {
            echo "
                <h1>Attempting to access sensitive data without logging in? NO!</h1>
            ";
        }

    ?>

</body>
</html>