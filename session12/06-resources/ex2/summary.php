<?php
    # Echo name and age information

    if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['hobby'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $hobby = $_POST['hobby'];
        # code...
        echo "Name: ". $name;
        echo "<br/>";
        echo "Age: ". $age;
        echo "<br/>";
        
        echo "Hobby: " . $hobby;

    }
    
    
    
?>
