<?php
    # Start a session
    session_start();
    # Echo name and age information
    echo "Name: ". $_SESSION['name'];
    echo "<br/>";
    echo "Age: " . $_SESSION['age'];
    echo "<br/>";
    
    echo "Hobby: " . $_POST["hobby"];
?>
