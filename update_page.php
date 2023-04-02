<?php
// Start the session
session_start();
?>
<html>
    <body>
    <form action="update_verify.php" method="post">
        First Name: <input type="text" name="F_name" value=<?php echo $_SESSION["fname"]?> ><br>
        Last Name: <input type="text" name="L_name" value=<?php echo $_SESSION["lname"]?>><br>
        Password: <input type="password" name="Password" value=<?php echo $_SESSION["pass"]?>><br>
        <input type="submit", value="Update">
    </form>
        
        
    </body>
</html>