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
	<img id="mainlogo" src="caguitarlessons.png"/>
	<nav id="nav">
		<ul>
			<li><a class ="current" href="index.php">Home</a></li>
			<li><a href="videolessons.php">Video Lessons</a></li>
			<li><a href="lessonmaterials.php">Lesson Materials</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<div id="user_info">
			<?php
			$userInfo = $dao->getUserInfo();

			echo '<table with="70%" border="1" cellpadding="5" cellspacing="5">
					<h1>All Users</h1>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>In Person</th>
					</tr>';
					
			foreach($userInfo as $user){
				echo "<tr>";
				echo "<td>" . $user["firstname"] . "</td>";
				echo "<td>" . $user["lastname"] . "</td>";
				echo "<td>" . $user["email"] . "</td>";
				echo "<td>" . $user["in_person"] . "</td>";
				echo "</tr>";
			};

			$inPerson = $dao->getUserInPerson();

			echo '<table with="70%" border="1" cellpadding="5" cellspacing="5">
					<h1>In Person Users</h1>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>In Person</th>
					</tr>';
					
			foreach($inPerson as $person){
				echo "<tr>";
				echo "<td>" . $person["firstname"] . "</td>";
				echo "<td>" . $person["lastname"] . "</td>";
				echo "<td>" . $person["email"] . "</td>";
				echo "<td>" . $person["in_person"] . "</td>";
				echo "</tr>";
			};
			?>
	</div>
	<div class="clear"></div>
	</div>
</body>
</html>