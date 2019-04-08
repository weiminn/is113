<?php

require_once 'common.php';

class AccountDAO {

    public function retrieve($email) {
        
        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        
        // Step 2 - Write & Prepare SQL Query (take care of Param Binding if necessary)
        $sql = "SELECT * FROM account WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        // Step 3 - Execute SQL Query
        $ret_account = null;
        
        // Step 4 - Retrieve Query Results (if any)
        if($row = $stmt->fetch()){
            $ret_account = new Account($row['id'], $row['email'], $row['pass']);
        }
                
        // Step 5 - Clear Resources $stmt, $pdo
        $stmt = null;
        $pdo = null;


        // Step 6 - Return (if any)
        return $ret_account;
    }
}

?>