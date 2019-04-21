<?php

require_once 'common.php';

$dao = new FoodDAO();
$sku = '';
$food_object = null;
$success = false;
if( isset($_GET['id']) ) {
    $sku = $_GET['id'];
    // Complete your codes here
    $food_object = $dao->getFoodbyID($sku);
    if(isset($_POST['action'])){
        if ($_POST['action'] === "Confirm"){
            $success = $dao->DeleteFood($_GET['id']);
            unset($_POST['action']);
            if($success){
                success();
            }
        }
    }
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

    <form method='POST'>

    <?php

           // Complete your codes here

            echo "<h3> Delete Item </h3>";

            echo "
                <table>
                <tr>
                    <td> SKU : </td> <td>$sku</td>
                </tr>
                <tr>
                    <td> Description : </td> <td>{$food_object->getFoodDesc()}</td>
                </tr>
                <tr>
                    <td> Category: </td> <td>{$food_object->getcategory()}</td>
                </tr>
                <tr>
                    <td> Price : </td> <td>{$food_object->getPrice()}</td>
                </tr>
                </table>";
                
            echo "<input type='submit' name='action' value='Confirm'> ";
        
    
        // Add your codes here
        function success(){
            echo '<h3>Delete was successfull!</h3>';
        }
    
    echo "</br></br> Click <a href='maintain_menu.php'>here</a> to return to Main Page";
    
    ?>

    </form>

   
</body>
</html>

