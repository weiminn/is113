<?php
    //Add code here

    if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['age'])){
        $dsn = "mysql:host=localhost;dbname=week11;port=3306";
        $pdo = new PDO($dsn, 'root', '');
        
        $qstr = 'insert into person(name,gender,age) values(:name, :gender, :age);';
        $qstm = $pdo->prepare($qstr);

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        $qstm->bindParam(":name", $name, PDO::PARAM_STR);
        $qstm->bindParam(':gender', $gender, PDO::PARAM_STR);
        $qstm->bindParam(':age', $age, PDO::PARAM_STR);
        
        // var_dump($qstm);
        $x = $qstm->execute();

        var_dump($x);

        // $q2 = $pdo->prepare("select * from person");
        // $q2->execute();na
        // $q2->setFetchMode(PDO::FETCH_ASSOC);
        // while($row = $q2->fetch()) {
        //     var_dump($row);
        // }
    }
        
    
?>