<html>
    <head>
        <style>
            td, table, th {
                border: 1px solid black;
            }

            .A {
                color: blue;
                font-size: 150%;
            }

            .Am {
                color: green;
                font-size: 120%;
            }

            .l {
                color: red;
                font-size: 100%;
            }
        </style>
    </head>

    <body>
    <?php


    // Given this associative array, complete Parts A, B, C
    $student_grades = [
        'Kee Hock' => ['A+', 'A', 'B+', 'A-'],
        'Debbie' => ['A', 'B+', 'A-', 'A'],
        'Patrick' => ['B', 'C', 'F', 'B-']
    ];


    //========================================
    // Part A
    // Your code goes here
    echo '<table><tr><td>Name</td><td>Grades</td></tr>';

    foreach($student_grades as $student => $grades){
        foreach($grades as $grade){
            echo '<tr><td>' . $student . '</td><td>' . $grade . '</td>';
        }
    }

    echo '</table>';

    echo '<hr>';


    //========================================
    // Part B
    // Your code goes here

    echo '<table><tr><td>Name</td><td>Grades</td></tr>';

    foreach($student_grades as $student => $grades){
        foreach($grades as $grade){
            if($grade == "A+"){
                echo '<tr><td>' . $student . '</td><td><span class="A">' . $grade . '</span></td>';
            } elseif ($grade == "A-"){
                echo '<tr><td>' . $student . '</td><td><span class="Am">' . $grade . '</span></td>';
            } else {
                echo '<tr><td>' . $student . '</td><td><span class="l">' . $grade . '</span></td>';
            }
            
        }
    }

    echo '</table>';

    echo '<hr>';


    //========================================
    // Part C
    // Your code goes here

    echo '<table><tr><td>Name</td><td>Grades</td></tr>';

    foreach($student_grades as $student => $grades){
        $gNo = 1;
        foreach($grades as $grade){
            if($gNo == 1){
                if($grade == "A+"){
                    echo '<tr><td rowspan="'. sizeof($grades) .'">' . $student . '</td><td><span class="A">' . $grade . '</span></td>';
                } elseif ($grade == "A-"){
                    echo '<tr><td rowspan="'. sizeof($grades) .'">' . $student . '</td><td><span class="Am">' . $grade . '</span></td>';
                } else {
                    echo '<tr><td rowspan="'. sizeof($grades) .'">' . $student . '</td><td><span class="l">' . $grade . '</span></td>';
                }                
            }
            else{
                if($grade == "A+"){
                    echo '<tr><td><span class="A">' . $grade . '</span></td>';
                } elseif ($grade == "A-"){
                    echo '<tr><td><span class="Am">' . $grade . '</span></td>';
                } else {
                    echo '<tr><td><span class="l">' . $grade . '</span></td>';
                }
            }   
            $gNo++;        
        }
    }

    echo '</table>';

    echo '<hr>';


    ?>
    </body>
</html>