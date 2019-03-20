<?php

class ConnectionManager {
    public function getConnection() {
        $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/../private/database.ini'); 
        $url  = "mysql:host={$config['host']};dbname={$config['dbname']}";
        return new PDO($url, $config['username'], $config['password']);
    }    
}

?>