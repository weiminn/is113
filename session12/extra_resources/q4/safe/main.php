<?php

// THIS PAGE WILL ATTEMPT TO RETRIEVE SESSION VARIABLE
// TO DO THAT, THIS PAGE NEEDS TO START A SESSION
require_once 'include/common.php';

$email = '';
$id = '';

// YOUR CODE GOES HERE
// Check if a user is logged in (authentication successful)
// Wait... process_login.php did the authentication and set a Session Variable for me to use.
$auth = false;
if(isset($_SESSION['loggedInEmail'])){
    if($_SESSION['loggedInEmail']){
        $email = $_SESSION['email'];
        $dao = new AccountDAO();
        $account = $dao->retrieve($email);
        $id = $account->getID();
        $auth = true;
    }
} else {
    header("Location: login.php");
}

?>
<html>
<body>

    <?php
        if($auth){
            echo "<h1>Hello, <?= $email ?> and welcome back!</h1><h1>Your confidential task list: </h1>";
            
            $dao = new TaskDAO();
            $tasks = $dao->retrieveByAccountID($id);

            $i = 1;
            foreach ($tasks as $task){
                $desc = $task->getDescription();
                echo "$i. $desc<br/>";
                $i++;
            }
    
            echo "<h1><a href='logout.php'>Log Out</a></h1>";
        }
    ?>

    

</body>
</html>