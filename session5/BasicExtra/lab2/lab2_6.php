<?php
    $amount = $_GET["amount"];
    # Write code here
    $n1d = 0;
    $n50c = 0;
    $n20c = 0;
    $n10c = 0;
    $n5c = 0;

    while ($amount - 1 > 0){
        $n1d++;
        $amount -= 1;
    }

    while ($amount - 0.5 > 0){
        $n50c++;
        $amount -= 0.5;
    }

    while ($amount - 0.2 > 0){
        $n20c++;
        $amount -= 0.2;
    }
    
    while ($amount - 0.1 > 0){
        $n10c++;
        $amount -= .1;
    }
    
    while ($amount - 0.05 > 0){
        $n10c++;
        $amount -= .05;
    }

    if ($n1d > 0){
        echo "Number of 1$: {$n1d}<br>";
    }
    
    if ($n50c > 0){
        echo "Number of 50c: {$n50c}<br>";
    }
    
    if ($n20c > 0){
        echo "Number of 20c: {$n20c}<br>";
    }
    
    if ($n10c > 0){
        echo "Number of 10c: {$n10c}<br>";
    }
    
    if ($n5c > 0){
        echo "Number of 5c: {$n5c}<br>";
    }
    # End of code
    
?>