<?php
require_once "user.php";

class Dao {
	private $host = "us-cdbr-iron-east-03.cleardb.net";
	private $db = "heroku_6fab01d7d11c63f";
	private $user = "b9975296aebad0";
	private $pass = "5a87ffef";
  private $usersFile = "admin.txt";

  public function getConnection () {
		try {
			$conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
		} catch (Exception $e) {
			echo("Database Not Connected");
			exit;
		}
		return $conn;
  }

  public function saveUserInfo ($firstname, $lastname, $email, $password) {
    $conn = $this->getConnection();
    $user_sql_query = "INSERT INTO user (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
    $q = $conn->prepare($user_sql_query);
    $q->bindParam(":firstname", $firstname);
    $q->bindParam(":lastname", $lastname);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
  }

  public function getUsername ($email) {
    $conn = $this->getConnection();
    $select_query = "SELECT firstname, lastname FROM user WHERE email = :email";
    $q = $conn->prepare($select_query);
    $q->bindParam(":email", $email);
    $q->execute();
    return reset($q->fetchAll());
  }

/*public function getUserInfo(){
    $conn = $this->getConnection();
    $select_query = "SELECT firstname, lastname, email FROM user";
    $q = $conn->prepare($select_query);
    $q->execute();
    return $q->fetchAll();
  }*/

  public function getUserInfo () {
    $conn = $this->getConnection();
    $query = "SELECT * FROM user";
    return $conn->query($query);
  }
  
  public function checkUserAndPass ($email, $password) {
    $conn = $this->getConnection();
    $select_query = "SELECT email FROM user WHERE email = :email AND password = :password";
    $q = $conn->prepare($select_query);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function checkEmailExists ($email){
    $conn = $this->getConnection();
    $select_query = "SELECT email FROM user WHERE email = :email";
    $q = $conn->prepare($select_query);
    $q->bindParam(":email", $email);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function getUser ($email) {
    $users = file($this->usersFile);

    foreach ($users as $user) {
      // recreate User object
      $user = unserialize($user);
      if ($email == trim($user->getEmail())) {
        // user email found, return the object
        return $user;
      }
    }
    throw new Exception("User not found");
  }

}
?>