<?php
$conn = new mysqli("localhost", "root", "", "taskDb");

if(isset($_POST['submit1'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `users`(`name`, `email`, `username`, `password`) 
            VALUES ('$name', '$email', '$username', '$password')";


            if(mysqli_query($conn, $sql)){

            echo "<script type='text/javascript'>
                alert('Registration Added Successfully');
                window.location='../login.php';
              </script>";

                        }
                    }   
   
?>