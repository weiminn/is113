<?php
    function print_sign($char, $num){
        for($i = 0; $i < $num; $i++){
            echo "$char";
        }
    }

?>

<html>

    <body>

        <?php 
            
            print_sign('_', 16);
            echo('<br>');
            
            print_sign('_', 16);
            echo('<br>');
            
            print_sign('_', 3);
            print_sign('$', 3);
            print_sign('_', 3);
            print_sign('$', 4);
            print_sign('_', 3);
            echo('<br>');

            print_sign('_', 2);
            print_sign('$', 5);
            print_sign('_', 1);
            print_sign('$', 5);
            print_sign('_', 3);
            echo('<br>');

            print_sign('_', 2);
            print_sign('$', 10);
            print_sign('_', 4);
            echo('<br>');

            print_sign('_', 3);
            print_sign('$', 8);
            print_sign('_', 5);
            echo('<br>');

            print_sign('_', 4);
            print_sign('$', 6);
            print_sign('_', 6);
            echo('<br>');
            
            print_sign('_', 5);
            print_sign('$', 4);
            print_sign('_', 7);
            echo('<br>');
            
            print_sign('_', 6);
            print_sign('$', 2);
            print_sign('_', 8);
            echo('<br>');
            
            print_sign('_', 16);
            echo('<br>');

        ?>

    </body>

</html>