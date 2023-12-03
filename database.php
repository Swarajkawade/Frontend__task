<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskDb";

$conn = new mysqli("localhost", "root", "", "taskDb");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>