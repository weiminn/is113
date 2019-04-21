<?php
   require_once "autoload.php";

    if(isset($_GET["action"]) && $_GET["action"] == "Add to Cart") {
       addToCart();
    } elseif (isset($_GET["action"]) && $_GET["action"] == "Clear Cart") {
       clearCart();
    } else {
        header("Location: shop.php");
    }

    function addToCart() {
       
        $dao = new ItemDAO();
        $results = $dao->retrieveAll();
        $items = [];
        
        ############## PART B ########################################
         // add code to add new items into current shopping cart in session
       
        $_SESSION["cart"] = $items; 
        
    }

    function clearCart() {
        ############## PART C ########################################
        // add code to clear shopping cart here
     
    }

   
    
   

?>

<html>
    <body>

        <form method="post" action="shop.php">

            <input type="submit" value="Continue Shopping!" />

        </form>

    </body>
</html>

