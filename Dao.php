<?php
class Dao {
	private $host = "us-cdbr-iron-east-03.cleardb.net";
	private $db = "heroku_6fab01d7d11c63f";
	private $user = "b9975296aebad0";
	private $pass = "5a87ffef";

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

  public function checkUserAndPass ($email, $password) {
    $conn = $this->getConnection();
    $password = hash("sha256", "password" . "fKd93Vmz!k*dAv5029Vkf9$3Aa");
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
}
?>