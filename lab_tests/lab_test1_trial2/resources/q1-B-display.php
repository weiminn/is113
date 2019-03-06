<?php
/* 
    Name:  
    Email: 
*/

$messages = [
    "trump"   => "Make America Great Again",
    "clinton" => "More Women in Office",
    "kim"     => "Nukes Fly High and Far",
    "moon"    => "One Korea One People"
];

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td, tr {
                border: 1px solid black;
            }
        </style>
    </head>
<body>

    <?php
        if(isset($_POST['persons'])){
            $persons = $_POST['persons'];
            
            echo "<table>";

            echo "<tr><th>Photo</th><th>Message</th></tr>";
            // var_dump($persons);
            foreach($persons as $p){
                echo "<tr>";
                echo "<td><img src='./$p.jpg'></td>";
                echo "<td>$messages[$p]</td>";
                echo '</tr>';
            }

            echo "</table>";

        } else {
            echo '<h1>You must select a person!</h1>';
        }
    ?>

</body>
</html>