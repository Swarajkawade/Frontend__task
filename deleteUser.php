<?php

include('index.php');
    $conn = new mysqli("localhost", "root", "", "taskDb");

$userId = $_GET["userId"];

$sql = "DELETE from users WHERE user_id='".$userId."'";

if(mysqli_query($conn, $sql)){
	echo "<script type='text/javascript'>
                alert('User deleted Successfully');
                window.location='Dashboard.php';
              </script>";

}

?>