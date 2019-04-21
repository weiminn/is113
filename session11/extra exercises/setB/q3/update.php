<?php

// ARE YOU MISSING SOMETHING HERE?
require_once 'common.php';
// DO YOU REQUIRE ANY EXTERNAL PHP FILES?
// CHECK ERROR MESSAGES IN WEB BROWSER & DEBUG!

$status = false;
if( isset($_POST['id']) && isset($_POST['headline']) ) {

    $dao = new StarDAO();

    // YOUR CODE GOES HERE
    $id = $_POST['id'];
    $head = $_POST['headline'];

    // The below code will break... check in StarDAO.php ...
    // HINT: What does this method updateHeadline() expect as parameters?
    $status = $dao->updateHeadline($id, $head); // Get an Indexed Array of Star objects
}

?>
<html>
<body>
    <?php
        if( $status ) {
            // YOUR CODE GOES HERE
            echo "<h1>Update was  successful!</h1>";
        }
        else {
            echo "<h1>Update was NOT successful!</h1>";
        }
    ?>
</body>
</html>