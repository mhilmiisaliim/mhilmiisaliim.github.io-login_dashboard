<?php
session_start();

// username & password sederhana (hardcode)
$username = "admin";
$password = "123";

$user_input = $_POST['username'];
$pass_input = $_POST['password'];

if($user_input == $username && $pass_input == $password){
    $_SESSION['username'] = $user_input;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=1");
}
?>