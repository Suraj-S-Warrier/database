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

        <a href="delete_account.php">Confirm</a><br>
        <a href="welcome_page.php">Cancel</a>
        
        
        
    </body>
</html>