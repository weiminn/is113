<?php

// THIS PAGE WILL ATTEMPT TO RETRIEVE SESSION VARIABLE
// TO DO THAT, THIS PAGE NEEDS TO START A SESSION
session_start();

$email = '';

// YOUR CODE GOES HERE
// Check if a user is logged in (authentication successful)
// Wait... process_login.php did the authentication and set a Session Variable for me to use.
//     $_SESSION['loggedInEmail']
//
// If this Session Variable does NOT exist, it means:
//     - You may be attempting to access main.php directly (key in the URL in web browser address bar)
//     - This action is NOT permitted!
//     - Forward to login.php
// Else (this Session Variable exists) it means:
//     - main.php can go ahead and display sensitive data below.

?>
<html>
<body>

    <h1>Hello, <?= $email ?> and welcome back!</h1>

    <h1>Sensitive data below...</h1>

    <h1>
        <a href='logout.php'>Log Out</a>
    </h1>

</body>
</html>