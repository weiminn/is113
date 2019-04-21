
<!DOCTYPE html>
<html>

  <head>
        <title>View Employment Info</title>

        <style>
            body {
                background-color: #184a99;
                color: white;
            }

            table,th,td{
                border: 1px solid black;
            }   
        </style>

  </head>

  <body>
      <h1>Graduate Employment Survey Results - NTU, NUS, SIT, SMU & SUTD</h1>

      <form method="POST">
        <h3>Search employment statistics by University</h3>
        
        University: <input type="text" name="university" />
        <br/><br/>
          
        <input type="submit" name="action" value="Filter">
        <input type="submit" name="action" value="Reset">
      </form>

      <br/>

<?php
    /*
    Get the Graduate Employment Survey Results of NTU, NUS, SIT, SMU & SUTD

    More detail:
    https://data.gov.sg/dataset/graduate-employment-survey-ntu-nus-sit-smu-sutd
    
    Data API: 
    https://data.gov.sg/api/action/datastore_search?resource_id=9326ca53-9153-4a9c-b93f-8ae032637b70

    */

    require_once "common.php";

    $dao = new EmploymentStatDAO();
    $employment_stats = [];

    // add code here to compute and display the average salary and employment rate of each university
    // when the page load the first time or when the user clicks Reset button
    if (isset($_POST['action'])){
        if($_POST['action'] == 'Reset'){
            retrieveSummary();
            showAll();
        } else if ($_POST['action'] == 'Filter'){
            // Also add code here to compute and display the average salary of each school
            // of a given university, entered by the user
            if(isset($_POST['university'])){
                if(!empty($_POST['university'])){
                    retriveUni($_POST['university']);
                    showAll();
                }
            }
            
        }   
    }
    else {
        retrieveSummary();
        showAll();
    }
   

     // add helper functions as needed 
    function retrieveSummary(){
        global $employment_stats;
        global $dao;
        $stats1 = $dao->retrieveAll();
        $stats2 = [];
        $empSumm = [];
        $salSumm = [];
        $uniSumm = [];

        foreach($stats1 as $s){
            $stats2[] = array(
                'University' => $s->getUniversity(),
                'Avg Employment Rate of University' => $s->getEmploymentRate(),
                'Avg Salary (S$) of University' => $s->getAvgSalary()
            );
        }

        foreach($stats2 as $s){
            if (array_key_exists($s['University'], $empSumm)){
                $empSumm[$s['University']][] = $s['Avg Employment Rate of University'];
            } else {
                $empSumm[$s['University']] = [];
            }

            if (array_key_exists($s['University'], $salSumm)){
                $salSumm[$s['University']][] = $s['Avg Employment Rate of University'];
            } else {
                $salSumm[$s['University']] = [];
            }
        }

        $uniqueUni = [];
        foreach($stats2 as $s){
            $uniqueUni[] = $s['University'];
        }
        $uniqueUni = array_unique($uniqueUni);

        foreach($uniqueUni as $uni){
            $totalEmp = 0; $sizeEmp = 0; $avgEmp = null;
            $totalSal = 0; $sizeSal = 0; $avgSal = null;

            foreach($salSumm[$uni] as $sal){
                if($sal !== "na"){
                    $totalSal += $sal;
                    $sizeSal++;
                }
            }
            $avgSal = $totalSal/$sizeSal;

            foreach($empSumm[$uni] as $emp){
                if($emp !== "na"){
                    $totalEmp += $emp;
                    $sizeEmp++;
                }
            }
            $avgEmp = $totalEmp/$sizeEmp;

            $employment_stats[] = array(
                'University' => $uni,
                'Avg Employment Rate of University' => $avgEmp,
                'Avg Salary (S$) of University' => $totalSal
            );
        }
    }

    function retriveUni($university){
        global $employment_stats;
        global $dao;
        $stats1 = $dao->searchByUniversity($university);
        $stats2 = [];
        $empSumm = [];
        $salSumm = [];
        $uniSumm = [];

        foreach($stats1 as $s){
            $stats2[] = array(
                'School' => $s->getSchool(),
                'Avg Employment Rate of School' => $s->getEmploymentRate(),
                'Avg Salary (S$) of School' => $s->getAvgSalary()
            );
        }

        foreach($stats2 as $s){
            if (array_key_exists($s['School'], $empSumm)){
                $empSumm[$s['School']][] = $s['Avg Employment Rate of School'];
            } else {
                $empSumm[$s['School']] = [];
            }

            if (array_key_exists($s['School'], $salSumm)){
                $salSumm[$s['School']][] = $s['Avg Employment Rate of School'];
            } else {
                $salSumm[$s['School']] = [];
            }
        }

        $uniqueSchool = [];
        foreach($stats2 as $s){
            $uniqueSchool[] = $s['School'];
        }
        $uniqueSchool = array_unique($uniqueSchool);

        foreach($uniqueSchool as $school){
            $totalEmp = 0; $sizeEmp = 0; $avgEmp = null;
            $totalSal = 0; $sizeSal = 0; $avgSal = null;

            foreach($salSumm[$school] as $sal){
                if($sal !== "na"){
                    $totalSal += $sal;
                    $sizeSal++;
                }
            }
            $avgSal = $totalSal/$sizeSal;

            foreach($empSumm[$school] as $emp){
                if($emp !== "na"){
                    $totalEmp += $emp;
                    $sizeEmp++;
                }
            }
            $avgEmp = $totalEmp/$sizeEmp;

            $employment_stats[] = array(
                'School' => $school,
                'Avg Employment Rate of School' => $avgEmp,
                'Avg Salary (S$) of School' => $totalSal
            );
        }
    }
   

?> 
        <?php 

        function showAll() {
            global $employment_stats;
            echo "<table>";
            echo "<br/>
                <h3>Summary Statistics</h3>
                <table>
                    <tr>";
            foreach($employment_stats[0] as $col => $val){
                echo "<th>$col</th>";
            }
            echo "</tr>";
    
            foreach($employment_stats as $employmentstat) {
                echo "<tr>";
                
                foreach($employmentstat as $col => $val){
                    echo "<td>$val</td>";
                }

                echo "</tr>";
            }
            echo "</table>";
        }
        ?>

  </body>
</html>

