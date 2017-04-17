<?php
	session_start();
?>
<html>
<head>
	<title>caguitarlessons</title>
	<div class="signup">
		<a href="signup.php"> SignUp</a>
		<a href="login.php"> Login</a>
	</div>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="index.css" >
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>
<body>
	<img id="mainlogo" src="logo.png"/>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="videolessons.php">Video Lessons</a></li>
			<li><a href="lessonmaterials.php">Lesson Materials</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<h1 id="success">
	<?php 
		echo "Success!";
		unset($_SESSION["first_name"]);
		unset($_SESSION["last_name"]);
		unset($_SESSION["email"]);
		unset($_SESSION["password"]);
	?> 
	</h1>
	<a href="login.php"> Click Here To Login</a>
</body>
</html>