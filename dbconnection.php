<?php
$user = 'root';
$pass = '';
$db = 'addmission';
$server = 'localhost';

$conn = mysqli_connect($server, $user, $pass, $db);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>