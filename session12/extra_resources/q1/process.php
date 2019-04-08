<?php
    require_once "Person.php";
    session_start();
    if(isset($_POST["next"])){
        if(!empty($_POST['name']) && !empty($_POST['age'])){
            process_one_person($_POST['name'], $_POST['age']);
        }
        header("Location: input.php");
        exit;
    }
    else{
        find_oldest_and_reset();
    }
    
    function process_one_person($name, $age){
    
        # Create a new Person object with "name" and "age" 
        # passed from input.php
        $person = new Person($name, $age);
        
        # If $_SESSION["person_arr"] does not exists, 
        # add the key-value pair "person_arr" => [] to $_SESSION
        if(!isset($_SESSION['person_arr'])){
            $_SESSION['person_arr'] = [];
        }
        
        # Append the new Person object into $_SESSION["person_arr"]
        $_SESSION['person_arr'][] = $person;
    }

    function find_oldest_and_reset(){
        $returnArr = [];
        # If no person entered into $_SESSION["person_arr"],
        # output "No one was input into the system"
        if(!isset($_SESSION['person_arr'])){
            echo 'No one was input into the system';
        } else {
            if(empty($_SESSION['person_arr'])){
                echo 'No one was input into the system';
            } else {
                $arr = $_SESSION['person_arr'];
                for ($i = 1; $i < sizeof($arr); $i++){
                    $j = $i;
                    while ($j > 0){
                        if($arr[$j]->getAge() < $arr[$j-1]->getAge()){
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j-1];
                            $arr[$j-1] = $temp;
                            $j--;
                        } else {
                            break;
                        }
                    }
                }

                
                $i = sizeof($arr);
                $returnArr[] = $arr[$i-1];
                while($i > 0){
                    if ($arr[$i-1]->getAge() === $arr[$i-2]->getAge()) {
                        $returnArr[] = $arr[$i-2];
                        $i--;
                    } else {
                        break;
                    }
                }

                if(!empty($returnArr)){
                    echo "Oldest person(s) entered: <br>";
                    foreach($returnArr as $person) {
                        echo "{$person->getName()} ({$person->getAge()})<br>";
                    }
                }
            }
        }

        echo "<a href='input.php'>Start Again</a>";

        // return $returnArr;
        
        # Otherwise, do the following:
        
            # Retrieve the (indexed) array of Person objects in $_SESSION["person_arr"]
        
            # Find the oldest persons (can be more than 1) in the array
        
            # Display the oldest persons. 
            # Use the toString method of Person. 
            # See question for formatting details.
        
            # Remove "person_arr" from $_SESSION
    }
?>