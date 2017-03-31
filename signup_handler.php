<?php

session_start();
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);

require_once 'Dao.php';
$dao = new Dao();

$first_name = htmlentities($_POST['first_name']);
$last_name = htmlentities($_POST['last_name']);
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$number = preg_match('@[0-9]@', $password);
$errors = array();

if(isset($_POST["first_name"]) && $_POST['first_name'] != ""){
	$first_name= $_POST["first_name"];
	$_SESSION["first_name"] = $first_name;
	unset($_SESSION["errorFirstName:"]);
}

else{
	unset($_SESSION["first_name"]);
	$_SESSION["errorFirstName"] = "Must Enter a First Name";
	$errors["errorFirstName"] = "Must Enter a First Name";
}

if(isset($_POST["last_name"]) && $_POST['last_name'] != ""){
	$last_name= $_POST["last_name"];
	$_SESSION["last_name"] = $last_name;
	unset($_SESSION["errorLastName"]);
}

else{
	unset($_SESSION["last_name"]);
	$_SESSION["errorLastName"] = "Must Enter a Last Name";
	$errors["errorLastName"] = "Must Enter a Last Name";
}

if(isset($_POST["email"]) && $_POST['email'] != ""){
	$email = $_POST["email"];
	$_SESSION["email"] = $email;
	unset($_SESSION['errorEmail']);
}

else{
	unset($_SESSION["email"]);
	$_SESSION["errorEmail"] = "Must Enter an Email";
	$errors["errorEmail"] = "Must Enter an Email";
}

if(isset($_POST["password"]) && $_POST['password'] != ""){
	$password = $_POST["password"];
	$_SESSION["password"] = $password;
	unset($_SESSION["errorPassword"]);
}

else{
	unset($_SESSION["password"]);
	$_SESSION["errorPassword"] = "Must Enter a Password";
	$errors["errorPassword"] = "Must Enter a Password";
}

	//REGEX	
if(!$number){
	$errors["password_num"] = "Password Contain Have Number";
	$_SESSION["errorPasswordNumber"] = "Password Must Contain Number";
}

if(count($errors) == 0){
	$dao->saveUserInfo($first_name, $last_name, $email, $password);
	header('Location: success.php');
	exit();
}
else{
	header('Location: signup.php');
}

?>
