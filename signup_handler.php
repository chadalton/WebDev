<?php

session_start();

require_once 'Dao.php';
$dao = new Dao();

if($_POST){

	$first_name = htmlentities($_POST['first_name']);
	$last_name = htmlentities($_POST['last_name']);
	$email = htmlentities($_POST['email']);
	$password = htmlentities($_POST['password']);
	$number = preg_match('@[0-9]@', $password);
	$errors = array();


	if(empty($first_name) || strlen($first_name) > 255){
		$errors["first_name_error"] = "ERROR: first name field is empty <br>";
		$_SESSION['error_first_name'] = 'ERROR: first name field is empty';
		header('Location: signup.php');
	}
	else{
		unset($_SESSION['error_first_name']);
	}

	if(empty($last_name) || strlen($last_name) > 255){
		$errors["last_name_error"] = "ERROR: last name field is empty <br>";
	}

	if(empty($email) || strlen($email) > 255){
		$errors["email_error"] = "ERROR: email field is empty <br>";
	}

	if(empty($password) || strlen($password) > 64){
		$errors["password_error"] = "ERROR: password field is empty <br>";
	}

	//REGEX	
	if(!$number){
		$errors["password_num"] = "Password Must Contain Number";
	}

	if(count($errors) == 0){
		$dao->saveUserInfo($first_name, $last_name, $email, $password);
		header('Location: success.php');
		exit();
	}
	else{
		header('Location: signup.php');
	}

}

?>
