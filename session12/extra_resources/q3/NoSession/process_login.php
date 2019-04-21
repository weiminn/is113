<?php

// DO NOT MODIFY THIS ASSOCIATIVE ARRAY
$accounts = [
    'donald@trump.com' => 'donald123',
    'hillary@clinton.com' => 'hillary456'
];

$errors = []; // It will store one or more Authentication Error messages
$email = '';

// YOUR CODE GOES HERE
// FORM PROCESSING
// AUTHENTICATE email and password. Check against $accounts.


?>
<!doctype html>
<html>
<body>

    <?php

        // FEEL FREE TO WRITE MORE CODE HERE (IF NEEDED)

        echo "
            <h1>Hello, $email and welcome back!</h1>
            <h1>Sensitive data...</h1>
        ";

        echo "
            <h1>Attempting to access sensitive data without logging in? NO!</h1>
        ";

    ?>

</body>
</html>