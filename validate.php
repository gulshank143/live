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
	$sql = "SELECT * FROM user";
	
	$count = 10000;				// number of users. it is used to continue the loop for checking login info !
	
	$retval = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($retval)>0)
	{	
			while ($user = mysqli_fetch_assoc($retval)) {

				if(($user['email'] == $username) &&
					($user['password'] == $password)) {
						session_start();
						$_SESSION['username'] = $user['email'];
						$_SESSION['name'] = $user['name'];
						$_SESSION['id'] = $user['id'];
						header("location: adminpage.php");
				}
				else
				if($count!=0)
				{
					continue;
					$count--;
				}
				else {
					echo "<script language='javascript'>";
					echo "alert('WRONG INFORMATION')";
					echo "</script>";
					die();
				}
			}
	}
		
}

?>
