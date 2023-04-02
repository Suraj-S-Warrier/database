<?php
// Start the session
session_start();
?>
<html>
    <body>
        <?php
            $fname= $_POST["F_name"];
            $lname= $_POST["L_name"];
            $pass = $_POST["Password"];
            $email =$_SESSION["email"];
            $conn = new mysqli("localhost:8080","root","1234","dblab8");
            if($conn->connect_error){
                die("connection failed".$conn->connect_error."\n");
                exit();
            }
            
            $sql="update users set first_name='$fname' where email='$email';";
            $result = $conn->query($sql);
            if(!$result)
            {
                echo 'Error:first_name';
                exit();
            }
            $sql="update users set last_name='$lname' where email='$email';";
            $result = $conn->query($sql);
            if(!$result)
            {
                echo 'Error:last_name';
                exit();
            }
            $sql="update users set password='$pass' where email='$email';";
            $result = $conn->query($sql);
            if(!$result)
            {
                echo 'Error:password';
                exit();
            }
            $_SESSION["fname"] =$fname;
            $_SESSION["lname"] =$lname;
            $_SESSION["pass"]=$pass;
            echo 'Updated successfully!';




        ?>
        <a href="welcome_page.php">Home</a>
        
        
        
    </body>
</html>