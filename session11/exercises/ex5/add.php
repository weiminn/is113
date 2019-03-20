<?php
    require_once "autoload.php";
    //Complete code here
    if(isset($_POST['title']) && isset($_POST['section']) && isset($_POST['instructor'])){
        $title = $_POST['title'];
        $section = $_POST['section'];
        $instructor = $_POST['instructor'];
        $course = new Course($title, $section, $instructor);
        $dao = new CourseDAO();
        $dao->add($course);       

    }
?>