<!DOCTYPE html>
<html>
    <head>
        <title>Compute Bus Fare in Far Far Away Land</title>
    </head>
    <body>
        <?php 
            $fare = 0.0;

            // Please enter code here
            if(isset($_POST['distance']) && isset($_POST['age_group']) && isset($_POST['time'])){

                if($_POST['time'] == 'Peak'){
                    $fare += .15 * $_POST['distance'];
                } elseif ($_POST['time'] == 'Non-Peak'){
                    $fare += .10 * $_POST['distance'];
                }

                if($_POST['age_group'] > 60){
                    $fare = $fare*0.75;
                } elseif ($_POST['age_group'] < 12){
                    $fare = $fare*0.5;
                }

                echo 'Fare is $' . $fare;
            }




            // End of code
        ?>
    </body>
</html>
