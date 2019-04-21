<?php

require_once 'common.php';

// YOUR CODE GOES HERE
// PostDAO object?
$dao = new PostDAO();
$posts = $dao->getAll();

?>
<html>
<body>

    <?php

        echo "<h1>My Blog Posts</h1>";

        echo "
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Create Timestamp</th>
                    <th>Last Update Timestamp</th>
                    <th>Subject</th>
                    <th>Edit Link</th>
                    <th>Delete Link</th>
                </tr>
        ";

        foreach($posts as $post){
            echo "
            <tr>
            <td>{$post->getID()}</td>
            <td>{$post->getCreateTimeStamp()}</td>
            <td>{$post->getUpdateTimestamp()}</td>
            <td>{$post->getSubject()}</td>
            <td><a href='edit.php?id={$post->getID()}'>Edit</a></td>
            <td><a href='delete.php?id={$post->getID()}'>Delete</a></td>
            </tr>
        ";

        }

        

        echo "
            </table>
        ";
    ?>

    <a href='add.html'><h3>Add a New Blog Post</h3></a>

</body>
</html>