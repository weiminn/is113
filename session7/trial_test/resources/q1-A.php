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

    echo "<li>$num1 is divisible by $div: ";
    if($num1 % $div == 0){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }

    echo "<li>$num2 is divisible by $div: ";
    if($num2 % $div == 0){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }
    
    echo "<li>$num3 is divisible by $div: ";
    if($num3 % $div == 0){
        echo 'YES</li>';
    } else {
        echo 'NO</li>';
    }

    echo '</ul>'


?>
