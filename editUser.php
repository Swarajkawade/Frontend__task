<?php

include('index.php');
    $conn = new mysqli("localhost", "root", "", "taskDb");

$userId = $_GET["userId"];



if(isset($_POST['update'])){
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE  `users` SET `name`='".$name."' , `email`='".$email."', `username`='".$username."' , `password`='".$password."' WHERE `user_id`='".$userId."' ";        


            if(mysqli_query($conn, $sql)){

            echo "<script type='text/javascript'>
                alert('User details updated Successfully');
                window.location='Dashboard.php';
              </script>";

                        }
                    }  
?>

   <div class="form-body">
<br>
 <form  action="" method="post">
            <h2 style="text-align:center;">Update Details</h2><br>
            <?php 
            $sql = "SELECT * from `users` WHERE `user_id`='".$userId."'";

             $res = mysqli_query($conn, $sql);
            foreach($res as $row){
                    echo '    <label for="username">Name:</label>
    <input type="text" id="username" name="name" required value="'.$row['name'].'">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="'.$row['email'].'">

    <label >UserName:</label>
    <input type="text"  name="username" required value="'.$row['username'].'">

    <label > Password:</label>
    <input type="password"  name="password" required value="'.$row['password'].'">'   ;                          }

            ?><br>

    <button type="submit" name="update">Update</button>
</form>
</div>