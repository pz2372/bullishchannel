<?php
session_start();
//initialize variables
$errors = array(); // keeps the number of errors in an array
//connect to database
$db = mysqli_connect('localhost', 'root','','Bullish Channel') 
    or die("Could not conect to database");
// escape variables for security
//Escapes special characters in a string for use in an SQL statement
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirm = mysqli_real_escape_string($db, $_POST['confirm']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$age = mysqli_real_escape_string($db, $_POST['age']);
$exper = mysqli_real_escape_string($db, $_POST['exper']);
//form validation // check if input is empty
if(empty($username)) {
    array_push($errors, "Username is required");
}
if(empty($email)) {
    array_push($errors, "Email is required");
}
if(empty($password)) {
    array_push($errors, "Password is required");
}
if($confirm != $password) {
    array_push($errors, "Password does not match");
}
if (empty($gender)) {
    array_push($errors, "Gender is required");
}
if (empty($age)) {
    array_push($errors, "Age is required");
}
if (empty($exper)) {
    array_push($error, "Level of Experience is required.");
}
// check database for existing username or email address. 
$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
//Fetches a result row as an associative array
$user = mysqli_fetch_assoc($results);
// if username and email already exist then push error into array if they do
if($user) {
if($user['username'] === $username){array_push($errors, "Username already exists");}
if($user['email'] === $email){array_push($errors, "This email has already been used to create an account");}
}
//Register the user if there are no error in the form
if(count($errors) == 0) {
    //it uses the md5 hashing algorithm. The password will be hashed 
    $hashpassword = md5($password); //encrypt the passowrd for security using md5 encyption
    $stat = "Online";
    //put the info in query
    $_query = "INSERT INTO users (username, email, pass, gender, age, experience, stat) VALUES ('$username', '$email', '$hashpassword', '$gender', '$age', '$exper', '$stat')";
    
    // run query on database. Die if error occcurs
    if (!mysqli_query($db, $_query)) {
        die ("Account could not be created");
    } 
    $_SESSION['username'] = $username;
    $_SESSION['success'] ="You are now logged in";
    $_SESSION['status'] = "Online";
    // send user to this page
    header('location: index-waccess.php');
}
include('php/errors.php');
//mysqli_close($db);
?>