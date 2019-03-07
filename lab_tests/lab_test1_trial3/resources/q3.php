<!--
Name:  
Email: 
-->

<?php
    require_once "ClubReport.php";
    
    // Add your code in the following
?>

<html>
<body>
    <form action="q3.php" method="post">
        <!-- Insert your codes in the following -->
        <?php
            echo "<select name='club'>";

            $clubs = getClubNames();
            foreach($clubs as $club){
                echo "<option value='$club'>$club<option>";
            }

            echo "</select>
            <input type='submit' value='Submit'/>";
            
        ?>
        
        
    </form>

    <table border="1">
        
        <tr>
            <th>School</th>
            <th>Cohort</th>
            <th>Ethnicity</th>
        </tr>

        <?php

            if(isset($_POST['club'])){

                $chosen = getMembersBreakdown($_POST['club']);

                foreach($chosen as $faculty => $cohorts){

                    $facultySize = 0;
                    $f1 = 0;
                    foreach($cohorts as $year => $compositions){    
                        foreach($compositions as $race => $number){
                            $facultySize++;
                        }
                    }

                    foreach($cohorts as $year => $compositions){

                        $cohortSize = 0;
                        $c1 = 0;
                        foreach($compositions as $race => $number){
                            $cohortSize++;
                        }
                        
                        foreach($compositions as $race => $number){

                            if($f1 != 0){
                                if($c1 != 0){

                                    echo "
                                    <tr>
                                    <td>$race ($number)</td>     
                                    ";
                                } else {
                                    echo "
                                    <tr>
                                    <td rowspan='$cohortSize'>$year</td>
                                    <td>$race ($number)</td>                         
                                    ";
                                    $c1++;
                                }                            
                            } else {
                                echo "
                                <tr>
                                <td rowspan='$facultySize'>$faculty</td>
                                <td rowspan='$cohortSize'>$year</td>
                                <td>$race ($number)</td>          
                                ";
                                $f1++;
                                $c1++;
                            }
                            
                        }
                    }
                }

                
            }
        ?>
        
    </table>
</body>
</html>