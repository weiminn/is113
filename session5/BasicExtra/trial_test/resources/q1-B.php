<?php
/* 
    Name:  
    Email: 
*/

    $num_string = $_POST['numbers'];
    $divisor = $_POST['divisor'];

    $nums = explode(',', $num_string);

    echo '<ul>';

    foreach ($nums as $num){
        echo "<li>$num is divisible by $divisor: ";
        if($num % $divisor == 0){
            echo 'YES</li>';
        } else {
            echo 'NO</li>';
        }
    }

    echo '</ul>';
    
?>