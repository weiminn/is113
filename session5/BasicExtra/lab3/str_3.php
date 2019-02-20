


<?php

// add your code here
if(isset($_POST['text']) and isset($_POST['start']) and isset($_POST['end'])){
    $text = $_POST['text'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $sPos = strpos($text, $start);
    $ePos = strpos($text, $end);
    
    if( $sPos != false and $ePos != false ){
        if($sPos < $ePos){
            $sub = substr($text, $sPos, $ePos-$sPos+1);
            echo "Subustring [{$sub}] is found";
        } else {
            echo 'No such substring';
        }
    } else {
        echo 'No such substring';
    }
}


?>


<form method='post'>

Enter the string : <input name="text" type="text">
<br/>
Enter the start char : <input name="start" type="text">
<br/>
Enter the end char : <input name="end" type="text">
<br/>

<input type="submit">

</form>