<?php

require_once 'common.php';

$success = false;
$id = null;
$post = null;
$dao = new PostDAO();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    # code...
    $post=$dao->get($id);
} else {
    if (isset($_POST['action'])){
        if ($_POST['action'] === 'Delete'){
            $success = $dao->delete($id);
        }
    }
}

?>
<html>
<body>

    <form action='delete.php' method='POST'>

        <?php
            if($success){
                echo '<h3> Delete was successful</h3';
            } else {
                
                echo '<table>';
                
                echo "<tr><td>Subject</td><td>{$post->getSubject()}</td></tr>";
                echo "<tr><td>Entry</td><td>{$post->getEntry()}</td></tr>";
                echo "<tr><td>Mood</td><td>{$post->getMood()}</td></tr>";
                echo "<tr><td>Create Timestamp</td><td>{$post->getCreateTimestamp()}</td></tr>";
                echo "<tr><td>Update Timestamp</td><td>{$post->getUpdateTimestamp()}</td></tr>";

                echo '</table>';
                
                echo "<input type='hidden' name='id' value='$id'>";
            }
        ?>
    

        <input type="submit" name='action' value="Delete">
    </form>

    <hr>
    Click <a href='display.php'>here</a> to return to Main Page

</body>
</html>