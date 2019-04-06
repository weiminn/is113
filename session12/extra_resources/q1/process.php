<?php
    require_once "Person.php";
    session_start();
    if(isset($_POST["next"])){
        process_one_person();
        header("Location: input.php");
        exit;
    }
    else{
        find_oldest_and_reset();
    }
    
    function process_one_person(){
    
        # Create a new Person object with "name" and "age" 
        # passed from input.php
        
        # If $_SESSION["person_arr"] does not exists, 
        # add the key-value pair "person_arr" => [] to $_SESSION
        
        # Append the new Person object into $_SESSION["person_arr"]
        
    }

    function find_oldest_and_reset(){
        
        # If no person entered into $_SESSION["person_arr"],
        # output "No one was input into the system"
        
        # Otherwise, do the following:
        
            # Retrieve the (indexed) array of Person objects in $_SESSION["person_arr"]
        
            # Find the oldest persons (can be more than 1) in the array
        
            # Display the oldest persons. 
            # Use the toString method of Person. 
            # See question for formatting details.
        
            # Remove "person_arr" from $_SESSION

        echo "<a href='input.php'>Start Again</a>";
    }
?>