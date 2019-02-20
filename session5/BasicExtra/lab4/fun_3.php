<?php

    if(isset($_GET["min"]) && isset($_GET["max"])) {

        $min = $_GET["min"];
        $max = $_GET["max"];

        $result = print_squares($min, $max);

    }

    function print_squares ($min, $max) {

       // add your code here
       $rmin = ceil(sqrt($min));
       $rmax = floor(sqrt($max));

       for ($i = $rmin; $i <= $rmax; $i++){
           if(pow($i, 2) != $min and pow($i, 2) != $max){
               echo pow($i, 2) ."&nbsp;";
           }
       }
    }

?>


<form>

Enter an integer min: <input name="min" type="text">
<br/>
Enter another integer max: <input name="max" type="text">
<br/>

<input type="submit">

</form>