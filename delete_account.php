<?php
// Start the session
session_start();
?>
<html>
    <body>
        <?php
            $conn = new mysqli("localhost:8080","root","1234","dblab8");
            if($conn->connect_error){
                die("connection failed".$conn->connect_error."\n");
                exit();
            }
            $email=$_SESSION["email"];
            $sql="delete from users where email='$email';";
            $result = $conn->query($sql);
            if(!$result)
            {
                echo 'Error:Couldnt delete account';
                exit();
            }
            echo 'Account deleted successfully';
            
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
            
        ?>
        <a href="login_page.php">Login</a>
        
        
        
    </body>
</html>