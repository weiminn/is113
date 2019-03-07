<!--
Name:  
Email: 
-->

<html>
    <head>
        <title>q1_result</title>
    </head>
    <body>
        <h1>Prime numbers</h1>

        <?php
            if(isset($_POST['min']) && isset($_POST['max'])){
                $min = $_POST['min'];
                $max = $_POST['max'];
                $index = 0;

                for($i = $min; $i <= $max; $i++){
                    $index++;
                    $isPrime = TRUE;

                    for($j = 2; $j < $i; $j++){
                        if($i % $j == 0){
                            $isPrime = FALSE;
                        }
                    }

                    if($isPrime){
                        echo "$index. Integer $i is prime.<br>";
                    } else {
                        echo "$index. Integer $i is NOT prime.<br>";       
                    }
                }
            }
        ?>


    </body>
</html>