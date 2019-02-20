<?php

    // add your code here
    function factor($n, $f){
        if ($n % $f == 0){
            echo "$f is a factor of $n.";
        } else{
            echo "$f is not a factor of $n.";
        }
    }

    if(isset($_POST['n']) and isset($_POST['f'])){
        factor($_POST['n'], $_POST['f']);
    }   
 
?>


<form method="POST">

Enter an integer n: <input name="n" type="text">
<br/>
Enter another integer f: <input name="f" type="text">
<br/>

<input type="submit">

</form>