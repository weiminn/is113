<?php

require_once 'common.php';

$dao = new FoodDAO();
$id = '';
$food_object = null;
if( isset($_GET['id']) ) {
    $sku = $_GET['id'];
    // Complete your codes here
    if(isset($_POST['action'])){
        if ($_POST['action'] === "Update Info"){
            $result = $dao->UpdateFood($_POST['sku'], $_POST['fooddesc'], $_POST['category'], $_POST['price']);
            unset($_POST['action']);
        }
    }
    $food_object = $dao->getFoodbyID($sku);
}


// Complete your codes here


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

    <form method='POST'>

    <?php
        if($food_object) {

            // Complete your codes here

            echo "<h3> Update Food Item </h3>";

            echo "
                <table>
                <tr>
                    <td> SKU : </td> <td><input name='sku' value='$sku'> </td>
                </tr>
                <tr>
                    <td> Description : </td> <td><input name='fooddesc' value='{$food_object->getFoodDesc()}'></td>
                </tr>
                <tr>
                    <td> Category: </td> <td><input name='category' value='{$food_object->getcategory()}'></td>
                </tr>
                <tr>
                    <td> Price : </td> <td><input name='price' value='{$food_object->getPrice()}'></td>
                </tr>
                </table>";


            echo "
                <br>
                <input type='submit' name='action' value='Update Info'>
            ";
        }

      

       echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    ?>

    </form>

</body>
</html>

