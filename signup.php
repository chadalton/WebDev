<html>
	<head>
		<title>caguitarlessons</title>
		<div class="signup">
			<a href="signup.php"> SignUp</a>
			<a href="login.php"> Login</a>
		</div>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link href="index.css" rel="stylesheet" type="text/css">
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

		<div id="sign_up">
		<form id="text_input" method="POST" action="signup_handler.php" border="0">
			<label>First Name:</label> <input name="first_name" type="text">
			<label>Last Name:</label> <input name="last_name" type="text">
			<label>Email Address:</label> <input name="email" type="text">
			<label>Password:</label> <input name ="password" type="password">
	  		<input type="submit" value="Submit">
		</form>
	  	</div>
	  	
	  	<div class="clear"></div>
		<div id="footer">Copyright &copy; 2017 Chad Alton
    	</div>
	</body>
</html>