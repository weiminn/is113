<?php

// YOUR CODE GOES HERE
if(!isset($_GET["fruit"])){
    echo 'Must select fruit';
}
elseif(isset($_GET["fruit"]) && isset($_GET["quantity"])){
    $frt = $_GET["fruit"];
    $qty = $_GET["quantity"];
    
    for($i = 0; $i < $qty; $i++){
        echo '<img src="./images/' . $frt . '">';
    }
    
}

?>