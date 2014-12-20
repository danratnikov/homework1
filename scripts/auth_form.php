<?php

require_once('config.php');

$login = $_POST['user_login'];
$pass = $_POST['user_pass'];


if ($login == USER && $pass == PASS) {
	$_SESSION['admin'] = true;
}

echo 'incorrect login/password';

