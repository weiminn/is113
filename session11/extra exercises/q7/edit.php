<?php

require_once 'common.php';

$id = '';
// How do you retrieve 'id' passed to edit.php?
// GET? POST?
$dao = new PostDAO();
$post = null;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $post = $dao->get($_GET['id']);
}
// PostDAO object?

?>
<html>
<body>

    <form action='update.php' method='POST'>
    <?php
        echo "Create Timestamp: {$post->getCreateTimestamp()}<br>";
        echo "Update Timestamp: {$post->getUpdateTimestamp()}<br>";
        echo "Subject: <input type='text' name='subject' value='{$post->getSubject()}'><br>";
        echo "Entry: <br><textarea name='entry'>{$post->getEntry()}</textarea><br>";
        echo "Mood: <select name='mood'>
            <option value='Sad'>Sad<option>
            <option value='Happy'>Happy<option>
            <option value='Angry'>Happy<option>
        </select><br>";
        echo "<input type='text' hidden name='id' value='$id'><br>";
    ?>
    <input type="submit">   

    </form>

    <hr>
    Click <a href='display.php'>here</a> to return to Main Page

</body>
</html>