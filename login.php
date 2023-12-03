
    <?php
    
    include('index.php');
    
    $conn = new mysqli("localhost", "root", "", "taskDb");
    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT username, password FROM `users` WHERE username=? AND password=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();
    
        if ($res->num_rows > 0) {
            echo "<script type='text/javascript'>
                    alert('Welcome..!".$username."');
                    window.location='Dashboard.php';
                  </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Invalid Username or Password !!!');
                    window.location='login.php';
                  </script>";
        }
    }
    ?>
    
    
        
        <div class="form-body">
    <br>
     <form action="" method="post">
                <h2 style="text-align:center;">Login Form</h2>
    <br>
    
    
        <label >UserName:</label>
        <input type="text" name="username" required>
    
        <label > Password:</label>
        <input type="password"  name="password" required>
    
    
        <button type="submit" name="login">Login</button>
        <p style="margin-top: 20px; margin-bottom: 0;">
      <a href="Registration.php" target="_blank" style="text-decoration: none; color: #0366d6;">
      Forgot Password
      </a>
    </p>
    </form>
    
    </div>
    
    