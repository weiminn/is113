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
            echo '<table>';
            foreach($fruits as $fruit){
                echo "<tr><td><img src='$fruit'></td></tr>";
            }
            echo '</table>';
        }
    ?>
</body>
</html>