<!--
Name:  
Email: 
-->

<html>
    <head>
        <title>q2_result</title>
    </head>

    <style>
        table, th, tr, td {
            border: 1px solid black;
        }
    </style>
    <body>
        <h1>Compute Bus Fare</h1>
        
        <?php

            if(isset($_POST['distance']) && isset($_POST['time'])){
                
                $age = $_POST['age_group'];
                $distance = $_POST['distance'];

                $ntuc = 'No';
                if(array_key_exists('ntuc', $_POST)){
                    $ntuc = 'Yes';
                }

                $time;
                if(array_key_exists('time', $_POST)){
                    $time = $_POST['time'];
                }

                $cost;
                if($age == 'Adult') {
                    $cost = 0.15;
                } elseif($age == 'Children'){
                    $cost = 0.05;
                } else {
                    $cost = 0.1;
                }

                $discount = 0;
                if($ntuc == 'Yes'){
                    $discount += 5;
                }

                if($time == 'Non-Peak'){
                    $discount += 25;
                }

                $fare = $distance * ($cost * ((100-$discount)/100));

                if(!is_numeric($distance)){
                    echo '<h2>Distance is not numeric!</h2>';
                }
                else {
                    if($distance <= 0){
                        echo '<h2>Distance is not numeric!</h2>';
                    } else {
                        echo "
                        <table>
                            <tr>
                            <th>Age group</th>
                            <td>$age</td>
                            </tr>
                            
                            <tr>
                            <th>Time</th>
                            <td>$time</td>
                            </tr>
                            
                            <tr>
                            <th>NTUC Card?</th>
                            <td>$ntuc</td>
                            </tr>
                            
                            <tr>
                            <th>Cost per km</th>
                            <td>$cost</td>
                            </tr>
                            
                            <tr>
                            <th>Discount</th>
                            <td>$discount%</td>
                            </tr>
                            
                            <tr>
                            <th>Bus Fare</th>
                            <td>$$fare</td>
                            </tr>
                        </table>
                        ";
                    }
                }
            }

        ?>


    </body>
</html>