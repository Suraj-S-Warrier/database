<?php
// Start the session
session_start();
?>
<html>
    <body>
        <?php   
            if(empty($_SESSION))
            {
                exit();
            }
        ?>
        <h2>Welcome <?php echo $_SESSION["fname"] ?>!</h2><br><br><br>
        <a href="profile.php">Profile</a><br>
        <a href="Update_page.php">Update Data</a><br>
        <a href="logout.php">Logout</a><br>
        <a href="Delete_account_confirm.php">Delete account</a><br>
        
        
        
    </body>
</html>