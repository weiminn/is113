<!DOCTYPE html>
<html>
    <header>
        <title>Traffic Information</title>
    </header>

    <body>

        <?php


            // /*
            // INSTRUCTIONS
            // ============

            // 1. Autoload Traffic.php which is in sub-folder "model".
            spl_autoload_register(
                function($class){
                    require_once "model/Traffic.php";
                }
            );
            
            // 2. Read the location information passed from ex7.html using HTTP GET
            if(isset($_GET['location'])){
                $location = $_GET['location'];

                // 3. Create a new Traffic object

                $traffic = new Traffic();
                
                // 4. Query the traffic status information at the entered location, and
                //    current hour of the day (code to find current hour of the day is provided below)
                //    by using a suitable method from the Traffic object
                date_default_timezone_set('Asia/Singapore');
                $hourOfTheDay = date('H');
                
                $status = $traffic->getTrafficStatus($location, $hourOfTheDay);
                // var_dump($status);
                
                // 5. Display the traffic status information (see slides for an example)
                if($status != "Unknown"){
                    echo "Traffic situation at <strong>$location</strong> is <strong>$status</strong>";
                } else {
                    echo "Unknown";
                }
                
            }
            
            
            
        ?>
        

    </body>

</html>