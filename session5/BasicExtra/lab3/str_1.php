<?php

    // add your code here
    if (isset($_POST['name']) && isset($_POST['gender'])){
        $arr = explode(' ', $_POST['name']);
        $lName = "";
        $fName = "";

        if(sizeof($arr) == 3){
            $lName = strtoupper($arr[0]);
            $fName = ucwords(implode(' ', [$arr[1], $arr[2]]));
        } elseif (sizeof($arr) == 1){
            $fName = ucwords($arr[0]);
        }
         else {
            $fName = ucwords($arr[0]);
            $lName = strtoupper($arr[1]);
        }

        $gender = $_POST['gender'];

        if ($gender == 'male'){
            echo "Hello Mr. {$lName} {$fName}";
        } elseif ($gender == 'female'){
            echo "Hello Ms. {$lName} {$fName}";
        }
    }


?>

<p>Please enter your name and gender.</p>

<form action="" method="post">

    Name: <input name="name" type="text"><br/>
    Gender
    <label for="male">Male</label> <input type="radio" name="gender" value="male" id="male">
    <label for="female">Female</label> <input type="radio" name="gender" value="female" id="female">
    <br/>
    <input type="submit">
    
</form>