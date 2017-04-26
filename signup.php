<?php
session_start();
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
		<a href="admin_login.php"> Admin Login</a>
	</div>
	<link rel="shortcut icon" href="black_favicon.ico" type="image/x-icon">
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
</head>

<body>
	<img id="mainlogo" src="caguitarlessons.png"/>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="videolessons.php">Video Lessons</a></li>
			<li><a href="lessonmaterials.php">Lesson Materials</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>

	<div id="sign_up">
		<div id="form">
			<form id="text_input" method="POST" action="signup_handler.php" border="0">
				<label for="first_name">First Name:</label> <input name="first_name" type="text" 
				value="<?php 
				if(isset($_SESSION["first_name"])){ 
					echo $_SESSION["first_name"];
					unset($_SESSION["first_name"]);
				}
				?>">
				<div id="first_name_error">
					<p id="first_name_error_text">
						<?php
						if(isset($_SESSION["errorFirstName"])){
							echo $_SESSION["errorFirstName"];
							unset($_SESSION["errorFirstName"]);
						}
						?>
					</p>
				</div>
				<label for="last_name">Last Name:</label> <input name="last_name" type="text" 
				value="<?php 
				if(isset($_SESSION["last_name"])){ 
					echo $_SESSION["last_name"];
					unset($_SESSION["last_name"]);
				}
				?>">
				<div id="last_name_error">
					<p id="last_name_error_text">
						<?php
						if(isset($_SESSION["errorLastName"])){
							echo $_SESSION["errorLastName"];
							unset($_SESSION["errorLastName"]);
						}
						?>
					</p>
				</div>
				<label for="email">Email Address:</label> <input name="email" type="text"
				value="<?php 
				if(isset($_SESSION["email"])){ 
					echo $_SESSION["email"];
					unset($_SESSION["email"]);
				}
				?>">
				<div id="email_error">
					<p id="email_error_text">
						<?php
						if(isset($_SESSION["errorEmail"])){
							echo $_SESSION["errorEmail"];
							unset($_SESSION["errorEmail"]);
						}
						?>
					</p>
				</div>
				<label for="password">Password:</label> <input name="password" type="password"
				value="<?php 
				if(isset($_SESSION["password"])){ 
					unset($_SESSION["password"]);
				}
				?>">
				<div id="pwd_error">
					<p id="password_error_text">
						<?php
						if(isset($_SESSION["errorPassword"])){
							echo $_SESSION["errorPassword"];
							unset($_SESSION["errorPassword"]);
						}
						if(isset($_SESSION["errorPasswordNumber"])){
							echo $_SESSION["errorPasswordNumber"];
							unset($_SESSION["errorPasswordNumber"]);
						}
						?>
					</p>
				</div>
				<label for="in_person">Sign Up for In-person Lessons</label> 
				<input type="radio" name="in_person" value="1"> Yes<br>
				<input type="radio" name="in_person" value="0"> No<br>
				<div id="in_person_error">
					<p id="in_person_text">
						<?php
						if(isset($_SESSION["errorInPerson"])){
							echo $_SESSION["errorInPerson"];
							unset($_SESSION["errorInPerson"]);
						}
						?>
					</p>
				</div>
				<input id="submit" name="submit" type="submit" value="Submit">
			</form>
		</div>
	</div>

	<div class="clear"></div>
	<div id="footer">Copyright &copy; 2017 Chad Alton
	</div>
</body>
</html>