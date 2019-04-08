<?php

require_once 'common.php';

$status = False;
$id = '';
// How do you retrieve 'id' passed to edit.php?
// GET? POST?
$dao = new PostDAO();
$post = null;

if (isset($_POST['subject']) && isset($_POST['entry']) && isset($_POST['mood'])) {
    $subject = $_POST['subject'];
    $entry = $_POST['entry'];
    $mood = $_POST['mood'];

    $dao = new PostDAO();
    $status = $dao->add($subject, $entry, $mood);

}

?>
<html>
<body>
    <?php
        if( $status ) {
            echo "<h1>Insertion was successful</h1>";
            echo "Click <a href='display.php'>here</a> to return to Main Page";
        }
        else {
            echo "<h1>Insertion was NOT successful</h1>";
        }
    ?>
</body>
</html>