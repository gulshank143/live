<?php

require_once('connection.php');

if(! $conn)
{
	die('could not connect to database !<br>'.mysqli_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$mob = $_POST['mob'];
$aadhar = $_POST['aadhar'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user(name, age, address, aadhar, email, mob, password) VALUES ('$name',$age,'$address',$aadhar,'$email',$mob,'$password')";

if(mysqli_query($conn,$sql))
{
    echo "<h1>Account Created Successfully:\nGo to login page and login now !";
    echo "<a href='index.php'>Click here to go back </a>";
}
else
{
    echo "Failed due to some reasons.\nRecheck your inputs and try again!\n";
    echo "<a href='signup.php'>Click here to try again </a>";
}


?>