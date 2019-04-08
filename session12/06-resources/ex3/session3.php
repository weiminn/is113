<?php session_start(); ?>
<html>
    <body>
        <form method="post" action="summary-session.php">
            Hobby: <input type="text" name="hobby"/>
            <?php
                # Add age information passed from session2.php to $_SESSION
                $_SESSION['age'] = $_POST['age'];
                
            ?>
            <input type="submit" value="Next"/>
        </form>
    </body>
</html>
