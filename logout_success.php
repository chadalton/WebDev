<?php
	session_start();
	require_once "Dao.php";
?>
<html>
<head>
	<title>caguitarlessons</title>
		<div class="signup">
			<a href="signup.php"> SignUp</a>
			<a href="
				<?php
					if(isset($_SESSION["auth_user"])){
						echo "logout.php";
					}
					else{
						echo "login.php";
					}
				?>
				"
			> 
			<?php
				if(isset($_SESSION["auth_user"])){
					echo "Logout";
				}
				else{
					echo "Login";
				}
			?></a>
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

	<h1>You Have Been Logged Out</h1>

</body>
</html>