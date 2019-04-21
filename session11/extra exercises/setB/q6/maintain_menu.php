<?php
    require_once "common.php";


    // Call DAO to get the data from the database.

    $dao = new FoodDAO();
    $food = $dao->retrieveAll();


    //

    $msg = "";
    $status = false;

    if  ( (isset($_POST["sku"]) ) && 
          ($_POST["sku"] != "")   &&
          (isset($_POST["fooddesc"]) ) &&
          ($_POST["fooddesc"] != "")   &&
          (isset($_POST["category"]) ) &&
          ($_POST["category"] != "")   &&
          (isset($_POST["price"]) ) &&
          (is_numeric($_POST["price"])) )
    {
        $add_sku = $_POST["sku"];
        $add_foodDesc = $_POST["fooddesc"];
        $add_category = $_POST["category"];
        $add_price = $_POST["price"];

        $status = $dao->addFood($add_sku, $add_foodDesc, $add_category, $add_price);

        if ($status == TRUE){
            $msg = "Food item : <strong> $add_foodDesc </strong> inserted into the menu.</h4>";
            $food = $dao->retrieveAll();
        }
        else
            $msg = "<h4>Error in creating food item : $add_foodDesc. Check your data.</h4><br/>";
    }
    
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
    
    <form method="POST" >

        <h2> Food Menu at IS113 Kiosk </h2>

        <?php


        // Display table of the list of food items 
        // SKU, Description, Category, Price
        echo '<table>';
        echo '<tr><th>SKU</th><th>Description</th><th>Category</th><th>Price</th><th></th><th></th>';
        
        foreach($food as $f){
            echo "<tr><td>{$f->getSKU()}</td><td>{$f->getFoodDesc()}</td><td>{$f->getcategory()}</td><td>{$f->getPrice()}</td><td><a href='edit.php?id={$f->getSKU()}'>Edit</a></td><td><a href='delete.php?id={$f->getSKU()}'>Delete</a></td>";
        }
        
        echo '</table>';
        ?>


        <!-- complete the codes to allow user to add in items -->
        <form action="POST" method="POST">
            <h3> Add New Food Item </h3>
            <table>
                <tr>
                    <td> SKU :</td> <td><input name="sku" type="text"></td> 
                </tr>
                <tr>
                    <td> Description : </td> <td><input name="fooddesc" type="text"></td> 
                </tr>
                <tr>
                    <td> Category : </td> <td><input name="category" type="text"></td>
                </tr>    
                <tr>
                    <td> Price : </td> <td><input name="price" type="text"></td>
                </tr>
            </table>
            <input type="submit" value="Add Item"/> </br> </br>
        </form>
    </br>  

    <?= $msg ?>
    </form>
    </body> 
</html>