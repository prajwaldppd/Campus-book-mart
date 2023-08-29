

<?php

$dbHost = 'online-shopping-system-db-1';            // This corresponds to MYSQL_HOST
$dbUser = 'php_docker';    // This corresponds to MYSQL_USER
$dbPassword = 'password';  // This corresponds to MYSQL_PASSWORD
$dbName = 'onlineshop';    // This corresponds to MYSQL_DATABASE

// Create connection
$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>  
