<html>
    <head>
        <title>Equation</title>
    </head>
    <body>
        <?php 
            // Please enter code here
            if(isset($_POST["x"]) && isset($_POST["y"])){
                echo 'The answer is ' . (($_POST["x"]**2)+$_POST["y"]);
            }

            // End of code
        ?>
    </body>
</html>
