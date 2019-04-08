<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>Login</h1>
        <form method="post" action="process_login.php">
            <?php 
                $username = "";
                # Get the value of "username" if it exists in $_GET
                
            ?>   
            Username <input type="text" name="username" value="<?= $username?>"/>
            <br/>
            Password <input type="password" name="password"/>
            <br/>
            <input type="submit" value="Login"/>
        </form>
        <?php
            # Check if "error" key exists in the session
            if (isset($_SESSION['error'])) {
                # code...
                $error = $_SESSION['error'];
                echo "<p style='color: red'>$error</p>"; 
                unset($_SESSION['error']);
            }
                
        ?>
    </body>
</html>
