<html>

    <body>
        <form method="POST" action="number.php">
            Enter a value:
            <?php
                $x = 1;
                echo '<table>';
                for ($i = 1; $i <= 10; $i++){
                    echo '<tr>';
                
                    for ($j = 1; $j <= 10; $j++){
                        if ($x == 50){
                            echo '<td><input type="radio" name="number" value=' . $x . ' checked>' . $x . '</td>';
                        } else {
                            echo '<td><input type="radio" name="number" value = '. $x .'>' . $x . '</td>';
                        }
                        
                        $x++;
                    }
                    echo '</tr>';
                }
                echo '</table>';
            ?>
            <input type="submit" value="Submitt">
        </form>
        <?php
        
            if(isset($_POST['number'])){
                $n = $_POST['number'];
                $r = random_int(1, 100);

                echo 'You have entered ' . $n . '</br>';
                echo 'Random number is ' . $r . '</br>';

                if($n < $r){
                    echo 'Result: Smaller</br>';
                } elseif($n < $r){
                    echo 'Result: Bigger</br>';
                } else{
                    echo 'Result: Tie</br>';
                }
            }

        ?>
    </body>

</html>