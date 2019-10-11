
<?php

$databaseHost = 'https://remotemysql.com/';
$databaseName = 'LyxdNUa4xS';
$databaseUsername = 'LyxdNUa4xS';
$databasePassword = '9SlYHcL3Ki';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName",$databaseUsername, $databasePassword);

?>
