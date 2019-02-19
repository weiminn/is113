<?php
    $tempInF = $_GET["tempInF"];
    $tempInC = 0;

    # Write code here
    $tempInC = ($tempInF - 32) * (5/9);
    # End of code
    
    echo "$tempInF F = $tempInC C";
?>