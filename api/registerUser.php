<?php

// change username into name when connecting to amazon

require_once '../includes/dbOperations.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (
		isset($_POST['firstname']) and
		isset($_POST['lastname']) and
		isset($_POST['username']) and
		isset($_POST['password']) and
		isset($_POST['email']) and
		isset($_POST['usertype'])
	) {

		// we can operate the data further
		$db = new DbOperations();

		$result = $db->createUser(
			$_POST['firstname'],
			$_POST['lastname'],
			$_POST['username'],
			$_POST['password'],
			$_POST['email'],
			$_POST['usertype']
		);

		if ($result == 1) {
			$response['error'] = false;
			$response['message'] = "User registered successfully";
		} elseif ($result == 2) {
			$response['error'] = true;
			$response['message'] = "Some error occured, please try again";
		} elseif ($result == 0) {
			$response['error'] = true;
			$response['message'] = "It seems you are already registered, please choose a different email and username";
		}
	} else {
		$response['error'] = true;
		$response['message'] = "Required fields are missing";
	}
} else {
	$response['error'] = true;
	$response['message'] = "Invalid Request";
}

echo json_encode($response);
