<?php
    require_once "autoload.php";
    //Add code here
    if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['age'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $person = new Person($name, $gender, $age);
        $dao = new PersonDAO();
        $dao->add($person);       

    }
?>