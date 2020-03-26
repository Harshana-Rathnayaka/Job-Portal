<?php

class DbOperations
{

	private $con;

	function __construct()
	{

		require_once dirname(__FILE__) . '/dbConnection.php';

		$db = new DbConnect();

		$this->con = $db->connect();
	}

	/* CRUD  -> C -> CREATE */

	public function createUser($firstname, $lastname, $username, $pass, $email, $usertype)
	{
		if ($this->isUserExist($username, $email)) {
			return 0;
		} else {
			$password = md5($pass);
			$stmt = $this->con->prepare("INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `user_type`, `user_status`) VALUES (NULL, ?, ?, ?, ?, ?, ?, 0);");
			$stmt->bind_param("ssssss", $firstname, $lastname, $username, $password, $email, $usertype);

			if ($stmt->execute()) {
				return 1;
			} else {
				return 2;
			}
		}
	}

	private function isUserExist($username, $email)
	{
		$stmt = $this->con->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
		$stmt->bind_param("ss", $username, $email);
		$stmt->execute();
		$stmt->store_result();
		return $stmt->num_rows > 0;
	}
}
