<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

// an array of error messages (if any)
$errors = [];
$_SESSION['errors'] = [];

// Get username and password from FORM submission
if(!isset($_POST['username']) || empty($_POST['username'])){
  $_SESSION['errors'][] = 'Username field is empty';
}
if(!isset($_POST['current_password']) || empty($_POST['current_password'])){
  $_SESSION['errors'][] = 'Current password  field is empty';
}
if(!isset($_POST['new_password'][0]) || empty($_POST['new_password'][0])){
  $_SESSION['errors'][] = 'New password field is empty';
}
if(!isset($_POST['new_password'][1]) || empty($_POST['new_password'][1])){
  $_SESSION['errors'][] = 'Verify new password field is empty';
}

if($_POST['new_password'][0] !== $_POST['new_password'][1]){
  $_SESSION['errors'][] = 'Your new passwords do not match';
}

if(!empty($_SESSION['errors'])){
  header("Location: reset-view.php");
  exit;
}

$username = $_POST['username'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

// Code here
$aDAO = new AccountDAO();
$auth = $aDAO->authenticate($username, $current_password);
if(!$auth){
  $_SESSION['errors'][] = 'wrong username/password';
  header("Location: reset-view.php");
  exit;
}
else {
  $account = $aDAO->retrieve($username);
  $aDAO->reset_password($account->getId(), $new_password[0]);
}

?>
<html>
<head>
  <title>Reset</title>
</head>
<body>
Success!
</body>
</html>
