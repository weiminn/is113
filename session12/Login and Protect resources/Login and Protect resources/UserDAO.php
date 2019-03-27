<?php

class UserDAO {
       
    function get( $username ) {
        
        // connect to database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        // prepare select
        $sql = "SELECT `username`, `password_hash`, `active`, `usertype` FROM `user` WHERE `username` = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            
        $user = null;
        if ( $stmt->execute() ) {
            
            while ( $result = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $user = new User($result["username"], $result["password_hash"], $result["active"], $result["usertype"]);
            }
            
        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $user;
    }
    
    function create($user) {
        $result = true;

        // connect to database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        // prepare insert
        $sql = "INSERT INTO `user`(`username`, `password_hash`, `active`, `usertype`) VALUES (:username, :passwordHash, :active, :usertype)";
        $stmt = $conn->prepare($sql);
        
        $username = $user->getUsername();
        $passwordHash = $user->getPasswordHash();
        $active = $user->getActive();
        $usertype = $user->getUsertype();

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(":active", $active, PDO::PARAM_STR);
        $stmt->bindParam(":usertype", $usertype, PDO::PARAM_STR);

        $result = $stmt->execute();
        if (! $result ){ // encountered error
            $parameters = [ "user" => $user, ];
            $connMgr->handleError( $stmt, $sql, $parameters );
        }
        
        // close connections
        $stmt = null;
        $conn = null;        
        
        return $result;
    }
}