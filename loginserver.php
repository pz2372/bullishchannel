<?php
session_start();
//initialize variables
$email = "";
$password = "";
$errors = array();
//connect to database
$db = mysqli_connect('localhost', 'root','','Bullish Channel') 
    or die("Could not conect to database");
    
//check for form errors  
if (isset($_POST['login'])) {
//escape variables for security. Prevents code from being written
//Escapes special characters in a string for use in an SQL statement
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    //check for empty fields
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    //if no errors
    if(count($errors) == 0) {
        //hash password to match encrypted password. It is not very secure but will do for now
        $hashpassword = md5($password); 
        // get the info from db
        $query = "SELECT * FROM users WHERE email = '$email' AND pass = '$hashpassword' ";
        $result = mysqli_query($db, $query);
        
        //if email and username matches
        if (mysqli_num_rows($result)) {
            $user = mysqli_fetch_array($result);
            
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Logged in successfully";
            $_SESSION['status'] = "Online";
            $status = "UPDATE users SET stat = 'Online' WHERE email = '$email' ";
            $newresult = mysqli_query($db, $status);
            header('location: index-waccess.php');
        } else {
            array_push($errors, "Wrong email and/or password. Please try again.");
            
            header('location: login.html');
        }
    }
    include('php/errors.php');
} else {
    header('location: login.html');
}
?>