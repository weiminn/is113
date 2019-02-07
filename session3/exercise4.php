<html>

    <body>

        <form action="exercise4.php" method="POST">
            <label for="password">Enter Password: </label>
            <input name="password" type="text">

            <input type="submit" value="submit">
        </form>

        <div>
        <?php

            function containsUpperCase($string){
                $n = preg_match('[A-Z]', $string);
                return $n;
            }

            function check($str){
                $lwrCount = 0; $uprCount = 0; $numCount = 0;
                $arr = str_split($str);

                foreach($arr as $char){
                    if(ctype_upper($char)){
                        $uprCount++;
                    }
                    elseif(ctype_lower($char)){
                        $lwrCount++;
                    }
                    elseif(ctype_digit($char)){
                        $numCount++;
                    }
                }

                if($lwrCount > 0 && $uprCount > 0 && $numCount > 0 && strlen($str) > 6){
                    return "Password legit!";
                } else {
                    return "Cannot!";
                }
            }

            if(isset($_POST['password'])){
                $req = $_POST['password'];
                // $return = check($req)
                echo check($req);

                $_POST = array();
            }
        ?>
        </div>

    </body>

</html>