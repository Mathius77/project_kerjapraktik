<?php
/*menentukan nama database host, nama, username, dan password 
yang nantinya data dari database yang telah ditentukan akan diambil datanya.*/
$databaseHost = 'localhost';
$databaseName = 'db_kerjapraktik';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>