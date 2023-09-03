

<?php

$dbHost = 'online-shopping-system-db-1';            
$dbUser = 'php_docker';    
$dbPassword = 'password';  
$dbName = 'onlineshop';    

$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);


if (!$con) {
die("Connection Failed: " . mysqli_connect_error());
}

?>  
