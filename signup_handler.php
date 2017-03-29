<?php

session_start();

require_once 'Dao.php';
$dao = new Dao();

if($_POST){

	$first_name = htmlentities($_POST['first_name']);
	$last_name = htmlentities($_POST['last_name']);
	$email = htmlentities($_POST['email']);
	$password = htmlentities($_POST['password']);
	$errors = array();


	if(empty($first_name)){
		$errors["first_name_error"] = "ERROR: first name field is empty <br>";
		//echo($errors["first_name_error"]);
	}

	if(empty($last_name)){
		$errors["last_name_error"] = "ERROR: last name field is empty <br>";
		//echo($errors["last_name_error"]);
	}

	if(empty($email)){
		$errors["email_error"] = "ERROR: email field is empty <br>";
		//echo($errors["email_error"]);
	}

	if(empty($password)){
		$errors["password_error"] = "ERROR: password field is empty <br>";
		//echo($errors["password_error"]);
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
