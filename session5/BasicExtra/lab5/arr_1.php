<?php

    /*
   
    1.	Examine arr_1.php given to you. Complete the function get_numbers 
    to return a new array that contains only integers 
    between min and max parameters. Your code should not modify 
    the original array. 

    */

    $numbers = [4,10,12,28,24,18,5,20,15,21,30,22,21,14,17,28,26,24,6,8,15];
    $min = 10;
    $max = 20;
    $arr = [];
    // add your code here
    echo "Original Array: " . print_r($numbers) . "<br>";
    echo "After the function is called: [";
    foreach ($numbers as $num){
        if ($num >= $min && $num <= $max){
            $arr[] = $num; 
            echo "$num ";   
        }
    }
    echo "]";   
    
?>
