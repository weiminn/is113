<?php
    $n = $_GET["number"];
      
    # Write code here
    $n2 = 0;
    for ($i = 1; $i < $n; $i++){
        if ($n%$i == 0){
            $n2 += $i;
        }
    }

    if ($n == $n2){
        echo "{$n} is a perfect number";
    } else {
        echo "{$n} is not a perfect number";
    }
    # End of code

?>