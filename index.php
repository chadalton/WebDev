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
		<link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
		<link href="slick/slick.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" type="text/css">
	</head>
	<body>
		<img id="mainlogo" src="logo.png"/>
		<nav id="nav">
			<ul>
				<li><a class ="current" href="index.php">Home</a></li>
				<li><a href="videolessons.php">Video Lessons</a></li>
				<li><a href="lessonmaterials.php">Lesson Materials</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="multiple-items">
			<img src="https://i.ytimg.com/vi/ZLHjvAJlC0o/maxresdefault.jpg"/>
			<img src="http://wallpapercave.com/wp/3cDlKE0.jpg"/>
			<img src="http://www.todayifoundout.com/wp-content/uploads/2013/10/electric-guitar.jpg"/>
			<img src="https://images3.alphacoders.com/355/35509.jpg"/>
		</div>
		<div class="intro_content">
			<ul>
					<li id="intro_paragraph">
					<p>Introduction</p>
					<p>My name is Chad Alton and I have 15 years of experience playing the guitar.
					Throughout my career as a guitar player I've gained experience in a variety of styles (blues,jazz,rock,classical, and fingerstyle). 
					I started playing by receiving lessons from a private guitar teacher for 8 years. 
					After this instruction I gained further teaching from my highschool band teachers. 
					I played in my highschool jazz band for 4 years and participated in performances at the Gene Harris and Lionel Hampton jazz festivals. 
					Upon graduating I received the Louis Armstrong award within my jazz band for my guitar playing.</p>
					</li>
					<iframe id="intro_video" frameborder="none" src="https://www.youtube.com/embed/vSakoBvdIvU" allowfullscreen></iframe>
			</ul>
		</div>
		<div class="clear"></div>
		<div id="footer">Copyright &copy; 2017 Chad Alton
    	</div>

    	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="slick/slick.min.js"></script>

    	<script type="text/javascript">
    		$(document).ready(function(){
    			$('.multiple-items').slick({
    				infinite: true,
    				slidesToShow: 3,
    				slidesToScroll: 1,
    				autoplay: true,
    				autoplaySpeed: 2000,
    				arrows: false,
    				dots: true,
    			});
    		});
    	</script>

	</body>
</html>