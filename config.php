
<?php

$databaseHost = 'https://remotemysql.com/';
$databaseName = 'LyxdNUa4xS';
$databaseUsername = 'LyxdNUa4xS';
$databasePassword = '9SlYHcL3Ki';
 

try{
 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName",$databaseUsername, $databasePassword);
 echo "connected"
}
catch(PDOException $ex){
   echo (json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
?>
