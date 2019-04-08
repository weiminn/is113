<?php

require_once 'common.php';

$success = false;

if (isset($_POST['subject']) && isset($_POST['entry']) && isset($_POST['mood']) && isset($_POST['id'])) {
    $subject = $_POST['subject'];
    $entry = $_POST['entry'];
    $mood = $_POST['mood'];
    $id = $_POST['id'];
    # code...

    $dao = new PostDAO();
    $success = $dao->update($id, $subject, $entry, $mood);

}

?>
<html>
<body>

<?php

    if($success) {
        echo '<h2>Update was successful!</h2>';
    } else {
        echo '<h2>Update NOT successful!</h2>';
    }

    echo "Click <a href='display.php'>here</a> to return to Main Page";

?>

</body>
</html>