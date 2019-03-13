<?php

    // /*
    // INSTRUCTIONS
    // ============

    // Add common code to autoload classes in sub-folder "model" and set local time
    require_once "header.php";

    // 1. Check if origin and destination addresses are entered by user.
    //    If they are not empty strings, proceed to compute travel duration.
    //    Otherwise, show an error message "Either origin, destination or both are unspecified"
    
    if(isset($_GET['name']) && isset($_GET['origin']) && isset($_GET['destination'])){
        // 2. Retrieve name, origin, and destination information sent via HTTP GET
        $name = $_GET['name'];
        $origin = $_GET['origin'];
        $destination = $_GET['destination'];

        // 3. Create a TrafficDuration object 
        $traffic = new TrafficDuration($origin, $destination);
    
        // 4. Get travel duration by calling a suitable method from the object
        $duration = $traffic->getDuration();
        // var_dump($duration);
        // 5. Check if the returned duration is "unknown". 
        //    If it is, display an error message "Invalid inputs".
        if($duration != 'unknown'){
            $date = new DateTime();
            $time = date("H:m:s");
            echo "
            Dear $name<br>
            Travelling time from $origin<br>
            to $destination is $duration at current time ($time)
            ";
        } else {
            echo '<h2>Invalid Inputs</h2>';
        }
    
        // 6. Display the traffic duration information (see screenshot on slides).
        //    Use date built-in function.
    }
        
    
?>