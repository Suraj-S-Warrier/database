<?php
// Start the session
session_start();
?>
<html>
    <body>
        <h2>USER PROFILE</h2><br><br>
        First Name: <?php echo $_SESSION["fname"]?><br>
        Last Name: <?php echo $_SESSION["lname"]?><br>
        Email: <?php echo $_SESSION["email"]?><br><br>
        <a href="welcome_page.php">Home</a>
        
        
        
    </body>
</html>