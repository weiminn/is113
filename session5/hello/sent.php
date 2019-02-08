<html>
    <head>
        <style>
            td, tr, th, table {
                border: 1px solid black;
            }
        </style>
    </head>

<?php

    $errno = 0;
    $err = False;

    $msg = $_GET['msg'];
    $num = $_GET['num'];

    if($msg == ''){
        echo ($errno+1) . '. Why No Message?<br>';
        $errno++;
        $err = TRUE;
    }
    if ($num == '') {
        echo ($errno+1) . '. Why No Number?<br>';
        $errno++;
        $ERR = TRUE;
    }

    if(!$err){
        $num = (int)$num;
        echo '<table>';
        echo '<tr><th>S/N</th><th>Message</th></tr>';

        for ($i = 0; $i < $num; $i++){
            echo '<tr><td>' .($i+1). '</td><td>'. $msg .'</td></tr>';
        }

        echo '</table>';
    }

?>