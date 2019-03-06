<?php
/* 
    Name:  
    Email: 
*/

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In',
    "putin"    => 'Vladimir Putin'
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
            if(sizeof($persons) < 3){
                echo '<h1>Select at least THREE (3) people!</h1>';
            }
        } else {
            echo '<h1>You didn\'t select anyone! Select at least THREE (3) people!</h1>';
        }

    ?>
    <form method='post' action='q3.php'>
        <table>
            <tr><th>Person</th></tr>
            <?php

                foreach($people as $p => $n){
                    echo "<tr><td><input type='checkbox' name='persons[]' value='$p'>$n</td></tr>";
                }

            ?>
            <tr><td><input type='submit' value="Submit"></td></tr>
        </table>
    </form>

    <br>
    <table>

    <?php

        $arr = [];

        function checkDiag($size, $arr) {
            $diag1 = TRUE;
            $diag2 = TRUE;

            for($i = 0; $i < $size-1; $i++){
                if($arr[$i][$i] != $arr[$i+1][$i+1]){
                    $diag1 = FALSE;
                }
            }
            if($diag1 == TRUE){
                echo "<h1>Top Left to Bottom Right Diagonal FOUND</h1>";
            }

            for($i = 0; $i < $size-1; $i++){
                if($arr[$i][$size -1 -$i] != $arr[$i + 1][$size - 2 - $i]){
                    $diag2 = FALSE;
                }
            }
            if($diag2 == TRUE){
                echo "<h1>Top Right to Bottom Left Diagonal FOUND</h1>";
            }
        }


        if(isset($_POST['persons'])){
            $persons = $_POST['persons'];
            if(sizeof($persons) < 3){
                echo '<h1>Select at least THREE (3) people!</h1>';
            } else {
                $size = sizeof($persons);

                for($i = 0; $i < $size; $i++){
                    for($j = 0; $j < $size; $j++){
                        $rand = random_int(0, $size-1);
                        $arr[$i][$j] = $persons[$rand];
                    }
                }

                // var_dump($arr);

                for($i = 0; $i < $size; $i++){
                    echo '<tr>';
                    for($j = 0; $j < $size; $j++){
                        $pic = $arr[$i][$j];
                        echo "<td><img src='$pic.jpg'></td>";
                        
                    }
                    echo '</tr>';
                }

                checkDiag($size, $arr);


            }
        } else {
            echo '<h1>You didn\'t select anyone! Select at least THREE (3) people!</h1>';
        }

    ?>

    </table>
</body>
</html>