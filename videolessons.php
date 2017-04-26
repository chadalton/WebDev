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
	<link rel="icon" href="black_favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="index.css" >
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script> 
</head>
<body>
	<img id="mainlogo" src="caguitarlessons.png"/>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a class ="current"href="videolessons.php">Video Lessons</a></li>
			<li><a href="lessonmaterials.php">Lesson Materials</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<div class="videos">
		<ul>
			<li id="video_desc_1">
				<p>Video 1: Beginner Chords</p>
				<p>This Video will give you a brief introduction into playing chords on the guitar.</p>
			</li>
			<iframe id="video_1" frameborder="none" src="https://www.youtube.com/embed/yh6sPqDEZCY" allowfullscreen></iframe>

			<li id="video_desc_1">
				<p>Video 2: Beginner Strumming</p>
				<p>This video describes strumming patterns for chords played on the guitar.</p>
		</li>
		<iframe id="video_2" frameborder="none" src="https://www.youtube.com/embed/ely9LaJJJr4" allowfullscreen></iframe>

		<li id="video_desc_1">
			<p>Video 3: Beginner Song</p>
			<p>This video shows you how to play "Stay With Me" by Sam Smith on the guitar. This is a great video to practice chords on the guitar.</p>
		</li>
		<iframe id="video_3" frameborder="none" src="https://www.youtube.com/embed/6BloBqbmMTw" allowfullscreen></iframe>
	</ul>
</div>
<div class="clear"></div>

<div id="footer">Copyright &copy; 2017 Chad Alton
</div>

</body>
</html>