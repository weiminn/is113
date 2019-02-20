<?php
    $count = $_GET["count"];
    $start = $_GET["start"];
    $c = $count;
    # Write code here
    function pAsc($num, $c){
        if ($c == 1){
            return $num .'&nbsp;';
        } else {
            $s = $num;
            for ($i = 1; $i < $c; $i++){
                $s .= $num + $i;
            }
            return pAsc($num, $c - 1) . $s . "&nbsp;";
        }
    }

    echo pAsc($start, $count);
    # End of code
?>
