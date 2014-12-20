<?php

session_start();

@require_once("scripts/config.php");

$page = $_GET['page'];


$pdo = getPDO();
// Типа роутер

$data = array();

switch ($page) {
	case 'admin':
		$title = "Авторизация";
		require "admin.php";
		break;
	
	case 'works':
		$title = "Мои работы";
		if ($_SESSION['admin']) {
			$admin = true;
		} else {
			$admin = false;
		}
		$portfolio = getDataAsArray($pdo, $data_sql['get_portfolio']);
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