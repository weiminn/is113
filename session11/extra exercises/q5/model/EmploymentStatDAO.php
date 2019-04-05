<?php
    require_once 'common.php';

    class EmploymentStatDAO{

        // Get all records
        public function retrieveAll(){
           // add code here
           $conn = new ConnectionManager();
           $pdo = $conn->getConnection();

           $sql = "SELECT * FROM employmentstat";
           $stmt = $pdo->prepare($sql);
           $stmt->execute();
           $stmt->setFetchMode(PDO::FETCH_ASSOC);

           $result = [];

           while($row = $stmt->fetch()){
               $result[] = new EmploymentStat(
                    $row['id'], 
                    $row['year'], 
                    $row['university'], 
                    $row['school'],
                    $row['degree'], 
                    $row['employment_rate'],
                    $row['salary']);
           }
        
           $stmt = null;
           $conn = null;

           return $result;

        }

        public function searchByUniversity($university){
            // Add code to search records of a given university
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "SELECT * FROM employmentstat WHERE university = :uni";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":uni", $university, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = [];

           while($row = $stmt->fetch()){
               $result[] = new EmploymentStat(
                    $row['id'], 
                    $row['year'], 
                    $row['university'], 
                    $row['school'],
                    $row['degree'], 
                    $row['employment_rate'],
                    $row['salary']);
           }
        
           $stmt = null;
           $conn = null;

           return $result;
        }

        
        public function add($employmentstat) {
            // Add code to insert a new employmentstat into employmentstat table in database 
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "INSERT INTO employmentstat (year, university, school, degree, employment_rate, salary) 
                    VALUES (:year, :university, :school, :degree, :employment_rate, :salary)";

            $stmt = $pdo->prepare($sql);

            $year = $employmentstat->getYear();
            $university = $employmentstat->getUniversity();
            $school = $employmentstat->getSchool();
            $degree = $employmentstat->getDegree();
            $employment_rate = $employmentstat->getEmploymentRate();
            $salary = $employmentstat->getAvgSalary();

            $stmt->bindParam(":year", $year);
            $stmt->bindParam(":university", $university);
            $stmt->bindParam(":school", $school);
            $stmt->bindParam(":degree", $degree);
            $stmt->bindParam(":employment_rate", $employment_rate);
            $stmt->bindParam(":salary", $salary);

            $result = $stmt->execute();
            
            if($result){
                return true;
            }
            return false;

        }

       
        public function update($id, $rate, $salary) {
           // Add code to update employment rate and salary of a record 
           // in employmentstat table in database, given the id of an existing record
           $conn = new ConnectionManager();
           $pdo = $conn->getConnection();

           $sql = "UPDATE employmentstat SET employment_rate = :rate, salary = :salary WHERE id = :id";
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           $stmt->bindParam(":rate", $rate, PDO::PARAM_STR);
           $stmt->bindParam(":salary", $salary, PDO::PARAM_STR);

           $result = $stmt->execute();
            
            if($result){
                return true;
            }
            return false;
           
        }

       
        public function delete($id) {
            // Add code to delete a record from employmentstat table in database, 
            // given the id of an existing record
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            $sql = "DELETE FROM employmentstat WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            
            $result = $stmt->execute();
            
            if($result){
                return true;
            }
            return false;
        }
    }
?>