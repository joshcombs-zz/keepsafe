<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'password', 'first_name', 'last_name', 'email', 'account');
	if (user_active($user_data['email']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
}

$errors = array();

$login_links = "<li><a href=\"/login.php\">Login</a></li>
	<li><a href=\"/register.php\">Register</a></li>";

?>