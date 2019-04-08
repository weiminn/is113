<?php
    require_once "autoload.php";

    class ItemDAO {

        function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from item";
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = [];
            while($row = $stmt->fetch()){
                $result[] = new Item($row["name"],$row["price"]);
            }
            $stmt->closeCursor();
            $pdo = null;
            return $result;
        }

        function get($name){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            $sql = "Select * from item where name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = null;
            if ($row = $stmt->fetch()){
                $result = new Item($row["name"],$row["price"]);
            }
            $stmt->closeCursor();
            $pdo = null;
            return $result;
        }

    }
?>