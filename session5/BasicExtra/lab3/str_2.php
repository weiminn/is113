<?php

   // add your code here
    if(isset($_POST['input'])){
        $string = $_POST['input'];
        $arr = explode(' ', $string);
        $arr2 = [];
        foreach($arr as $ele){
            if(strpos($ele, '@smu.edu.sg') != FALSE){
                $arr2[] = $ele;
            }
        }

        foreach ($arr2 as $ele){
            echo "{$ele}&nbsp;";
        }
    }
 
?>


<form method='POST'>

    Enter a line of text with email address : <input name="input" type="text" size="100">
    <br/>
   
    <input type="submit">
    
</form>