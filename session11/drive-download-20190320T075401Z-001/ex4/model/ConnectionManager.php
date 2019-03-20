<?php
class ConnectionManager {

  public function getConnection() {
    // store the ini file outside of www folder
    $conf = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "/../private/week11.ini"); 
    $dsn="mysql:host={$conf['host']};dbname={$conf['dbname']}";    
    return new PDO($dsn,$conf['username'],$conf['password']);  
  }
 
}
?>