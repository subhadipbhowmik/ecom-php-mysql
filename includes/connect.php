<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecom';
$port = 3309;

$con = mysqli_connect($host, $user, $password, $database, $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
