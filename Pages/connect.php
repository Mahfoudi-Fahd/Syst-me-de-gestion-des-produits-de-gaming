<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'origingamer';


$conn = mysqli_connect($host,$user,$password,$dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>