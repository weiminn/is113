<?php

    /*
    A sandwich typically consists of cheese, meat or/and vegetables placed in between two slices of bread. 
    Consider a string “remember”, the sub-string “memb” is sandwiched between “re” and its mirror “er” on the other side.  In fun_4.php, write a function named get_sandwich that takes in a string and returns the sandwiched string, if any, or None. 

    */

    if(isset($_GET["string"])) {

        $string = $_GET["string"];
        
        echo "Sandwich substring for " . $string . ": " 
                    . get_sandwich($string) . " <br><br>";
    
    }

    function get_sandwich($string) {

        // add your code here
        $i = 0;
        $sub = '';
        while ($i < sizeof(str_split($string))){
            if($string[$i] == $string[strlen($string)-1-$i]){
                $sub .= $string[$i];
                $i += 1;
            } else {
                break;
            }
        }
        var_dump($i);
        var_dump($sub);

        if (strlen($sub) == 0) {
            return "None";
        } else {
            return substr($string, $i, strlen($string)- (2*$i));
        }
       
    }

?>


<form>

Enter a sandwich string: <input name="string" type="text">
<br/>

<input type="submit">

</form>