<?php
    // In real-life, the following will be retrieved from a database.
    // List of countries.
    $countries = array("Indonesia", "Malaysia", "Philippines", "Singapore", 
                "Thailand", "Brunei", "Cambodia", "Laos"
            );
            
    /*
    INSTRUCTIONS
    ============
    1.  Do NOT change the code above.
    2. 	Add "Myanmar", "Vietnam" to the array $countries.
    */
    $countries[] = "Myanmar";
    $countries[] = "Vietnam";
?>
<html>
<body>
    <form action="ex8_process.php">
        Select:<br/>
        <?php
        /*
        INSTRUCTIONS
        ============
        3.  For each country in array $countries, display a checkbox for the country.
        4.	Display 5 countries / checkboxes per 1 line.
        */
        $count = 0;
        foreach ($countries as $country) {
            echo "<input type=\"checkbox\" name=\"countries[]\" value=\"$country\"/>$country";
            if (++$count % 5 == 0) print "<br/>";
        }

        /*
        // Alternate solution: Using for-loop
        $size = count($countries);
        for ($i = 0; $i < $size; $i++) {
            echo "<input type=\"checkbox\" name=\"countries[]\" value=\"$country\"/>$country";
            if ( $i % 5 == 4) print "<br/>";
        }
        */
        ?>
        
        <br/>
        <input type="submit" /><br/>
    </form>
</body>
</html>