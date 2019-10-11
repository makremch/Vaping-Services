
<?php

$databaseHost = '41.226.28.96';
$databaseName = 'admin_vape_store';
$databaseUsername = 'makrem';
$databasePassword = 'makrem';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName",$databaseUsername, $databasePassword);

?>
