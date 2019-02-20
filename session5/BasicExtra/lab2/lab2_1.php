<html>
    <body>
    <?php
        if (count($_GET) == 0) {
            echo "  <form>
                        Sales amount:
                        <input type='text' name='sales_amt'/>
                        <input type='submit'/>
                    </form>";
        }
        else{
            $sales_amt = $_GET["sales_amt"];
            # Write code here
            $rate = 0;
            if ($sales_amt >= 18000) {
                $rate = 18;
            } else if ($sales_amt >= 15000) {
                $rate = 15;
            } else if ($sales_amt >= 10000) {
                $rate = 10;
            } else {
                $rate = 05;
            }  

            $total = 2000 + ($sales_amt * ($rate/100));

            echo "Entered monthly sales amount ($): {$sales_amt}<br>";
            echo "Commision rate for the sales amount: {$rate}%<br>";
            echo "Monthly pay for the person is {$total}";
            # End of code
        }
    ?>
    </body>
</html>