<?php
    $prev_balance = $_GET['prev_balance'];
    $paid_amount = $_GET['paid_amount'];
    $day_payment_made = $_GET['day_payment_made'];
    $interest_rate = $_GET['interest_rate'];

    # Write code here
    $total = $prev_balance * 31;
    $paid = $paid_amount * $day_payment_made;
    $sub = $total - $paid;
    $avg = $sub/31;
    $intCharge = $avg * 0.0133;

    echo "Previous balance is $" . $prev_balance . "<br>";
    echo "Payment of {$paid_amount} was made on day {$day_payment_made} of the billing cycle.<br>";
    echo "Interest on outstanding amount is $" . $intCharge;

    # End of code

?>