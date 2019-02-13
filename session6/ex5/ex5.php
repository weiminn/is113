<?php
// /*
// INSTRUCTIONS
// ============
// 1.  Add code to autoload Product.php which is in sub-folder "model".
require_once './model/Product.php';

// 2.  Instantiate two Product objects with the following values
//         Pizza   $9.95
//         Burger   $4.95
$p1 = new Product('Pizza', 9.95);
$p2 = new Product('Burger', 4.95);

// 3.  Call the toString() function on both objects to get their String representation.
$p1s = $p1->toString();
$p2s = $p2->toString();


// 4.  Calculate the (1) total price before GST and (2) total price after GST 
$tPrice1 = $p1->getPrice() + $p2->getPrice();
$tPrice2 = $p1->getGSTPrice() + $p2->getGSTPrice();
// ... continue below
// */
?>
<html>
<body>
    <!-- 
    INSTRUCTIONS
    ============
    ... continue from above
    5.  Print both String values and the total price on separate lines in the HTML body below.  The expected output:
        --- expected output: start ---
            Pizza costs $9.95; after GST $10.6465
            Burger costs $4.95; after GST $5.2965
            Total price is $14.9; after GST $15.943
        --- expected output: end ---

    -->

    <?php
        echo $p1s; echo '<br>';
        echo $p2s; echo '<br>';
        echo "Total price is ${tPrice1}; after GST ${tPrice2}."; echo '<br>';
    ?>

</body>
</html>