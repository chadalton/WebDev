<?php
	session_start();
	require_once "Dao.php";
	$dao = new Dao();

// this page requires a user with the MEMBER permission to view
/*try {
  // get the user object from the data store
  $user = $dao->getUser("chadaltonmusic@gmail.com");
  if ($user->hasPermission(User::MEMBER)) {
    echo "User has the permission";
  } else {
    echo "User does NOT have the permission";
  }

} catch (Exception $e) {
  echo $e->getMessage();
}*/

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
		<div id="user_info">
			<p id="admin_table">
				<?php
				$userInfo = $dao->getUserInfo();
				echo "<table>";
					echo "<tr>";
					echo "<td>" . $userInfo["firstname"] . "</td>";
					echo "<td>" . $userInfo["lastname"] . "</td>";
					echo "<td>" . $userInfo["email"] . "</td>";
					echo "</tr>";
				echo "</table>";
				?>
			</p>
		</div>
		<div class="clear"></div>
		<div id="footer">Copyright &copy; 2017 Chad Alton
    	</div>
	</body>
</html>