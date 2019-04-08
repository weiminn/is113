<?php
    # Obtain target location passed from index.html
    if (isset($_POST['target'])) {
        # code...
        $target = $_POST['target'];
        header("location: $target");
        exit;
    }
    
    # Redirect to target location
    
    # Stop further execution
?>