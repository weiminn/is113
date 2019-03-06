<?php
/* 
    Name:  
    Email: 
*/

// $students is an Array of:
//    Associative Arrays, where each Associative Array contains:
//        key (name) => value (string)
//        key (courses) => value (Array of Arrays)
$students = [
    [
        "name"    => 'Jong Un Kim',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['CS102', 'Discrete Mathematics', 'TUE', '0830', 2],
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['LIT380', 'Intro to Korean Literature', 'FRI', '1630', 1]
        ]
    ],
    [
        "name"    => 'Donald Trump',
        "courses" => [
            ['IS112', 'Data Management', 'TUE', '0830', 2],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['IS113', 'Web Application Development', 'THU', '1500', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1000', 1]
        ]
    ],
    [
        "name"    => 'Hugo Chavez',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['IS112', 'Data Management', 'TUE', '0830', 2],            
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
        ]
    ]
];

// INPUT  : $students Array
// OUTPUT : Return an Array of student names (String)
function getStudentNames($students) {
    $arr = [];
    // Part A
    // YOUR CODE GOES HERE
    foreach($students as $student){
        $arr[] = $student['name'];
    }
    return $arr;
}

function getStudentTable($std, $students) {
    foreach($students as $student){
        if ($std == $student['name']){
            return $student;
        }
    }
}

?>
<html>
<head>

<style>
    tr, td, th, table {
        border: 1px solid black;
        text-align: center;
    }
</style>

<head>
<body>
    <form method='POST'>
        Name:
        <select name='student_name'>
            <?php
                // Part A
                // YOUR CODE GOES HERE
                $student_names = getStudentNames($students); // DO NOT MODIFY THIS LINE
                // var_dump($student_names);
                // YOUR CODE CONTINUES HERE
                foreach ($student_names as $name){
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <input type='submit' value='Show Timetable' /><br>

        <?php
            $periods = ['0830', '1000', '1200', '1300', '1500', '1630'];

            function printDay($day, $courses, $periods){
                echo "<tr><td>$day</td>";

                for ($p = 0; $p < sizeof($periods); $p++){
                    $exists = false;
                    foreach ($courses as $course){
                        if($course[2] == $day){
                            if($course[3] == $periods[$p]){
                                echo "<td colspan='$course[4]'>$course[0]<br>$course[1]</td>";
                                $p += $course[4] - 1;
                                $exists = true;
                            }
                        }
                    }
                    if (!$exists){
                        echo '<td></td>';
                    }
                }

                echo '</tr>';
                
            }
            if (isset($_POST['student_name'])){
                // var_dump($_POST['student_name']);
                $student = getStudentTable($_POST['student_name'], $students);
                // var_dump($student);

                echo '<table>';
                echo '<th> <td>08:30am - 10:00am</td> <td>10:00am - 11:30am</td> <td>12:00nn - 1:30pm</td> <td>1:30pm - 3:00pm</td> <td>3:00pm - 4:30pm</td> <td>4:30pm - 6:30pm</td> </th>';
                //['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
                printDay('MON', $student['courses'], $periods);
                printDay('TUE', $student['courses'], $periods);
                printDay('WED', $student['courses'], $periods);
                printDay('THU', $student['courses'], $periods);
                printDay('FRI', $student['courses'], $periods);
                
                echo '</table>';
            }
            
        ?>
    </form>
</body>
</html>