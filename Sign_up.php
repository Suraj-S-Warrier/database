
<html>
<body>
<?php
$fname = $_POST['F_name'];
$lname = $_POST['L_name'];
$email = $_POST['email'];
$pass = $_POST['Password'];
$conpass = $_POST['Confirm_Password'];

if($pass!=$conpass){
    echo "Passwords not matching";
    exit();
}
else{
    $conn = new mysqli("localhost:8080","root","1234","dblab8");
    if($conn->connect_error){
    	die("connection failed".$conn->connect_error."\n");
        exit();

    }
    else
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            exit();
        }
        $email_array = explode("@",$email);
        if($email_array[1]!="iitp.ac.in")
        {
            echo "Enter a valid iitp email id";
            exit();
        }
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
        $specialChars = preg_match('@[^\w]@', $pass);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
            echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            exit();
        }
        $uid = uniqid();
        $sql  = "Insert into users values('$uid','$fname','$lname','$email','$pass');";
        $result = $conn->query($sql);
        if($result)
        {
            echo 'Signed in successfully!';
        }
        

    
    }
	
}
?>
<br>
<a href="login_page.php">Login</a>


</body>
</html>
