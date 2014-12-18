<?php

session_start();

$page = $_GET['page'];


// Типа роутер

switch ($page) {
	case 'admin':
		$title = "Авторизация";
		require "admin.php";
		break;
	
	case 'works':
		$title = "Мои работы";
		require "works.php";
		break;
	
	case 'contacts':
		$title = "Мои контакты";
		require "contacts.php";
		break;
	
	default:
		$title = "Обо мне";
		$page = 'about';
		require "about.php";
		break;
}