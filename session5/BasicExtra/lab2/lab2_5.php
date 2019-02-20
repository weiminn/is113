<?php
    $income = $_GET["income"];
    # Write code here
    $tax = 0;

    if($income  <= 20000){
        $tax = 0;
    } elseif ($income > 20000 && $income <= 30000){
        $tax = ($income - 20000) * 0.02;
    } elseif ($income > 30000 && $income <= 40000){
        $tax = ($income - 30000) * 0.035;
        $tax += 200;
    } elseif ($income > 40000 && $income <= 80000){
        $tax = ($income - 40000) * 0.07;
        $tax += 550;
    } elseif ($income > 80000 && $income <= 120000){
        $tax = ($income - 80000) * 0.115;
        $tax += 3350;
    } elseif ($income > 120000 && $income <= 160000){
        $tax = ($income - 120000) * 0.15;
        $tax += 7950;
    } elseif ($income > 160000 && $income <= 200000){
        $tax = ($income - 160000) * 0.18;
        $tax += 13950;
    } else {
        $tax = ($income - 200000) * 0.20;
        $tax += 21150;
    }

    echo "Input personal income: {$income}<br>";
    echo "Tax payable: $" . $tax;

    # End of code
?>