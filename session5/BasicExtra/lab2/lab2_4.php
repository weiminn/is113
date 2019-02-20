<?php
    $binary_num = $_GET["binary_num"];
    # Write code here
    echo "Input Binary number: {$binary_num}<br>";
    foreach (str_split($binary_num) as $n){
        if ($n == "1"){
            echo 'True<br>';
        } else if ($n == '0'){
            echo 'False<br>';
        }
    }
    # End of code
?>