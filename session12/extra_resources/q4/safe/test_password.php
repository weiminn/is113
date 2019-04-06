<?php

$password = 'hello123';
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

echo "<h3>You entered password: $password</h3>";
echo "<h3>Hashed password: $passwordHash</h3>";
echo "<h3>This hashed password will be stored in MySQL Database table Account</h3>";

echo "<hr>";
echo "<h3>Next time you log in in HTML form with password: $password (plain text)<h3>";
echo "<h3>PHP can compare this plain text password against Hashed password</h3>";

$status = password_verify( $password, $passwordHash );
if( $status ) {
    echo "You keyed in correct password!";
}
else {
    echo "You keyed in wrong password!";
}
?>