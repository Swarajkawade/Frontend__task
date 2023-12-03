


<?php 
    include('index.php');

?>


    
    <div class="form-body">
<br>
 <form  action="common/insertData.php" method="post">
            <h2 style="text-align:center;">Registration Form</h2>
<br>
    <label for="username">Name:</label>
    <input type="text" id="username" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label >UserName:</label>
    <input type="text"  name="username" required>

    <label > Password:</label>
    <input type="password"  name="password" required>


    <button type="submit" name="submit1">Register</button>
</form>
</div>


