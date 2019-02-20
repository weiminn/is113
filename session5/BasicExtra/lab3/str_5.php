<?php

// add your code here
    if(isset($_POST['str1']) and isset($_POST['str2'])){
        $have = true;
        $arr = str_split($_POST['str1']);
        foreach ($arr as $ele){
            if(strpos($_POST['str2'], $ele) == FALSE){
                $have = false;
            }
        }

        if($have == false){
            echo 'Nope :(';
        } else {
            echo 'Bingo!';
        }
    }

?>


<form method ='POST'>

Enter characters: <input name="str1" type="text">
<br/>
In string? : <input name="str2" type="text">
<br/>

<input type="submit">

</form>