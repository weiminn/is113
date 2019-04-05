<?php

require_once 'common.php';
// What is 'common.php'? Open and see what's inside!
// Reference: https://www.w3resource.com/php/classes-objects/php-object-oriented-programming.php#splautoload



$dao = new StarDAO();
$stars = $dao->getAll(); // Get an Indexed Array of Star objects

?>
<html>
<head>
<style>
table, th, td, tr {
    border: 1px solid black;
}
</style>
</head>
<body>

    <?php
        // YOUR CODE GOES HERE
        echo '<table>';
        echo '<tr><th>Photo</th><th>Name</th><th>Gender</th><th>Headline</th><th>Edit Link</th></tr>';
        foreach($stars as $star){
            echo '<tr>';
        
            // Display star's photo
            $pic = $star->getPhoto();
            echo "<td><img src='images/$pic'></td>";
            
            // Display star's name
            $name = $star->getName();
            echo "<td>$name</td>";
    
            // Display star's gender
            $gender = $star->getGender();
            echo "<td>$gender</td>";
    
            // Display star's headline
            $head = $star->getHeadline();
            echo "<td>$head</td>";
    
            // Display a HyperLink to edit.php
            // You must append a star's id to this URL... so that
            // when the user clicks on this HyperLink, it will make an HTTP GET request to edit.php
            //
            // For example, the link will look like this:
            //      edit.php?id=3
            //    where 3 is the id of a certain star (you can obtain this from each Star object)
            $id = $star->getId();
            echo "<td><a href='edit.php?id=$id'>Edit</a></td>";

            echo '</tr>';
        }
        echo '</table>';
    ?>
    
</body>
</html>