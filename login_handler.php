<?php
require_once "Dao.php";
session_start();

	if("chadaltonmusic@gmail.com" == $_POST['email'] && "password1" == $_POST['password']){
		header("Location: login.php");
	}

	if(isset($_POST["email"])  && $_POST["email"] != ""){
		$email = $_POST['email'];
		$_SESSION["log_email"] = $email;
		unset($_SESSION['emailNotEntered']);
	}

	else{
		unset($_SESSION['email']);
		$_SESSION["emailNotEntered"] = "Must Enter an Email";	
	}

	if(isset($_POST["password"])  && $_POST["password"] != ""){
		$password = $_POST['password'];
		$_SESSION["log_pass"] = $password;
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

			$password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");

			$valid = $db->checkUserAndPass($email, $password);

			if($valid){ 
				$_SESSION["auth_user"] = $email;
				header('Location: login_success.php');
			}
			else{
				$_SESSION["unauth_user"] = "Invalid Email or Password!";
				unset($_SESSION["auth_user"]);
				header('Location: login.php');
			}
		}
		else{
			echo "Coudn't connect to to DB";
		}
	}
?>