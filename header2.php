<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) 
?>

<!DOCTYPE html>
<html>
<head>	
	<title>apply for car</title>
	<link rel="icon" type="image/x-icon" href="images\favicon.ico">
	<style type="text/css">

		h2 {background: black}
		h2 {color: white}
		.header {
		  padding: 28px;
		  text-align: center;
		  background: #2a9ec3;
		  color: white;
		  font-size: 40px;
		}
		h1 {font-family: 'Courier New', monospace;}
		a:link {
		  color: yellow;
		  background-color: transparent;
		  text-decoration: none;
		}
		a:hover {
		  color: orange;
		  background-color: transparent;
		  text-decoration: underline;
		}
		a:visited{
			color: yellow;
			background-color: transparent;
		    text-decoration: none;
		}
		a:active{
			color: yellow;
			background-color: transparent;
		    text-decoration: none;
		}
		.centerimage{text-align: center; display: block;}

		
		
	</style>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width,initial scale=1">
<link rel="stylesheet"  href="">
</head>
<body>

	<img src="images/logo.jpg" height="100" width="110" align="left">
	<h1 class="header">WHEELS UP</h1>

	<!-- Navigation -->
	<nav>
<h2>	<a href="index.php" >Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="book.php" >Booknow</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="about.php" >About</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="contact.php" >Contect</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="feedback.php">Feedback</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Hello,&nbsp<?php echo $_SESSION['name']; ?>&nbsp&nbsp&nbsp&nbsp
		<a href="logout.php">Log Out</a>

</h2>
	</nav>

</html>