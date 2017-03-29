<?php
require_once "Dao.php";
session_start();

	if(isset($_POST["email"])  && $_POST["email"] != ""){
		$email = $_POST['email'];
		$_SESSION['email'] = $email;
		unset($_SESSION['emailNotEntered']);
	}

	else{
		unset($_SESSION['email']);
		$_SESSION["emailNotEntered"] = "Must enter a email!";	
	}

	if(isset($_POST["password"])  && $_POST["password"] != ""){
		$password = $_POST['password'];
		$_SESSION['password'] = $password;
		unset($_SESSION['passwordNotEntered']);
	}

	else{
		unset($_SESSION['password']);
		$_SESSION["passwordNotEntered"] = "Must enter a password!";
		
	}
	
	if(isset($_SESSION["emailNotEntered"]) || isset($_SESSION["passwordNotEntered"])){
		header("Location: login.php");
	}

	else{
		
		$db = new Dao();

		if($db->getConnection()){

			$isValid = $db->checkUserAndPass($email, $password);

			if($isValid){ 
				$_SESSION["authed_user"] = $email;
				header('Location: index.php');
			}
			else{
				$_SESSION['invalid'] = "invalid username or password!";
				header('Location: login.php');
			}
		}
		else{
			echo "Coudn't connect to to DB";
		}
	}
?>