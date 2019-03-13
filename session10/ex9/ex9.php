<?php

    // /*
    // INSTRUCTIONS
    // ============

    // 1.  Add code to autoload classes in sub-folder "model".
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    
    // 2. Create a new RoadUserDAO object 
    $_rd = new RoadUserDAO();
    

    // 3. Get RoadUser objects from the newly created RoadUserDAO object.
    //    Use a suitable method defined in RoadUserDAO.php
    $retrievedRd = $_rd->getRoadUsers();
    // var_dump($retrievedRd);
    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Road Users</title>
    </header>

    <body>

        <h3>Road Users</h3>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Vehicle Type</th>
            </tr>

        <?php

        // 4. Create a table here to show the name of the road user + his/her vehicle type.
        // Use suitable methods defined in RoadUser.php and Vehicle.php

       foreach($retrievedRd as $user){
           $name = $user->getName();
           $vehicle = $user->getVehicle();
           $type = $vehicle->getType();
           echo "<tr><td>$name</td><td>$type</td></tr>";
       }
        ?>

        </table>

    </body>

</html>