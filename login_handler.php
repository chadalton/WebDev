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
		$_SESSION["emailNotEntered"] = "Must Enter an Email";	
	}

	if(isset($_POST["password"])  && $_POST["password"] != ""){
		$password = $_POST['password'];
		$_SESSION['password'] = $password;
		unset($_SESSION['passwordNotEntered']);
	}

	else{
		unset($_SESSION['password']);
		$_SESSION["passwordNotEntered"] = "Must Enter a Password";
		
	}
	
	if(isset($_SESSION["emailNotEntered"]) || isset($_SESSION["passwordNotEntered"])){
		header("Location: login.php");
	}

	else{
		
		$db = new Dao();

		if($db->getConnection()){

			$valid = $db->checkUserAndPass($email, $password);

			if($valid){ 
				$_SESSION['auth_user'] = $email;
				header('Location: login_success.php');
			}
			else{
				$_SESSION['unauth_user'] = "invalid username or password!";
				header('Location: login.php');
			}
		}
		else{
			echo "Coudn't connect to to DB";
		}
	}
?>