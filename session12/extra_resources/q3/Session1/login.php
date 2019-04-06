<?php

// THIS PAGE WILL ATTEMPT TO RETRIEVE SESSION VARIABLE
// TO DO THAT, THIS PAGE NEEDS TO START A SESSION
session_start();


// YOUR CODE GOES HERE
// The first time this page loads, there won't be any error messages in $_SESSION['errors'].
// If authentication fails in process_login.php, you will be sent back to this page (login.php).
//    In this case, there will be one or more error messages stored in $_SESSION['errors'].
//
// Retrieve this and display as an un-ordered list.
//    Even if there is only 1 error message, go ahead and display it in an un-ordered list.
//
// After you retrieve $_SESSION['errors], you need to UNSET this Session Variable.
//    unset($_SESSION['errors']);
// Do you know why we clear this?


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

</head>

<body class="text-center">
    <form class="form-signin" action="process_login.php" method="POST">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <?php
            // Check if there are any errors
            // Display error messages (if any)
            if( isset($_SESSION['errors']) ) {
                $errors = $_SESSION['errors'];
                if( count($errors) > 0 ) {
                    echo "
                        <ul>
                    ";

                    foreach($errors as $err) {
                        echo "
                            <li>$err</li>
                        ";
                    }

                    echo "
                        </ul>
                    ";
                }

                // Unset 'errors' Session variable
                unset($_SESSION['errors']);
            }
        ?>
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
        </label>

        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</body>
</html>
