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
        foreach($_GET as $phone => $qty){
            if(is_numeric($_GET[$phone])){
                foreach($_SESSION['cart'] as $item){

                    $exists = false;

                    if ($item->getName() === $phone){
                        $item->setQuantity($_GET[$phone] + $item->getQuantity());
                        $exists = true;
                        break;
                    }
                }
                    
                if(!$exists){
                    $item = new Item($phone, $dao->get($phone)->getPrice());
                    $item->setQuantity($_GET[$phone]);
                    $_SESSION["cart"][] = $item;
                }
            }
        }
       
        
    }

    function clearCart() {
        ############## PART C ########################################
        // add code to clear shopping cart here
        $_SESSION["cart"] = [];
     
    }

   
    
   

?>

<html>
    <body>

        <form method="post" action="shop.php">

            <input type="submit" value="Continue Shopping!" />

        </form>

    </body>
</html>

