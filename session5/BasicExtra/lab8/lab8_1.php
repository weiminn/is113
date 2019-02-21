<?php
$price_info = [
    'pencil'=> 0.80, 
    'pen' => 1.20, 
    'eraser' => 0.50 
];
 
#Complete this function
function compute_bill($cart, $pricing){
    # Write code here
    $total = 0;
    foreach($cart as $item => $qty){
        $total += $pricing[$item] * $qty;
    }

    return $total;
    # End of code
}
 
$jane_items = ['pen'=>10, 'eraser'=>2];
$eric_items = ['pencil'=>12, 'eraser'=>5,  'pen'=>2];
 
echo "Jane's bill amount $"  . compute_bill($jane_items, $price_info) . "<br/>";
echo "Eric's bill amount $"  . compute_bill($eric_items, $price_info);
?>
