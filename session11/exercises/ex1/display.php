<?php
    # Add code here
    $dsn = "mysql:host=localhost;dbname=week11;port=3306";
    $pdo = new PDO($dsn, "root", ""); 

    $isbn13 = '1234567890123'; // simulates a user input
    $sql = 'select * from book where isbn13 = :isbn13';
            
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':isbn13', $isbn13, PDO::PARAM_STR);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($row = $stmt->fetch()) {
        echo $row['title'] . '|' . $row['isbn13'] 
            . '|' . $row['price'];
    }

    $stmt = null;
    $pdo = null;



?>