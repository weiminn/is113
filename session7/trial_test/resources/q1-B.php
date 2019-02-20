<?php
/* 
    Name:  
    Email: 
*/

    $num_string = $_POST['numbers'];
    $divisor = $_POST['divisor'];

    $nums = explode(',', $num_string);

    function is_divisible_by($n, $d){
        return ($n%$d) == 0;
    }

    echo '<ul>';

    foreach ($nums as $num){
        echo "<li>$num is divisible by $divisor: ";
        if(is_divisible_by($num, $divisor)){
            echo 'YES</li>';
        } else {
            echo 'NO</li>';
        }
    }

    echo '</ul>';
    
?>