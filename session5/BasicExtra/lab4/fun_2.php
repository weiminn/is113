<?php

    // add your code here
    function sPower($n, $p){
        if ($p == 0){
            return 1;
        }else {
            $num = pow($n, $p);
            return $num + sPower($n, $p - 1);
        }
    }

    if (isset($_POST['m']) and isset($_POST['n'])){
        echo sPower($_POST['m'], $_POST['n']);
    }
    
?>


<form method='post'>

Enter an integer m: <input name="m" type="text">
<br/>
Enter another integer n: <input name="n" type="text">
<br/>

<input type="submit">

</form>