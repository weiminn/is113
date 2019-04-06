<?php

require_once 'include/common.php';

//============================================================
//               Test Cases for TaskDAO methods
//============================================================
$task_dao = new TaskDAO();

// Test Case - Retrieve all tasks for account_id = 1
$account_id = 1;
$tasks = $task_dao->retrieveByAccountID($account_id);
echo '<hr>';
var_dump($tasks);


// Test Case - Retrieve all tasks for account_id = 2
$account_id = 2;
$tasks = $task_dao->retrieveByAccountID($account_id);
echo '<hr>';
var_dump($tasks);




//============================================================
//              Test Cases for AccountDAO methods
//============================================================
$dao = new AccountDAO();

// Test Case - Valid Email and Valid Password
$email = 'donald@trump.com';
$pass = 'donald123';
$account = $dao->retrieve($email);
if($account) {
    echo '<hr>';
    var_dump($account);

    $status = password_verify( $pass, $account->getPass() );
    if( $status ) {
        echo "<h3>Email $email and password are authenticated. You can log in now!</h3>";
    }
    else {
        echo "<h3>Email $email and password are NOT authenticated. Password is incorrect.</h3>";
    }
}

// Test Case - Valid Email and Invalid Password
$email = 'donald@trump.com';
$pass = 'hahahahohoho';
$account = $dao->retrieve($email);
if($account) {
    echo '<hr>';
    var_dump($account);

    $status = password_verify( $pass, $account->getPass() );
    if( $status ) {
        echo "<h3>Email $email and password are authenticated. You can log in now!</h3>";
    }
    else {
        echo "<h3>Email $email and password are NOT authenticated. Password is incorrect.</h3>";
    }
}



?>