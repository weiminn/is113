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
            <th>Name</th> 
            <th>Gender</th> 
            <th>Age</th> 
        </tr>
        <?php   
            //Add code here
            $dao = new PersonDAO();
            $persons = $dao->retrieveAll();
            // var_dump($persons);
            foreach($persons as $p){
                echo "<tr><td>". $p->getName()."</td><td>". $p->getGender() ."</td><td>". $p->getAge() ."</td></tr>";
            }

            
        ?>
    </table>
    </body> 
</html>