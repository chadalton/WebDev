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
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="index.css" rel="stylesheet" type="text/css">
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
	<div id="login">
		<form id="login_form" method="POST" action="login_handler.php" border="0">
			<label>Email Address:</label> <input name="email" type="text"
			value="<?php 
			if(isset($_SESSION["log_email"])){ 
				echo $_SESSION["log_email"];
				unset($_SESSION["log_email"]);
			}
			?>">
			<div id="email_error">
				<p id="email_error_text">
					<?php
					if(isset($_SESSION["emailNotEntered"])){
						echo $_SESSION["emailNotEntered"];
						unset($_SESSION["emailNotEntered"]);
					}
					if(isset($_SESSION["unauth_user"])){
						echo($_SESSION["unauth_user"]);
						unset($_SESSION["unauth_user"]);
					}
					?>
				</p>
			</div>
			<label>Password:</label> <input name="password" type="password"
			value="<?php 
			if(isset($_SESSION["log_password"])){ 
				echo $_SESSION["log_password"];
				unset($_SESSION["log_password"]);
			}
			?>">
			<div id="password_error">
				<p id="password_error_text">
					<?php
					if(isset($_SESSION["passwordNotEntered"])){
						echo $_SESSION["passwordNotEntered"];
						unset($_SESSION["passwordNotEntered"]);
					}
					if(isset($_SESSION["unauth_user"])){
						echo($_SESSION["unauth_user"]);
						unset($_SESSION["unauth_user"]);
					}
					?>
				</p>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
	<div class="clear"></div>
	<div id="footer">Copyright &copy; 2017 Chad Alton
	</div>
</body>
</html>