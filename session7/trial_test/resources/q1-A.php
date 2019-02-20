<?php
/* 
    Name:  
    Email: 
*/

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $div = $_POST['divisor'];

    echo '<ul>';

    function is_divisible_by($n, $d){
        return ($n%$d) == 0;
    }

    echo "<li>$num1 is divisible by $div: ";
    if(is_divisible_by($num1, $div)){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }

    echo "<li>$num2 is divisible by $div: ";
    if(is_divisible_by($num2, $div)){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }
    
    echo "<li>$num3 is divisible by $div: ";
    if(is_divisible_by($num3, $div)){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }

    echo '</ul>'


?>
