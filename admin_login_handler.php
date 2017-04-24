<?php
require_once "Dao.php";
session_start();

	if("chadaltonmusic@gmail.com" == $_POST['email'] && "password1" == $_POST['password']){
		header("Location: admin_only.php");
	}
	else{
		header("Location: login.php");
	}

?>