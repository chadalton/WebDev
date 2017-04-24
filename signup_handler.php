<?php

session_start();
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);

require_once 'Dao.php';
$dao = new Dao();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = preg_match('@[0-9]@', $password);
$errors = array();
$email_exists = $dao->checkEmailExists($email);
$message = $_POST['message'];

//Message handling
$email_subject = "caguitarlessons";
$email_body = "You have received a new message from the user $first_name $last_name.\n".
"Message:\n $message".

//Sending Message
$to = "chadaltonmusic@gmail.com";
$headers = "From: $email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//mail($to,$email_subject,$email_body,$headers);

if(isset($_POST['first_name']) && $_POST['first_name'] != ""){
	$_SESSION["first_name"] = $first_name;
	unset($_SESSION["errorFirstName:"]);
}

else{
	unset($_SESSION["first_name"]);
	$_SESSION["errorFirstName"] = "Must Enter a First Name";
	$errors["errorFirstName"] = "Must Enter a First Name";
}

if(isset($_POST['last_name']) && $_POST['last_name'] != ""){
	$_SESSION["last_name"] = $last_name;
	unset($_SESSION["errorLastName"]);
}

else{
	unset($_SESSION["last_name"]);
	$_SESSION["errorLastName"] = "Must Enter a Last Name";
	$errors["errorLastName"] = "Must Enter a Last Name";
}

if(isset($_POST['email']) && $_POST['email'] != "" && filter_var($email, FILTER_VALIDATE_EMAIL) && !$email_exists){
	$_SESSION["email"] = $email;
	unset($_SESSION['errorEmail']);	
}

else{
	unset($_SESSION["email"]);
	if($_POST['email'] == ""){
		$_SESSION["errorEmail"] = "Must Enter an Email";
		$errors["errorEmail"] = "Must Enter an Email";
	}
	else if($_POST['email'] != "" && !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$_SESSION["errorEmail"] = "Invalid Email Format";
		$errors["errorEmail"] = "Invalid Email Format";
	}
	else if($email_exists){
		$_SESSION["errorEmail"] = "Email Already Exists";
		$errors["errorEmail"] = "Email Already Exists";
	}
}

if(isset($_POST["password"]) && $_POST['password'] != ""){
	$_SESSION["password"] = $password;
	unset($_SESSION["errorPassword"]);
}

else{
	unset($_SESSION["password"]);
	$_SESSION["errorPassword"] = "Must Enter a Password";
	$errors["errorPassword"] = "Must Enter a Password";
}

	//REGEX	
if(!$number && !isset($_SESSION["errorPassword"])){
	$errors["password_num"] = "Password Contain Have Number";
	$_SESSION["errorPasswordNumber"] = "Password Must Contain Number";
}

if(count($errors) == 0){
	$password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");
	$dao->saveUserInfo($first_name, $last_name, $email, $password);
	header('Location: login.php');
	exit();
}
else{
	header('Location: signup.php');
}

?>

?>
