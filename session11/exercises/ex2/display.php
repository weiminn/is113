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
            $dsn = "mysql:host=localhost;dbname=week11;port=3306";
            $pdo = new PDO($dsn, 'root', '');

            $qstr = 'select * from person';
            $qstm = $pdo->prepare($qstr);
            // var_dump($qstm);

            $qstm->execute();
            $qstm->setFetchMode(PDO::FETCH_ASSOC);  

            while($row = $qstm->fetch()){
                echo "<tr><td>" . $row['name'] . "</td><td>". $row['gender'] ."</td><td>". $row['age'] ."</td></tr>";
            }
        ?>
    </table>
    </body> 
</html>