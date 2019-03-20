<?php

    class PersonDAO{
        public function retrieveAll(){
            //Add code here to return an array of Person objects
            $dsn = "mysql:host=localhost;dbname=week11;port=3306";
            $pdo = new PDO($dsn, "root", ""); 
            $sql = 'select * from person';
                    
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $persons = [];
            while($row = $stmt->fetch()) {
                $persons[] = new Person($row['name'], $row['gender'], $row['age']);
            }

            $stmt = null;
            $pdo = null;

            return $persons;
        }
        public function add($person) {//$person must be an object of class Person
            //Add code here
            $dsn = "mysql:host=localhost;dbname=week11;port=3306";
            $pdo = new PDO($dsn, 'root', '');
            
            $qstr = 'insert into person(name,gender,age) values(:name, :gender, :age);';
            $qstm = $pdo->prepare($qstr);

            $name = $person->getName();
            $gender = $person->getGender();
            $age = $person->getAge();

            $qstm->bindParam(":name", $name, PDO::PARAM_STR);
            $qstm->bindParam(':gender', $gender, PDO::PARAM_STR);
            $qstm->bindParam(':age', $age, PDO::PARAM_INT);
            
            // var_dump($qstm);
            $x = $qstm->execute();

            $stmt = null;
            $pdo = null;
        }
    }
?>