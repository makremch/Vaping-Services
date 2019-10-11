
<?php

$databaseHost = 'remotemysql.com:3306';
$databaseName = 'LyxdNUa4xS';
$databaseUsername = 'LyxdNUa4xS';
$databasePassword = '9SlYHcL3Ki';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
 ?>
