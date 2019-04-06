<?php
    require_once "autoload.php";

    $dao = new ItemDAO();
    $results = $dao->retrieveAll();
?>
<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <form method="get" action="process_shop.php">
        <table>
            <tr> 
                <th>Name</th> 
                <th>Price (S$)</th> 
                <th>Quantity</th> 
            </tr>
            <?php
            $counter = 1;
            foreach($results as $result){
                echo "<tr>";
                echo "<td>" . $result->getName() . "</td>";
                echo "<td>" . $result->getPrice() . "</td>";
                echo "<td> <input type='number' name='{$result->getName()}'> </td>";
                echo "</tr>";
                $counter++;
            }
            ?>
        </table>

        <br/><input type="submit" name="action" value="Add to Cart" />
        <br/><input type="submit" name="action" value="Clear Cart" />
    </form>
    </body> 
</html>



<?php
    ############## PART A ########################################
    // add code here to retrieve an array of item objects
    // stored in the session and display the results in a table
    
?>
  