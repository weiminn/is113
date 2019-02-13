<?php
// include class Module and Student PHP files 
require_once "Module.php";
require_once "Student.php";

// create an array of Module objects
$modules = array( 
        new Module("IS123", 3, "A+"),
        new Module("IS124", 3, "B-"),
        new Module("IS125", 2, "A"),
    );

// create a Student object named David and has the array of Modules.
$student = new Student("David", $modules);

// display his GPA
?>

<html>
<body>
    <?php echo $student->getName() . "'s GPA is " . $student->gpa(); ?><br/>
</body>
</html>
