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

    if(!empty($_SESSION["cart"])){
        echo "<table>
            <tr> 
                <th>Name</th> 
                <th>Price (S$)</th> 
                <th>Quantity</th> 
            </tr>
            <?php";
        $total = 0;
        foreach($_SESSION['cart'] as $item){
            echo "<tr>";
            echo "<td>" . $item->getName() . "</td>";
            echo "<td>" . $item->getPrice() . "</td>";
            echo "<td>" . $item->getQuantity() . "</td>";
            echo "</tr>";
            $total += $item->getPrice() * $item->getQuantity();
        }
        
        echo "<tr>";
        echo "<td colspan = '2'>Total Price</td>";

        echo "<td>" . $total . "</td>";
        echo "</tr>";

        echo "</table>";
            
    }
?>  