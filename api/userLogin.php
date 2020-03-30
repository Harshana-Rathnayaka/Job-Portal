<?php

session_start();
require_once '../includes/dbOperations.php';

$response = array();

// checks the method call
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['username']) and isset($_POST['password'])) {

        // db object
        $db = new DbOperations();


        if ($db->userLogin($_POST['username'], $_POST['password'])) {
            
            // session and reroute
            $_SESSION['User'] = $_POST['username'];
            header("location:../admin/index.php");

            // adding user data to json array
            $user = $db->getUserByUsername($_POST['username']);
            $response['error'] = false;
            $response['id'] = $user['id'];
            $response['email'] = $user['email'];
            $response['username'] = $user['username'];
            $response['firstname'] = $user['first_name'];
            $response['lastname'] = $user['last_name'];

        } else {
            header("location:../login/login-page.php?Invalid= Please provide a valid username and a password");
            $response['error'] = true;
            $response['message'] = "Invalid username or password";
        }
        
    } else {
        header('location:../login/login-page.php?Empty=Please fill in the blanks');
        $response['error'] = true;
        $response['message'] = "Required fields are missing";
    }
}

// json output
echo json_encode($response);
