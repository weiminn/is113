<?php

// YOUR CODE GOES HERE
if(isset($_POST["stars"])){
    $arr = $_POST['stars'];
    
    for($i = 0; $i < sizeof($arr); $i++){
        echo '<img src="./images/' . $arr[$i] . '">&nbsp;';
    }
}
?>