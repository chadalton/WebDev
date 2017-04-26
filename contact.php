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
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="index.css" >
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<img id="mainlogo" src="caguitarlessons.png"/>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="videolessons.php">Video Lessons</a></li>
				<li><a href="lessonmaterials.php">Lesson Materials</a></li>
				<li><a class="current" href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="contact">
		<table id="contact_table" border="0">
			<td>Email:</td> <td> <a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1" target="_blank">chadaltonmusic@gmail.com</a></li>
			<tr>
			<td>YouTube:</td> <td> <a href="https://www.youtube.com/channel/UCk5nktRuk91tu-BF1pLmDCQ" target="_blank">youtube.com/chadaltonmusic</a></li>
			<tr>
			<td>Facebook:</td> <td> <a href="https://www.facebook.com/" target="_blank">facebook.com/chadaltonmusic</a></li>
		</table>
		<div class="clear"></div>

		<div id="footer">Copyright &copy; 2017 Chad Alton
    	</div>

	</body>
</html>