<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=oishidb;host=oishi-database';
$username = "root";
$pass = "root";
try {
$pdo = new PDO($dsn,$username,$pass);
} catch (PDOException $e) {
    //If there is an error wth the connection, stop the script and display the error.
    exit('Failed to connect to database');
}