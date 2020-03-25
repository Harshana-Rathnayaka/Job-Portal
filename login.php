<?php
session_start();
require_once('connection.php');

if (isset($_POST['Login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header('location:index.php?Empty=Please fill in the blanks');
    } else {
        $query = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($con, $query);
        if (mysqli_fetch_assoc($result)) {
            $_SESSION['User'] = $_POST['username'];
            header("location:welcome.php");
        } else {
            header("location:index.php?Invalid= Please provide a valid username and a password");
        }
    }
    echo 'Working now';
} else {
    echo 'Not working';
}
