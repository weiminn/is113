<?php
/* 
    Name:  
    Email: 
*/

function generateRandomSets($quantity) {
    $num_numbers = 3; // generate 3 random integers
    $result = [];
    /*
     $result is an Array of Arrays.
     A sample $result array looks like this
     with parameter $quantity of 3 (user input):

     [
         [1, 5, 3],
         [2, 0, 9],
         [4, 8, 4]
     ]
    */
    
    // Part A
    // YOUR CODE GOES HERE
    for ($i = 0; $i < $quantity; $i++){
        $_arr = [];
        for ($j = 0; $j < $num_numbers; $j++){
            $_arr[] = random_int(0, 9);
        }
        $result[] = $_arr;
    }
    
    return $result;
}

function calculate($random_sets, $lucky_number) {
    $result = [];
    $num_numbers = 3; // each set consists of 3 randomly generated integers

    /*
     $results is an Array.
     A sample $result array looks like this
     (given that $random_sets contain 4 sets of numbers)

     [
         0,
         1,
         0,
         2
     ]

     It means:
        - First number set had zero match.
        - Second number set had ONE match.
        - Third number set had zero match.
        - Fourth number set had TWO matches.

    */

    // Part B
    // YOUR CODE GOES HERE
    foreach($random_sets as $set){
        $matches = 0;
        foreach($set as $num){
            if ($lucky_number == $num){
                $matches += 1;
            }
        }
        $result[] = $matches;
    }
    
    return $result;
}

// Form Processing
// YOUR CODE GOES HERE
$quantity;
$lucky_number;
$bet_amount;

if(isset($_POST['lucky_number']) && isset($_POST['bet_amount'])){
    $lucky_number = $_POST['lucky_number'];
    $bet_amount = $_POST['bet_amount'];
    $quantity = $_POST['quantity'];
}

// Generate # of sets (each set contains 3 numbers)
$random_sets = generateRandomSets($quantity); // DO NOT MODIFY THIS LINE

// Check if lucky number is found
$result = calculate($random_sets, $lucky_number); // DO NOT MODIFY THIS LINE

$winnings = [];
$totalWinning = 0;
foreach($result as $amt){
    $winnings[] = $amt * $bet_amount;
    $totalWinning += $amt * $bet_amount;
}
 

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td, tr {
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <?php
        if(isset($_POST['lucky_number']) && isset($_POST['bet_amount'])){
            echo "<h1>Lucky Number: $lucky_number</h1>";
            echo "<h1>Bet Amount: $bet_amount</h1>";

            echo '<table>';

            echo '<tr><th>Number Set</th><th>Number of Matches</th><th>Winning Amount</th></tr>';

            // var_dump($result);
            for($i = 0; $i < sizeof($result); $i++){
                $setStr = implode(', ', $random_sets[$i]);
                echo "<tr><td>$setStr</td><td>$result[$i]</td><td>$winnings[$i]</td></tr>";
            }
            
            echo "<tr><th colspan='2'>Total Winning Amount</th><th>$totalWinning</th></tr>";

            echo '</table>';
        }
        
    ?>

</body>
</html>
