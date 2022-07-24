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
    include "signup_successful.php";
}
else
{
    echo "Failed due to some reasons.\nRecheck your inputs and try again!\n";
    echo "<a href='signup.php'>Click here to try again </a>";
}


?>