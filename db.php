<?php
$host = "localhost:3306";
$user = "root"; // default XAMPP MySQL user
$pass = "";     // default is empty
$dbname = "simple_app";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>