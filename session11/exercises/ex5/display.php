<?php
    require_once "autoload.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <table>
        <tr> 
            <th>Title</th> 
            <th>Section</th> 
            <th>Instructor</th> 
        </tr>

        <?php
            //Add code here
            $dao = new CourseDAO();
            $courses = $dao->retrieveAll();

            foreach($courses as $c){
                echo "<tr><td>". $c->getTitle()."</td><td>". $c->getSection() ."</td><td>". $c->getInstructor() ."</td></tr>";
            }
        ?>

    </table>
    </body> 
</html>