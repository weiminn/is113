<?php
/* 
    Name:  
    Email: 
*/
?>
<html>
<head>

<style>
    tr, td, th, table {
        border: 1px solid black;
    }
</style>

<head>
<body>
    <?php
        if(isset($_POST['fruit']) == 0){
            echo '<h1>Please select a fruit</h1>';
        } else {
            $fruits = $_POST['fruit'];
            $num = sizeof($fruits);
            echo "<h1>You selected $num fruits</h1>";
            echo '<table>';
            foreach($fruits as $fruit){
                echo "<tr><td><img src='$fruit'></td></tr>";
            }
            echo '</table>';
        }
    ?>
    <form method='post' action='q2-one.php'>
        <input type="checkbox" value="apple" name="fruit[]">Apple
        <input type="checkbox" value="orange" name="fruit[]">Orange
        <input type="checkbox" value="pear" name="fruit[]">Pear
        <br>
        <input type='submit' name='send'>
    </form>
</body>
</html>