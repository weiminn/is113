<?php
    class FoodDAO{

        # Default constructor is created by default if no constructor is specified

        // Retrieve ALL data from the table and sorted by the SKU
        // Return an indexed array of Food objects
        // SQL statement - SELECT * from food ORDER BY sku

        public function retrieveAll(){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
           

            // Add your codes here
            $sql = "SELECT * FROM food";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = [];

            while($row = $stmt->fetch()){
                $result[] = new Food($row['sku'],$row['fooddesc'], $row['category'], $row['price']);
            }

            $stmt = null;
            $conn = null;

            return $result;
        }

        // Retrieve data for a specific sku indicated by the user. 
        // This function can also be used to check if a sku exists.
        // Return a Food object.  If not found, return false.
        // SQL statement - SELECT * from food where sku = <value from user>"
        public function getFoodbyID($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            

            // YOUR CODE GOES HERE
            $sql = "SELECT * FROM food WHERE sku = :sku LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = [];

            if($row = $stmt->fetch()){
                $stmt = null;
                $conn = null;
                return new Food($row['sku'], $row['fooddesc'], $row['category'], $row['price']);
            }

            $stmt = null;
            $conn = null;
            return null;
        }

        // Add a new food item into the database. 
        // Note that the primary key is sku.
        // Return a status
        // SQL statement - INSERT into food (sku, fooddesc, category, price) 
        //                      values (sku, food description,the category, the price)
        public function addFood($sku, $foodDesc, $category, $price) {
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            // YOUR CODE GOES HERE
            $sql = "INSERT INTO food VALUES(:sku, :foodDesc, :category, :price)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
            $stmt->bindParam(":foodDesc", $foodDesc, PDO::PARAM_STR);
            $stmt->bindParam(":category", $category, PDO::PARAM_STR);
            $stmt->bindParam(":price", $price, PDO::PARAM_STR);
            
            $isOk = $stmt->execute();

            $stmt = null;
            $conn = null;

            return $isOk;
        }


        // Updates a record in the database. The statement updates all fields to keep it simple.
        // Return a status
        // SQL statement - UPDATE food SET fooddesc = food description, category = the category, 
        //                 price =  the price WHERE sku = sku;
        public function UpdateFood($sku, $foodDesc, $category, $price){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            
            
            // YOUR CODE GOES HERE
            $sql = "UPDATE food SET fooddesc = :fooddesc, category = :category, price = :price WHERE sku = :sku";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku", $sku, PDO::PARAM_INT);
            $stmt->bindParam(":fooddesc", $foodDesc, PDO::PARAM_STR);
            $stmt->bindParam(":category", $category, PDO::PARAM_STR);
            $stmt->bindParam(":price", $price, PDO::PARAM_STR);
            
            $isOk = $stmt->execute();

            $stmt = null;
            $conn = null;

            return $isOk;
        }

        // Delete a record in the database
        // Return a status
        // SQL statement - DELETE from food WHERE sku = sku

        public function DeleteFood($sku){
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();
            

            // YOUR CODE GOES HERE
            $sql = "DELETE FROM food WHERE sku = :sku";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
            
            $isOk = $stmt->execute();

            $stmt = null;
            $conn = null;

            return $isOk;
        }

    }


?>