
<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");


$databaseHost = 'remotemysql.com:3306';
$databaseName = 'LyxdNUa4xS';
$databaseUsername = 'LyxdNUa4xS';
$databasePassword = '9SlYHcL3Ki';

 $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName",$databaseUsername, $databasePassword);
?>
