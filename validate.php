<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM user");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['email'] == $username) &&
			($user['password'] == $password)) {
				session_start();
				$_SESSION['username'] = $user['email'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['id'] = $user['id'];
				header("location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
