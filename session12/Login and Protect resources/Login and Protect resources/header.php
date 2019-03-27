<?php


// get username of login user from session
$username = $_SESSION['login']->getUsername();

?>
<h1>Welcome <?php echo $username; ?>!</h1>
<p>
    <a href="index.php">Home</a> | 
    <a href="create.php">New contact</a> |
    <a href="createUser.php">New user</a> |
    <a href="logout.php">Logout</a>
</p>
