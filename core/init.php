<?php
session_start();
error_reporting(0);

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);


require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'account', 'first_name', 'last_name', 'email', 'password', 'address', 'city', 'state', 'zip', 'password_recover', 'type');
	if (user_active($user_data['email']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
	if ($current_file !== 'changepassword.php' && $user_data['password_recover'] == 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}

$errors = array();

$login_links = "<li><a href=\"/login.php\">Login</a></li>
	<li><a href=\"/register.php\">Register</a></li>";

?>