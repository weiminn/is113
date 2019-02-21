<?php

    /*
        arr_2.py contains a form that gets 10 integer inputs from the user. 
        It should then display the minimum, maximum and median of all numbers entered. 
    */
    if(isset($_POST['numbers'])){
        $arr = explode(' ', $_POST['numbers']);
        sort($arr);
        // var_dump($arr);

        echo "Sorted numbers: ";
        foreach ($arr as $num){
            echo "$num ";
        }
        echo "<br>";

        echo "Maximum number: " . $arr[sizeof($arr)-1] . "<br>";
        echo "Minimum number: " . $arr[0] . "<br>";
        echo "Median number: ";

        if (sizeof($arr)%2 == 0){
            echo ($arr[sizeof($arr)/2] + $arr[(sizeof($arr)/2) - 1])/2;
        } else {
            echo $arr[floor(sizeof($arr)/2)];
        }
    }

   // add your code here
?>


    <form method="post">

    Enter 10 integers (separate each integer with a space): 
    <input name="numbers" type="text" placeholder="6 4 1 11 21 34 5 9 81 12">
    <br/>
   
    <input type="submit" value="Compute Stat">

    </form>