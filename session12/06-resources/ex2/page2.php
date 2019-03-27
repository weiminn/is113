<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="page3.php">
            Age: <input type="text" name="age"/>
            <?php
                echo "<input type='hidden' name='name' 
                            value='". $_POST['name'] . "'/>";
            ?>
            <input type="submit" value="Next"/>
        </form>
    </body>
</html>