<?php

require_once 'common.php';

class TaskDAO {

    // EDIT THIS METHOD
    public function retrieveByAccountID($account_id) {

        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();


        // Step 2 - Write & Prepare SQL Query (take care of Param Binding if necessary)
        $sql = "SELECT * FROM task WHERE account_id=:account_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':account_id', $account_id, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        // Step 3 - Execute SQL Query
        $tasks = [];
        
        // Step 4 - Retrieve Query Results (if any)
        while($row = $stmt->fetch()){
            $tasks[] = new Task($row['id'], $row['account_id'], $row['description']);
        }

        // Step 5 - Clear Resources $stmt, $pdo
        $stmt = null;
        $pdo = null;


        // Step 6 - Return (if any)
        return $tasks;
    }


    // DO NOT MODIFY THIS METHOD
    public function retrieveAll() {
        
        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();


        // Step 2 - Write & Prepare SQL Query (take care of Param Binding if necessary)
        $sql = "SELECT * FROM task ";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        

        // Step 3 - Execute SQL Query
        $tasks = [];
        if( $stmt->execute() ) {
            // Step 4 - Retrieve Query Results (if any)
            while($row = $stmt->fetch()) {
                $tasks[] = new Task($row['id'], 
                                $row['account_id'],
                                $row['description']);
            }
        }


        // Step 5 - Clear Resources $stmt, $pdo
        $stmt = null;
        $pdo = null;

        
        // Step 6 - Return (if any)
        return $tasks;
    }

    
    
}


?>