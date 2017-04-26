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
		<link rel="stylesheet" type="text/css" href="index.css">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<img id="mainlogo" src="caguitarlessons.png"/>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="videolessons.php">Video Lessons</a></li>
				<li><a class ="current" href="lessonmaterials.php">Lesson Materials</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="helpful_links">
			<ul>
				<li><a href="https://www.8notes.com/guitar/" target="_blank">Sheet Music</a></li>
				<li><a href="https://www.ultimate-guitar.com/" target="_blank">Guitar Tabs</a></li>
				<li><a href="http://www.guitar-chords.org.uk/" target="_blank">Guitar Chord Diagrams</a></li>
			</ul>
		</div>
		<div class="videos">
			<ul>
					<li id="helpful_desc_1">
					<p>How to Read Sheet Music</p>
					<p>This video explains how to read sheet music</p>
					</li>
					<iframe id="helpful_video_1" frameborder="none" src="https://www.youtube.com/embed/vZ7TJKtUYb0" allowfullscreen></iframe>

					<li id="helpful_desc_1">
					<p>How to Read Guitar Tablature</p>
					<p>This video explains how to read guitar tablature</p>
					</li>
					<iframe id="helpful_video_2" frameborder="none" src="https://www.youtube.com/embed/NzYaeC1ZyIA" allowfullscreen></iframe>

					<li id="helpful_desc_1">
					<p>How to Read Chord Diagrams</p>
					<p>This video explains how to read a chord diagram when playing the guitar</p>
					</li>
					<iframe id="helpful_video_3" frameborder="none" src="https://www.youtube.com/embed/5xwpT83-t5Q" allowfullscreen></iframe>
			</ul>
		</div>
		<div class="clear"></div>

		<div id="footer">Copyright &copy; 2017 Chad Alton
    	</div>

	</body>
</html>