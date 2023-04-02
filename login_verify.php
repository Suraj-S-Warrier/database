<?php
// Start the session
session_start();
?>
<html>
    <body>
        <?php

            $email =  $_POST["email"];
            $pass = $_POST["password"];
            
            $conn = new mysqli("localhost:8080","root","1234","dblab8");
            if($conn->connect_error){
                die("connection failed".$conn->connect_error."\n");
                exit();
            }
            $sql = "Select count(*) from users where email='$email' and password='$pass';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row["count(*)"]==0)
            {
                echo 'Invalid user info. Please try again.';
                exit();
            }
            $sql="select first_name,last_name from users where email='$email' and password='$pass';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION["fname"] =$row["first_name"];
            $_SESSION["lname"] =$row["last_name"];
            $_SESSION["email"] =  $email;
            $_SESSION["pass"]=$pass;
            echo 'Logged in successfully!';



        ?>
        <br><br>
        <a href="welcome_page.php">Home</a>
        
        
        
    </body>
</html>